<?php

namespace App\Http\Controllers;

use App\Helpers\bbbHelper;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class bbbController extends Controller
{

    private $serverBaseUrl;	
    private $serverSecret;				
    private $attributes = null;
    
    public function __construct()
    {
        $this->setServer();
        
        if($this->serverBaseUrl == null){
            return ;
        }        
    }


    // todo: add loadbalncers
    // select the lowest traffic server
    function setServer(){
        $this->serverBaseUrl = env('BBB_HOST');
        $this->serverSecret = env('BBB_SECRET');
        
        $domain = explode("//",$this->serverBaseUrl);
        $domain = explode("/",$domain[1])[0];

        if(!bbbHelper::isServerAlive($domain)) {
            Log::error('server ' . $domain . ' is offline !!!');
            $this->serverBaseUrl = null;
            return ;
        }
    }


    // create meeting 
    function createMeeting(){

        $creationUrl = $this->getCreateMeetingUrl();

        
        $client = new Client();
        $results = $client->request('GET', $creationUrl);
        $xml = simplexml_load_string($results->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
        
        $json = json_encode($xml);
        $array = json_decode($json, true);
        
        $this->attributes['internalMeetingID'] = $array['internalMeetingID'];
        $this->attributes['createTime'] = $array['createTime'];
        $this->attributes['createDate'] = $array['createDate'];

    }

    // get create meeting url
    function getCreateMeetingUrl(){
        if( $this->attributes == null) {
            dd("Meeting attributes is not set!!");
        }

        $creationUrl = $this->serverBaseUrl."api/create?";

        $params = 
            'name='.urlencode($this->attributes['meeting_name'] ?? 'Test' ) .
            '&meetingID='.urlencode($this->attributes['meeting_id'] ?? '1' ) .
            '&attendeePW='.urlencode($this->attributes['attendee_password'] ?? '12' ) .
            '&moderatorPW='.urlencode($this->attributes['moderator_password'] ?? '43' ) .
            '&logoutURL='.urlencode($this->attributes['logout_url'] ?? 'localhost:8000' ) .
            '&maxParticipants='.urlencode($this->attributes['maximum_participants'] ?? '2' ) .
            '&record='.urlencode($this->attributes['record'] ?? 'true' ) .
            '&autoStartRecording='.urlencode($this->attributes['auto_start_recording'] ?? 'false' ) .
            '&allowStartStopRecording='.urlencode($this->attributes['allow_start_stop_recording'] ?? 'false' ) .
            '&meta_msg='.urlencode($this->attributes['meta_message'] ?? 'This is test'). 
            '&duration='.urlencode($this->attributes['duration'] ?? '20' ) .
            '&welcome='.urlencode($this->attributes['welcome_message'] ?? 'welcome' ) .
            '&moderatorOnlyMessage='.urlencode($this->attributes['moderator_only_message'] ?? ' moderator message' ) .
            '&logo='.urlencode($this->attributes['logo'] ?? '' ) .
            '&muteOnStart='.urlencode($this->attributes['mute_on_start'] ?? 'true' ) .
            // '&bannerColor='.urlencode($this->attributes['banner_color'] ?? '#000000' ) .
            // '&bannerText='.urlencode($this->attributes['banner_text'] ?? 'banner text' ) .
            '&copyright='.urlencode($this->attributes['copyrights'] ?? 'noooooooooo' );

        // configure meta parameters
        // ex.   meta_bbb-origin: "Greenlight", meta_bbb-origin-server-name: URL('/')
        if(isset($this->attributes['meta_array']) && count($this->attributes['meta_array']) > 0){
            foreach ($this->arrMeta as $k => $v) {
                $k = preg_replace('/\s(?=)/', '', $k);
                $v = preg_replace('/\s(?=)/', '', $v);
                $params.='&meta_'.$k.'='.$v;
            }
        }

        // Return the complete URL:
        return ( $creationUrl.$params.'&checksum='.sha1("create".$params.$this->serverSecret) );
    }


    // join meeting
    function joinMeeting(array $attributes = ['name'=>'Fucks']){
        $this->attributes = $attributes;

        $this->createMeeting();

        $meetingUrl = $this->getJoinMeetingUrl();

        return redirect($meetingUrl);
    }


    // get join meeting url
    function getJoinMeetingUrl(){
    
        // Establish the basic join URL:
        $joinUrl = $this->serverBaseUrl."api/join?";
        // Add parameters to the URL:
        $params = 
            'meetingID='.urlencode($this->attributes['meeting_id'] ?? '1').
            '&fullName='.urlencode($this->attributes['full_name'] ?? 'Slman Ali').
            '&password='.urlencode($this->attributes['password'] ?? '43' ).
            '&userID='.urlencode($this->attributes['user_id'] ?? '55' ).
            '&userdata-bbb_custom_style='.urlencode('body { background-color: black !important;} div:has( > #modalDismissDescription) { background-color: green !important; }').
            '&userdata-bbb_shortcuts=%5B%5D'.
            '&clientURL='.urlencode(URL('/')).
            '&userdata-bbb_show_participants_on_login='.urlencode(false).
            '&avatarURL=https://lh3.googleusercontent.com/ogw/ADGmqu-x0NHR23q5gvEdcZlw_N6CnJSUcdFG-szO--o=s32-c-mo'
            ;		
        
        // Only use createTime if we really want to use it. If it's '', then don't pass it:
        if (((isset($this->createTime)) && ($this->createTime != ''))) {
            $params .= '&createTime='.urlencode($this->createTime);
        }
        
        // Return the URL:
        return ($joinUrl.$params.'&checksum='.sha1("join".$params.$this->serverSecret));
    }


    // end meeting


    // get meetings


    // get meeting info


    // get recordings


}

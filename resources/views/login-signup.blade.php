
<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>انشاء حساب</h1>
			
			<input type="text" placeholder="الاسم" />
			<input type="email" placeholder="البريد الالكتروني" />
            <input type="password" placeholder="كلمة المرور" />
            <input type="password" placeholder="تأكيد كلمة المرور" />

			<button class="space">تسجيل الحساب</button>
			<div class="altSign">
				<p>أو يمكنك الدخول الى حسابك من هنا</p>
				<button id="signIn1">الدخول الى حسابي</button>
				</div>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
            <img src="./assets/quiq.png" alt="" srcset="" style="width: 30%;margin-bottom:35px">
			<input type="email" placeholder="البريد الالكتروني" />
			<input type="password" placeholder="كلمة المرور" />
			<a href="#">نسيت كلمة المرور ؟</a>
			<button>الدخول</button>
			<div class="altSign">
            <p>أو يمكنك تسجيل حساب جديد</p>
            <button id="signUp1">تسجيل حساب</button>
	        </div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>اهلا بك مرة أخرى</h1>
				<p>لتبقى متصلا دائما الرجاء ادخال معلوماتك</p>
				<button class="ghost" id="signIn">تسجيل الدخول</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>اهلا بك</h1>
				<p>سجل حسابك وابدأ رحلة التعّلم معنا</p>
				<button class="ghost" id="signUp">سجل حسابك</button>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>
<script src="{{ asset('js/login.js') }}"></script>
<script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
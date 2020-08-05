const signUpButton = document.getElementById('signUp');
const signUpButton1 = document.getElementById('signUp1');

const signInButton = document.getElementById('signIn');
const signInButton1 = document.getElementById('signIn1');

const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});
signUpButton1.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
signInButton1.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
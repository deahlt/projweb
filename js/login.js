function toggleForm() {
	var mainContainer = document.querySelector('.mainContainer');
	mainContainer.classList.toggle('active');
}

const registerBtn = document.getElementById('submit-su');
const logIn = document.getElementById('submit-si');
const logInName = document.getElementById('username-si');
const logInPass = document.getElementById('password-si');
const pass = document.getElementById('password-su');
const conPass = document.getElementById('password2-su');
const warnLength = document.getElementById('warning-length');
const warnCon = document.getElementById('warning-confirm');
const name = document.getElementById('username-su');
const email = document.getElementById('email-su');
const warnEamil = document.getElementById('warning-email');
const warnNameShort = document.getElementById('warning-name-short');
const warnNameLong = document.getElementById('warning-name-long');
const warnNameError = document.getElementById('warning-name-error');
const warnError = document.getElementById('warning-error');
const expression = /\S+@\S+/;

registerBtn.addEventListener('click', () => {
	if (pass.value.length < 8) {
		warnLength.style.display = 'block';
		pass.value = '';
		conPass.value = '';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (pass.value !== conPass.value) {
		warnCon.style.display = 'block';
		pass.value = '';
		conPass.value = '';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (name.value.length < 4) {
		warnNameShort.style.display = 'block';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (name.value.length > 14) {
		warnNameLong.style.display = 'block';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (expression.test(email.value) === false) {
		warnEamil.style.display = 'block';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (
		expression.test(email.value) === true &&
		name.value.length < 14 &&
		name.value.length > 4 &&
		pass.value === conPass.value &&
		pass.value.length > 8
	) {
		alert('Informatat janë në rregull!');
		location.reload();
	}
});

logIn.addEventListener('click', () => {
	if (logInName.value === '') {
		warnNameError.style.display = 'block';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (logInPass.value === '') {
		warnError.style.display = 'block';

		setTimeout(() => {
			this.clearAlert();
		}, 6000);
	}
	if (logInPass.value !== '' && logInName.value !== '') {
		alert('Informatat janë në rregull!');
		location.reload();
	}
});

function clearAlert() {
	if (warnLength) {
		warnLength.style.display = 'none';
	}
	if (warnCon) {
		warnCon.style.display = 'none';
	}
	if (warnNameLong) {
		warnNameLong.style.display = 'none';
	}
	if (warnNameShort) {
		warnNameShort.style.display = 'none';
	}
	if (warnEamil) {
		warnEamil.style.display = 'none';
	}
	if (logInName) {
		warnNameError.style.display = 'none';
	}
	if (logInPass) {
		warnError.style.display = 'none';
	}
}

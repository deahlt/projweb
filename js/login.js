var registerBtn, logIn, logInName, logInPass, pass, conPass, warnLength, warnCon, name0, email, warnEmail, warnNameShort, warnError, expression;

function toggleForm() {
    var mainContainer = document.querySelector('.mainContainer');
    mainContainer.classList.toggle('active');
}

window.onload = function () {
    registerBtn = document.getElementById('submit-su');

    logIn = document.getElementById('submit-si');
    logInName = document.getElementById('username-si');
    logInPass = document.getElementById('password-si');

    pass = document.getElementById('password-su');
    conPass = document.getElementById('password2-su');
    warnLength = document.getElementById('warning-length');
    warnCon = document.getElementById('warning-confirm');
    name0 = document.getElementById('username-su');
    email = document.getElementById('email-su');

    warnEmail = document.getElementById('warning-email');
    warnNameShort = document.getElementById('warning-name-short');
    warnNameLong = document.getElementById('warning-name-long');


    warnNameError = document.getElementById('warning-name-error');
    warnError = document.getElementById('warning-error');


    expression = /\S+@\S+/;

    console.log(logIn);
    logIn.addEventListener('click', () => {
        if (logInPass.value.length < 8) {
            warnError.style.display = 'block';
            logInPass.value = '';

            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }

        if (expression.test(logInName.value) === false) {
            warnNameError.style.display = 'block';
            logInName.value = '';
            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }
    });

    registerBtn.addEventListener('click', () => {
        if (pass.value.length < 8) {
            warnLength.style.display = 'block';

            pass.value = '';
            conPass.value = '';
            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }
        if (pass.value != conPass.value) {
            warnCon.style.display = 'block';

            pass.value = '';
            conPass.value = '';
            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }
        if (name0.value.length < 4) {
            warnNameShort.style.display = 'block';

            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }
        if (name0.value.length > 14) {
            warnNameLong.style.display = 'block';

            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }
        if (expression.test(email.value) === false) {
            warnEmail.style.display = 'block';

            setTimeout(() => {
                this.clearAlert();
            }, 3000);
        }

    });

}

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
    if (warnEmail) {
        warnEmail.style.display = 'none';
    }
    if (warnError) {
        warnError.style.display = 'none';
    }
    if (warnNameError) {
        warnNameError.style.display = 'none';
    }
}
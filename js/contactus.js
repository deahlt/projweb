// VALIDIMI I CONTACT US
function validation(form) {
    var $name = document.getElementById("name").value;
    var $mailFrom = document.getElementById("email").value;
    var $phone = document.getElementById("phonenumber").value;
    var $message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    var text;

    error_message.style.padding = "10px";

    if ($name.length < 3) {
        text = "Shkruani emrin tuaj të plotë!";
        error_message.innerHTML = text;
        return false;
    }

    if ($mailFrom.indexOf("@") == -1 || email.length < 10) {
        text = "Shkruani një email valide!";
        error_message.innerHTML = text;
        return false;
    }
    if (isNaN(parseInt($phone)) || $phone.length != 9) {
        text = "Shkruani një numër valid!";
        error_message.innerHTML = text;
        return false;
    }
    if ($message.length <= 0) {
        text = "Shkruani mesazhin tuaj.";
        error_message.innerHTML = text;
        return false;
    }
    Object.getPrototypeOf(form).submit.call(form);
}
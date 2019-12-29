function validateRegInput() {
    var validationPass = true;
    var errorMessages = ["",""];
    var errorMessagetxt = "";
    var statusBox = document.getElementById("validationResults");
 
    var usernameInput = document.getElementById("username");
    var passwordInput = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");
    var emailInput = document.getElementById("email");
    var confirmEmail = document.getElementById("confirmEmail");
 
    var pageElements = [usernameInput, passwordInput, confirmPassword, emailInput, confirmEmail];

//
if (/^[A-Za-z0-9]\w{8,16}$/.test(passwordInput.value)) {
   validationPass = true;
} else {
   errorMessages[0] = "Password must contain an uppercase letter, 2 numbers, and a $.<br>";
   passwordInput.style.backgroundColor = "grey";
   validationPass = false;
}

    //checks to see if passwords match
   if (passwordInput.value.length != confirmPassword.value.length) {
      validationPass = true;
   } else {
      errorMessages[0] = "Passwords do not match.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }

   //checks that emails match
   if (emailInput.value.length != confirmEmail.value.length) {
      validationPass = true;
   } else {
      errorMessages[0] = "Emails do not match.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }

   //checks for a valid email
   if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailInput.value)) {
      validationPass = true;
   } else {
      errorMessages[0] = "Email must end in @samex.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }

   //checks username length
    if (usernameInput.value.length > 11) {
      errorMessages[0] = "Username must be less than 10 characters long.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }

      //checks username length
   if (usernameInput.value.length < 2) {
      errorMessages[0] = "Username must be more than 1 character long.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }

      //checks password length
    if (passwordInput.value.length > 17) {
       errorMessages[0] = "Password must be less than 16 characters long.<br>";
       passwordInput.style.backgroundColor = "grey";
       validationPass = false;
    }

      //checks password length
    if (passwordInput.value.length < 7) {
      errorMessages[0] = "Password must be more than 6 characters long.<br>";
      passwordInput.style.backgroundColor = "grey";
      validationPass = false;
   }
 
    // Checks for 0 length fields.
    for (var j=0; j < pageElements.length; j++) {
       errorMessages[1] = "There are empty fields.<br>";
       if (pageElements[j].value.length == 0) {
          pageElements[j].style.backgroundColor = "grey";
          validationPass = false;
       }
    }
 
    // Build error list
    if (validationPass == false) {
       errorMessagetxt += "<ul>";
       for (var i=0; i < 2; i++) {
          if (errorMessages[i].length > 0) {
             errorMessagetxt = errorMessagetxt + "<li>" + errorMessages[i] + "</li>";
          }
       }
       errorMessagetxt += "</ul>"
    }
    statusBox.innerHTML = errorMessagetxt;
 
    return validationPass;
 }
   

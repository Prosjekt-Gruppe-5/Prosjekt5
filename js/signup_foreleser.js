function IsEmpty() {
    var first1 = document.forms["form1"]["first"].value;
    if (first1 == "") {
        alert("Name must be filled out");
        return false;
    }

    var last1 = document.forms["form1"]["last"].value;
    if (last1 == "") {
        alert("Surname must be filled out");
        return false;
    }

    var email1 = document.forms["form1"]["email"].value;
    if (email1 == "") {
        alert("Email must be filled out");
        return false;
    }

    var pwd1 = document.forms["form1"]["pwd"].value;
    if (pwd1 == "") {
        alert("Password must atleast have minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character");
        return false;
    }
  
    var emner1 = document.forms["form1"]["emner"].value;
    if (emner1 == "") {
        alert("Emne must be chosen");
       alert("YOU WERE THE CHOSEN ONE, ANAKEN!!!")
        return false;
    }
    
    var fileToUpload1 = document.forms["form1"]["fileToUpload"].value;
    if (fileToUpload1 == "") {
        alert("You have to upload a profile pic");
        return false;
    }
    var first3 = document.forms["form1"]["pin"].value;
    if (first3 != 2341) {
        alert("Pin must be filled out");
        return false;
    }
} 
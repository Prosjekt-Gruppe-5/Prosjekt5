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
        alert("Password must be filled out");
        return false;
    }
    var kull1 = document.forms["form1"]["kull"].value;
    if (kull1 == "") {
        alert("Kull must be filled out");
        return false;
    }
    var first3 = document.forms["form1"]["pin"].value;
    if (first3 != 2341) {
        alert("Wrong pin");
        return false;
    }
    var emne1 = document.forms["form1"]["Studieretning"].value;
    if (emne1 == "") {
        alert("Studieretning must be chosen");
       alert("YOU WERE THE CHOSEN ONE, ANAKEN!!!")
       return false;
    }
}  
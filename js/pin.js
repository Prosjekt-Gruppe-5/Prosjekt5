function Pin() { 
    var first2 = document.forms["form2"]["pin"].value;
    if (first2 != 2341) {
        alert("Wrong pin");
        return false;
    }
} 
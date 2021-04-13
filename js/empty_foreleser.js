function IsEmpty() {
    var first1 = document.forms["form1"]["message1"].value;
    if (first1 == "") {
        alert("Message must be filled out");
        return false;
    }

    var first2 = document.forms["form1"]["PIN_text"].value;
    if (first2 != 622521511) {
        alert("Pin must be filled out");
        return false;
    }
}  
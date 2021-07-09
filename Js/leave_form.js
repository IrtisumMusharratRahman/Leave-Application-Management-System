function GetDays() {
    var dropdt = new Date(document.getElementById("end").value);
    var pickdt = new Date(document.getElementById("start").value);
    return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
}

function cal() {
    if (document.getElementById("end")) {
        document.getElementById("numdays2").value = GetDays();
    }
}

function validateForm() {
    if (document.forms["leave_form"]["name"].value == "") {
        alert("Please Enter Your Full Name!!!");
        return false;
    }
    if (document.forms["leave_form"]["start_date"].value == "") {
        alert("Please Enter Leave Starting Date!!!");
        return false;
    }
    if (document.forms["leave_form"]["end_date"].value == "") {
        alert("Please Enter Leave Ending Date!!!");
        return false;
    }
    if (document.forms["leave_form"]["reason"].value == "") {
        alert("Please Enter Reason For Your Leave!!!");
        return false;
    }
}
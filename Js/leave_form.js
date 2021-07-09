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
        document.forms["leave_form"]["name"].style.background = 'red';
        alert("Please Enter Your Full Name!!!");
        return false;
    } else {
        document.forms["leave_form"]["name"].style.background = 'white';
    }
    if (document.forms["leave_form"]["start_date"].value == "") {
        document.forms["leave_form"]["start_date"].style.background = 'red';
        alert("Please Enter Leave Starting Date!!!");
        return false;
    } else {
        document.forms["leave_form"]["start_date"].style.background = 'white';
    }
    if (document.forms["leave_form"]["end_date"].value == "") {
        document.forms["leave_form"]["end_date"].style.background = 'red';
        alert("Please Enter Leave Ending Date!!!");
        return false;
    } else {
        document.forms["leave_form"]["end_date"].style.background = 'white';
    }
    if (document.forms["leave_form"]["reason"].value == "") {
        document.forms["leave_form"]["reason"].style.background = 'red';
        alert("Please Enter Reason For Your Leave!!!");
        return false;
    } else {
        document.forms["leave_form"]["reason"].style.background = 'white';
    }
}
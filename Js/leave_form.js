function GetDays() {
  var dropdt = new Date(document.getElementById("end").value);
  var pickdt = new Date(document.getElementById("start").value);
  return parseInt((dropdt - pickdt) / (24 * 3600 * 1000) + 1);
}

function cal() {
  if (document.getElementById("end")) {
    document.getElementById("numdays2").value = GetDays();
  }
}

function validateForm() {
  if (document.getElementById("name").value == "") {
    document.getElementById("name").style.background = "red";
    alert("Please Enter Your Full Name!!!");
    return false;
  } else {
    document.getElementById("name").style.background = "white";
  }
  if (document.getElementById("start").value == "") {
    document.getElementById("start").style.background = "red";
    alert("Please Enter Leave Starting Date!!!");
    return false;
  } else {
    document.getElementById("start").style.background = "white";
  }
  if (document.forms["leave_form"]["end_date"].value == "") {
    document.forms["leave_form"]["end_date"].style.background = "red";
    alert("Please Enter Leave Ending Date!!!");
    return false;
  } else {
    document.forms["leave_form"]["end_date"].style.background = "white";
  }
  if (document.forms["leave_form"]["reason"].value == "") {
    document.forms["leave_form"]["reason"].style.background = "red";
    alert("Please Enter Reason For Your Leave!!!");
    return false;
  } else {
    document.forms["leave_form"]["reason"].style.background = "white";
  }
}

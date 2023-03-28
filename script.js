function showForm2() {
  document.getElementById("form1").style.display = "none";
  document.getElementById("form2").style.display = "block";
}
//block
//function getLocation() {
//  if (navigator.geolocation) {
//    navigator.geolocation.getCurrentPosition(showPosition);
//  } else {
//    alert("Geolocation is not supported by this browser.");
//  }
//}
//
//function showPosition(position) {
//  var latitude = position.coords.latitude;
//  var longitude = position.coords.longitude;
//  document.getElementById("location").value = latitude + ", " + longitude;
//}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  document.getElementById("location").value = latitude + ", " + longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      alert("User denied the request for geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.");
      break;
  }
}


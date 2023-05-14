

//function showForm2() {
//  document.getElementById("form1").style.display = "none";
//  document.getElementById("form2").style.display = "block";
//}
////block
////function getLocation() {
////  if (navigator.geolocation) {
////    navigator.geolocation.getCurrentPosition(showPosition);
////  } else {
////    alert("Geolocation is not supported by this browser.");
////  }
////}
////function showPosition(position) {
////  var latitude = position.coords.latitude;
////  var longitude = position.coords.longitude;
////  document.getElementById("location").value = latitude + ", " + longitude;
////}

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
//
//function getLocation() {
//  if (navigator.geolocation) {
//    navigator.geolocation.getCurrentPosition(showPosition, showError);
//  } else {
//    console.log("Geolocation is not supported by this browser.");
//  }
//}
//
//function showPosition(position) {
//  var latitude = position.coords.latitude;
//  var longitude = position.coords.longitude;
//
//  var geocoder = new google.maps.Geocoder();
//  var latlng = new google.maps.LatLng(latitude, longitude);
//
//  geocoder.geocode({ 'latLng': latlng }, function(results, status) {
//    if (status == google.maps.GeocoderStatus.OK) {
//      if (results[0]) {
//        var address = results[0].formatted_address;
//        document.getElementById("location").value = address;
//      } else {
//        console.log("No results found");
//      }
//    } else {
//      console.log("Geocoder failed due to: " + status);
//    }
//  });
//}
//
//function showError(error) {
//  switch(error.code) {
//    case error.PERMISSION_DENIED:
//      console.log("User denied the request for geolocation.");
//      break;
//    case error.POSITION_UNAVAILABLE:
//      console.log("Location information is unavailable.");
//      break;
//    case error.TIMEOUT:
//      console.log("The request to get user location timed out.");
//      break;
//    case error.UNKNOWN_ERROR:
//      console.log("An unknown error occurred.");
//      break;
//  }
//}



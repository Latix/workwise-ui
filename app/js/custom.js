$(document).ready(function () {
	var currentYear = (new Date).getFullYear();
	// var autocomplete;

	// function initAutocomplete() {
	//   autocomplete = new google.maps.places.Autocomplete(
	//     document.getElementById('autocomplete'), {types: ['geocode']});
	// }

	// function geolocate() {
	//   if (navigator.geolocation) {
	//     navigator.geolocation.getCurrentPosition(function(position) {
	//       var geolocation = {
	//         lat: position.coords.latitude,
	//         lng: position.coords.longitude
	//       };
	//       var circle = new google.maps.Circle(
	//           {center: geolocation, radius: position.coords.accuracy});
	//       autocomplete.setBounds(circle.getBounds());
	//     });
	//   }
	// }
	$(".footer-copy").html("&copy; "+currentYear+" - Workwise");

	flatpickr('#flatpickr',{
	  altInput: true,
	  altFormat: "F j, Y",
	  dateFormat: "Y-m-d",
	  defaultDate: new Date(),
	  onChange: function () {
	  	console.log($("#flatpickr").val());
	  }
	});
});
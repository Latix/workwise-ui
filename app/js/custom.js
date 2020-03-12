$(document).ready(function () {
	var currentYear = (new Date).getFullYear();
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
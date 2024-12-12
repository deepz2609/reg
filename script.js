$(document).ready(function () {
  $("#admissionForm").on("submit", function (e) {
    e.preventDefault();

    // Get form data
    var formData = $(this).serialize();

    // Send data to the server using AJAX
    $.ajax({
      url: "submit.php",
      type: "POST",
      data: formData,
      success: function (response) {
        // Hide form and show the submitted data
        $("#admissionForm").hide();
        $("#response").show();
        $("#displayData").html(response);
      },
      error: function () {
        alert("There was an error while submitting the form!");
      },
    });
  });
});

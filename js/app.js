$(document).ready(function() {
  AOS.init();
  // create_account client side validation
  $("#firstname").keyup(function() {
    $value = $(this).val();
  });
});

$(document).ready(function() {
  $('button').click(function() {
    $('button:first').toggleClass('is-active');
    $('body').toggleClass('ofh');
  });
});

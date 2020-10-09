var script = document.createElement('script');
script.src = '//code.jquery.com/jquery-1.11.0.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

// custom Query

// on click function
$(document).ready(function () {
  $('.button-jq').on('click', function () {
    let Jbutton = $(this).attr('data-button');
    // $('#' + Jbutton).toggle();
    $('#' + Jbutton).hover(
      function () {
        $(this).addClass('hove-color');
      },
      function () {
        $(this).removeClass('hover-color');
      }
    );
    $('#' + Jbutton).slideToggle('900', function () {});
  });
});

var script = document.createElement('script');
script.src = '//code.jquery.com/jquery-1.11.0.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

// custom Query

// on click function
$(document).ready(function () {
  $('.button-jq').on('click', function () {
    //   this line of code might help for the next part
    // make the skill tree cards clickable
    // let Jbutton = $(this).attr('data-button');
    $('#data-info').toggle();
    // $('.button-jq').toggle();
    // alert(JQbutton);
  });
});

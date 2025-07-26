$(document).ready(function () {
  $('.ticker-wrapper').on('mouseenter', function () {
    $('.ticker-content').css('animation-play-state', 'paused');
  });

  $('.ticker-wrapper').on('mouseleave', function () {
    $('.ticker-content').css('animation-play-state', 'running');
  });
});



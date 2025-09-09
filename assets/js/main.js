$(document).ready(function () {
  $('.ticker-wrapper').on('mouseenter', function () {
    $('.ticker-content').css('animation-play-state', 'paused');
  });

  $('.ticker-wrapper').on('mouseleave', function () {
    $('.ticker-content').css('animation-play-state', 'running');
  });

  // Disable Bootstrap dropdown click behavior for hover-based dropdowns
  $('.navbar-nav .dropdown-toggle').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    return false;
  });

  // Remove Bootstrap dropdown event listeners
  $('.navbar-nav .dropdown').off('click.bs.dropdown');
  $('.navbar-nav .dropdown-toggle').off('click.bs.dropdown');
});



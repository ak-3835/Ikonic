var video = document.getElementById('video');
  var videoOverlay = document.getElementById('videoOverlay');

  video.addEventListener('playing', function () {
      // Hide the overlay when the video is played
      videoOverlay.classList.add('hidden');
  });
  // Add custom JavaScript to handle title click
  $(document).ready(function () {
        $('.accordion .card-header').click(function() {
            $('.accordion .card-header').removeClass('active');
            $(this).addClass('active');
        });
    });
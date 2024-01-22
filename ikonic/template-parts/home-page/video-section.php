<?php $video_section = get_field('video_section'); // 'video_section' is parent group ?>
    <div class="col-12 center-content pad">
        <h1 class="mt-5 text-white"><?php echo $video_section['title']; ?></h1>
        <div class="video-container mb-5">
            <div id="videoOverlay" class="video-overlay"></div>
            <!-- Replace the video URL with your actual video URL -->
            <video id="video" width="100%" height="100%" controls>
            <source src="<?php echo $video_section['video_url']; ?>" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>
    </div>
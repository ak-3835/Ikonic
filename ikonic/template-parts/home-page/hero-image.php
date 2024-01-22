<?php $hero_section = get_field('hero_section'); // 'hero_section' is parent group ?>
    <div class="background-image" style="background-image: url('<?php echo $hero_section['hero_image']; ?>');">
        <div class="container">
        <h1 class="hero-text"><?php echo $hero_section['hero_text'];?></h1>
        <p class="hero-para"><?php echo $hero_section['slogan_text'];?></p>
        </div>
    </div>
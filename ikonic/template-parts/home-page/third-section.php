<?php $third_section = get_field('third_section'); // 'third_section' is parent group ?>
<div class="container">
      <h1 class="mt-5 mb-4 center-text txt-color"><?php echo $third_section['title']; ?></h1>
      <div class="center-text ">
          <p class="txt-color"><?php echo  $third_section['paragraph']; ?></p>
          <img src="<?php echo $third_section['image']; ?>" alt="Accreditation Image" class="img-fluid mt-5 mb-5" style="max-width: 100%;">
      </div>
    </div>
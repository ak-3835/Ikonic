<?php
/*
Template Name: Home Template
*/
?>
<?php get_header(); ?>

<!-- Hero Section -->
<?php get_template_part( 'template-parts/home-page/hero-image'); ?>
<!-- End Hero Section -->
    <?php $second_section = get_field('second_section'); // 'second_section' is parent group ?>
    <div class="container mar-top">
        <h1 class="mb-3 txt-color"><?php echo $second_section['title']; ?></h1>
        <p class="mb-5"><?php echo $second_section['paragraph']; ?>
    </div>

    <!-- Four Boxes -->
    <div class="container mar-bot">
    <?php get_template_part( 'template-parts/home-page/box-section'); ?>
    </div>
    <!-- End Four Boxes -->

  <div class="bg-color pt-5 pb-5">
    <?php get_template_part( 'template-parts/home-page/third-section'); ?>
  </div>

  <!-- Video Section -->
  <div class="vid-bg pt-5 pb-5">
    <div class="container">
      <div class="row">
        <?php get_template_part( 'template-parts/home-page/video-section'); ?>
      </div>
    </div>
  </div>

  <!-- specialized_programs -->
  <div class="spec-bg pb-5">
    <?php get_template_part( 'template-parts/home-page/specialized-programs'); ?>
  </div>

  
  <div class="container mt-5">
    <?php get_template_part( 'template-parts/home-page/frequesntly-asked-questions'); ?>
  </div>

  <?php $questions = get_field('frequently_asked_questions'); // 'questions' is parent group ?>
  <div class="container pt-2 pb-4">
    <h6 class="mt-5 mb-3 center-text txt-color icon-text"><?php echo $questions['text_1']; ?></h6>
    <div class="center-text ">
        <p class="txt-color mb-5"><?php echo $questions['paragraph']; ?></p>
        <button class="cus-btn mx-3 mb-3"><?php echo $questions['button_text_1']; ?></button><button class="cus-btn mx-3"><?php echo $questions['button_text_2']; ?></button>
      </div>
  </div>


  <?php get_footer(); ?>
<?php wp_footer(); ?>

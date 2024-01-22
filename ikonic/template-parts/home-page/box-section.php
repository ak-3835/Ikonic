<?php $four_box_section = get_field('four_box_section'); // 'four_box_section' is parent group ?>
<div class="row">
      <div class="col-md-3 d-flex flex-column mb-3">
          <div class="custom-column bg-white flex-grow-1 items-center">
              <i class="custom-icon fas fa-home"></i>
              <p class="icon-text txt-color"><?php echo $four_box_section['first_box_text']; ?></p>
          </div>
      </div>
      <div class="col-md-3 d-flex flex-column mb-3">
          <div class="custom-column bg-white flex-grow-1 items-center">
              <!-- <i class="custom-icon fa fa-medkit"></i> -->
              <i class="custom-icon fas fa-briefcase" aria-hidden="true"></i>
              <p class="icon-text txt-color"><?php echo $four_box_section['second_box_text']; ?></p>
          </div>
      </div>
      <div class="col-md-3 d-flex flex-column mb-3">
          <div class="custom-column bg-white flex-grow-1 items-center">
              <i class="custom-icon fas fa-heart"></i>
              <p class="icon-text txt-color"><?php echo $four_box_section['third_box_text']; ?></p>
          </div>
      </div>
      <div class="col-md-3 d-flex flex-column mb-3">
          <div class="custom-column bg-white flex-grow-1 items-center">
              <i class="custom-icon fas fa-globe"></i>
              <p class="icon-text txt-color"><?php echo $four_box_section['fourth_box_text']; ?></p>
          </div>
      </div>
    </div>
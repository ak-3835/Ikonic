<?php $specialized_programs = get_field('specialized_programs'); // 'specialized_programs' is parent group ?>
<div class="container pt-4 pb-4">
      <h1 class="mt-5 mb-3 center-text txt-color"><?php echo $specialized_programs['title']; ?></h1>
      <div class="center-text ">
          <p class="txt-color icon-text"><?php echo $specialized_programs['slogan']; ?></p>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
          <div class="col-md-6">
              <div class="custom-column bg-white inn-pad" id="hov">
                  <i class="fa fa-wheelchair custom-icon"></i>
                  <h5 class="txt-color"><?php echo $specialized_programs['box_1_text']; ?></h5>
              </div>
          </div>
          <div class="col-md-6">
              <div class="custom-column bg-white inn-pad">
                  <i class="fa fa-medkit custom-icon"></i>
                  <h5 class="txt-color"><?php echo $specialized_programs['box_2_text']; ?></h5>
              </div>
          </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
            <div class="custom-column bg-white inn-pad">
                <i class="fa fa-wheelchair custom-icon"></i>
                <h5 class="txt-color"><?php echo $specialized_programs['box_3_text']; ?></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-column bg-white inn-pad">
                <i class="fa fa-medkit custom-icon"></i>
                <h5 class="txt-color"><?php echo $specialized_programs['box_4_text']; ?></h5>
            </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
            <div class="custom-column bg-white inn-pad">
                <i class="fa fa-wheelchair custom-icon"></i>
                <h5 class="txt-color"><?php echo $specialized_programs['box_5_text']; ?></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="custom-column bg-white inn-pad">
                <i class="fa fa-medkit custom-icon"></i>
                <h5 class="txt-color"><?php echo $specialized_programs['box_6_text']; ?></h5>
            </div>
        </div>
      </div>

      <div class="row mt-3 spec-center ">
        <div class="col-md-6">
            <div class="custom-column bg-white inn-pad">
                <i class="fa fa-wheelchair custom-icon"></i>
                <h5 class="txt-color"><?php echo $specialized_programs['box_7_text']; ?></h5>
            </div>
        </div>
      </div>
    </div>
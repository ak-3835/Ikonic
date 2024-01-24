<?php $fre_quen = get_field('frequently_asked_questions'); // 'questions' is parent group ?>

<h1 class="txt-color mb-3"><?php echo $fre_quen['title']; ?></h1>
<div class="accordion" id="accordionExample">
    <!-- Accordion Item 1 -->
    <?php if( have_rows('accordion') ):
    $i = 0;
    while( have_rows('accordion') ) : the_row();
    $question = get_sub_field('question');
    $answer = get_sub_field('answer'); 
    if($i==0){
        $sh = "show";
        $act= "active";
    }
    else{
        $sh = "";
        $act = "";
    }
    ?>
    <div class="card">
        <div class="card-header <?=$act?>" id="heading<?=$i?>" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
            <h5 class="mb-0"><?php echo $question; ?></h5>
        </div>

        <div id="collapse<?=$i?>" class="collapse <?=$sh?>" aria-labelledby="heading<?=$i?>" data-parent="#accordionExample">
            <div class="card-body"><?php echo $answer; ?></div>
        </div>
    </div>
    <?php
    $i++;
    endwhile;
    else :
    echo "nothing found";
    endif;
    ?>
    

    <!-- Accordion Item 2 -->
    <!-- <div class="card mt-3">
        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5 class="mb-0"><?php //echo $questions['question_2']; ?></h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body"><?php //echo $questions['answer_2']; ?></div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0"><?php //echo $questions['question_3']; ?></h5>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body"><?php //echo $questions['answer_3']; ?></div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5 class="mb-0"><?php //echo $questions['question_4']; ?></h5>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body"><?php //echo $questions['answer_4']; ?></div>
        </div>
    </div> -->
</div>
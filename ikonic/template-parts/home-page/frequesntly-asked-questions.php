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
</div>
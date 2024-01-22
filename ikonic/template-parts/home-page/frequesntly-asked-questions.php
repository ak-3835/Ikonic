<?php $questions = get_field('frequently_asked_questions'); // 'questions' is parent group ?>
<h1 class="txt-color mb-3"><?php echo $questions['title']; ?></h1>
<div class="accordion" id="accordionExample">
    <!-- Accordion Item 1 -->
    <div class="card">
        <div class="card-header active" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0"><?php echo $questions['question_1']; ?></h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body"><?php echo $questions['answer_1']; ?></div>
        </div>
    </div>

    <!-- Accordion Item 2 -->
    <div class="card mt-3">
        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5 class="mb-0"><?php echo $questions['question_2']; ?></h5>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body"><?php echo $questions['answer_2']; ?></div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0"><?php echo $questions['question_3']; ?></h5>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body"><?php echo $questions['answer_3']; ?></div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5 class="mb-0"><?php echo $questions['question_4']; ?></h5>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body"><?php echo $questions['answer_4']; ?></div>
        </div>
    </div>
</div>
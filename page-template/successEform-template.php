<?php 
/*
Template Name: SuccessEform Template
*/
get_header();
$visaline_evaluationForm_success = get_field('visaline_evaluationForm_success');
?>
<div class="successSectionBack">
    <div class="successSection mainView">
        <div class="successSectionDesc">
            <div class="success lightBorder highMargined lowPadding lowRadius">
                <div class="successsvg">
                    <?php echo $visaline_evaluationForm_success['icon']; ?>
                </div>
                <div class="success-text">
                    <p>Dear <span id="nameClientEval"></span></p>
                    <p><?php echo $visaline_evaluationForm_success['heading']; ?></p>
                    <p><?php echo $visaline_evaluationForm_success['sub_heading']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php 
/*
Template Name: UnsuccessEform Template
*/
get_header();
$visaline_evaluationForm_unsuccess = get_field('visaline_evaluationForm_unsuccess');
?>
<div class="unsuccessSectionBack">
    <div class="unsuccessSection mainView">
        <div class="unsuccessSectionDesc">
            <div class="unsuccess lightBorder highMargined lowPadding lowRadius">
                <div class="unsuccesssvg">
                    <?php echo $visaline_evaluationForm_unsuccess['icon']; ?>
                </div>
                <div class="unsuccess-text">
                    <p>Dear <span id="nameClientEval"></span></p>
                    <p><?php echo $visaline_evaluationForm_unsuccess['heading']; ?></p>
                    <p><?php echo $visaline_evaluationForm_unsuccess['sub_heading']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
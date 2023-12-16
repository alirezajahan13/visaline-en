<?php

/*
Template Name: book consultation
*/
get_header();
$visaline_bookConsultation_heading = get_field('visaline_bookConsultation_heading');
?>

<div class="bookconsulationSectionBack">
    <div class="bookconsulationSection mainView">
        <div class="bookconsulationSectionDesc centeredText">
            <?php echo $visaline_bookConsultation_heading['icon'] ?>
            <h2 class="bigHeading"><?php echo $visaline_bookConsultation_heading['heading'] ?></h2>
            <p class="mediumPadding" ><?php echo $visaline_bookConsultation_heading['sub_heading'] ?></p>
        </div>
        <div class="formSection lightBorder highMargined highPadding lowRadius">
            <?php echo do_shortcode('[contact-form-7 id="a0f5d98" title="وقت مشاوره جدید"]') ?> 
        </div>
    </div>
</div>


<?php
get_footer();
?>
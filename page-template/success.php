<?php 
/*

Template Name: Success Template

*/
get_header();
$visaline_bookConsultation_success = get_field('visaline_bookConsultation_success');
?>

<div class="successSectionBack">
    <div class="successSection mainView">
        <div class="successSectionDesc">
            <div class="success lightBorder highMargined lowPadding lowRadius">
                <div class="successsvg">
                    <?php echo $visaline_bookConsultation_success['icon']; ?>
                </div>
                <div class="success-text">
                    <p><span id="nameClient"></span> عزیز</p>
                    <p><?php echo $visaline_bookConsultation_success['heading']; ?></p>
                    <p><?php echo $visaline_bookConsultation_success['sub_heading']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
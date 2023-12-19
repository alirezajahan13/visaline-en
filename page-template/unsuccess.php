<?php 
/*
Template Name: Unsuccess Template
*/
get_header(); 
$visaline_bookConsultation_unsuccess = get_field('visaline_bookConsultation_unsuccess');
?>
<div class="unsuccessSectionBack">
    <div class="unsuccessSection mainView">
        <div class="unsuccessSectionDesc">
            <div class="unsuccess lightBorder highMargined lowPadding lowRadius">
                <div class="unsuccesssvg">
                    <?php echo $visaline_bookConsultation_unsuccess['icon']; ?>
                </div>
                <div class="unsuccess-text">
                    <p>Dear <span id="nameClient"></span></p>
                    <p><?php echo $visaline_bookConsultation_unsuccess['heading']; ?></p>
                    <p><?php echo $visaline_bookConsultation_unsuccess['sub_heading']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
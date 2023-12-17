<?php 
/*
Template Name: Home Template
*/
get_header();

$visaline_home_banner = get_field('visaline_home_banner');
$visaline_home_aboutus = get_field('visaline_home_aboutus');
$visaline_home_services = get_field('visaline_home_services');
$visaline_home_ignQuestions = get_field('visaline_home_ignQuestions');
$visaline_home_contactus = get_field('visaline_home_contactus');
?>

<div class="introSectionBack extraHighMargined">
    <div class="introSection mainView">
        <div class="introSectionDesc">
            <h1 class="bigHeading"><?php echo $visaline_home_banner['heading']; ?></h1>
            <p><?php echo $visaline_home_banner['description']; ?></p>
            <a href="<?php echo $visaline_home_banner['linkButton']['url']; ?>" target="<?php echo $visaline_home_banner['linkButton']['target']; ?><?php echo $visaline_home_banner['linkButton']['title']; ?>" class="generalButton noArrowButton mediumMargined"><?php echo $visaline_home_banner['button'] ?></a>
        </div>
        <div class="introSectionImg">
            <img src="<?php echo $visaline_home_banner['photo']['url'] ?>" alt="<?php echo $visaline_home_banner['photo']['alt'] ?>">
        </div>
        <div class="bookAppointmentSection lowRadius">
            <?php echo do_shortcode('[contact-form-7 id="ac69fce" title="book consultation (Home)"]') ?>
        </div>
    </div>
</div>
<div class="aboutUsSectionBack sectionPadding">
    <div class="aboutUsSection mainView">
        <div class="generalHeading mediumMargined centeredText">
            <h2><?php echo $visaline_home_aboutus['heading']; ?></h2>
        </div>
        <div class="aboutUsSectionInfo">
            <div class="aboutUsIconRight">
                <?php echo $visaline_home_aboutus['rightLogo']; ?>
            </div>
            <div class="aboutUsSectionInfoCenter lowRadius sectionPadding">
                <p class="centeredText"><?php echo $visaline_home_aboutus['description']; ?></p>
            </div>
            <div class="aboutUsIconLeft">
            <?php echo $visaline_home_aboutus['leftLogo']; ?>
            </div>
        </div>
    </div>
</div>
<div class="servicesSectionBack">
    <div class="servicesSection mainView">
        <div class="generalHeading highMargined centeredText">
            <h2><?php echo $visaline_home_services['heading_service']; ?></h2>
        </div>
        <div class="serviceBoxParent">
            <a href="<?php echo $visaline_home_services['visaline_home_services_sv']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_sv']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_sv']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_sv']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_sv']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_sv']['description'] ?></span>
            </a>
            <a href="<?php echo $visaline_home_services['visaline_home_services_wv']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_wv']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_wv']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_wv']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_wv']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_wv']['description'] ?></span>
            </a>
            <a href="<?php echo $visaline_home_services['visaline_home_services_tv']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_tv']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_tv']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_tv']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_tv']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_tv']['description'] ?></span> 
            </a>
            <a href="<?php echo $visaline_home_services['visaline_home_services_inv']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_inv']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_inv']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_inv']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_inv']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_inv']['description'] ?></span>
            </a>
            <a href="<?php echo $visaline_home_services['visaline_home_services_sp']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_sp']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_sp']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_sp']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_sp']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_sp']['description'] ?></span>
            </a>
            <a href="<?php echo $visaline_home_services['visaline_home_services_exp']['link']['url']; ?>" target="<?php echo $visaline_home_services['visaline_home_services_exp']['link']['target']; ?><?php echo $visaline_home_services['visaline_home_services_exp']['link']['title']; ?>" class="serviceBoxs mediumPadding lightBorder lowRadius">
                <?php echo $visaline_home_services['visaline_home_services_exp']['icon']; ?>
                <h3><?php echo $visaline_home_services['visaline_home_services_exp']['heading'] ?></h3>
                <span class="lightText smallText"><?php echo $visaline_home_services['visaline_home_services_exp']['description'] ?></span>
            </a>
        </div>
    </div>
</div>
<div class="ignQuestionsSectionBack sectionPadding">
    <div class="ignQuestionsSection mainView">
        <div class="generalHeading highMargined centeredText">
            <h2><?php echo $visaline_home_ignQuestions['heading_ignQ']; ?></h2>
        </div>
        <div class="ignQuestionsPatent">
            <div class="ignQuestionBoxs lowRadius highPadding">
                <div class="ignQuestionDetail">
                    <h3><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_1']['heading']; ?></h3>
                    <span class="lightParagraph"><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_1']['description']; ?></span>
                </div>
                <div class="ignQuestionLink">
                    <a class="generalButton borderNoneButton noArrowButton" href="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_1']['link']['url']; ?>" target="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_1']['link']['target']; ?><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_1']['link']['title']; ?>" class="generalButton noArrowButton mediumMargined">Read More</a>
                </div>
            </div>
            <div class="ignQuestionBoxs lowRadius highPadding">
                <div class="ignQuestionDetail">
                    <h3><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_2']['heading']; ?></h3>
                    <span class="lightParagraph"><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_2']['description']; ?></span>
                </div>
                <div class="ignQuestionLink">
                    <a class="generalButton borderNoneButton noArrowButton" href="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_2']['link']['url']; ?>" target="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_2']['link']['target']; ?><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_2']['link']['title']; ?>" class="generalButton noArrowButton mediumMargined">Read More</a>
                </div>
            </div>
            <div class="ignQuestionBoxs lowRadius highPadding">
                <div class="ignQuestionDetail">
                    <h3><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_3']['heading']; ?></h3>
                    <span class="lightParagraph"><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_3']['description']; ?></span>
                </div>
                <div class="ignQuestionLink">
                    <a class="generalButton borderNoneButton noArrowButton" href="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_3']['link']['url']; ?>" target="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_3']['link']['target']; ?><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_3']['link']['title']; ?>" class="generalButton noArrowButton mediumMargined">Read More</a>
                </div>
            </div>
            <div class="ignQuestionBoxs lowRadius highPadding">
                <div class="ignQuestionDetail">
                    <h3><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_4']['heading']; ?></h3>
                    <span class="lightParagraph"><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_4']['description']; ?></span>
                </div>
                <div class="ignQuestionLink">
                    <a class="generalButton borderNoneButton noArrowButton" href="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_4']['link']['url']; ?>" target="<?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_4']['link']['target']; ?><?php echo $visaline_home_ignQuestions['visaline_home_ignQuestions_4']['link']['title']; ?>" class="generalButton noArrowButton mediumMargined">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contactUsHomeSectionBack">
    <div class="generalHeading highMargined centeredText mainView">
        <h2>Contact Us</h2>
    </div>
    <div class="contactUsHomeSection mainView">
        <div class="contactUsHomeParent">
            <div class="contactUsHomeFormParent lowRadius lightBorder highPadding"><?php echo do_shortcode('[contact-form-7 id="8644244" title="Contact Us form (Home)"]') ?></div>
                <div class="communicationSection">
                    <div class="communicationSectionInner">
                        <div class="communicationSectionInner1">
                            <a href="#">
                                <?php echo $visaline_home_contactus['visaline_home_contactus_address']['icon']; ?>
                                <span><?php echo $visaline_home_contactus['visaline_home_contactus_address']['address']; ?></span>
                            </a>
                        </div>
                        <div class="communicationSectionInner2">
                            <a href="#">
                                <span><?php echo $visaline_home_contactus['visaline_home_contactus_tel']['phoneNumber']; ?></span>
                                <?php echo $visaline_home_contactus['visaline_home_contactus_tel']['icon']; ?>
                            </a>
                        </div>
                    </div>
                    <div class="locationPartHome">
                        <?php echo $visaline_home_contactus['location']; ?>
                    </div>
                </div>
        </div>
    </div>
</div>

<?php get_footer();
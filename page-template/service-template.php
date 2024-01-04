<?php 



/*

Template Name: Service Template

*/

get_header();
$visaline_services_sectionUp = get_field('visaline_services_sectionUp');
$landing_header_section = get_field('landing_header_section');
$service_linked_other_services = get_field('service_linked_other_services');
$service_faq_section = get_field('service_faq_section');
$visaline_services_summary_section = get_field('visaline_services_summary_section');
?>

<div class="serviceSectionBack">
    <div class="serviceSection mainView">
        <div class="serviceSectionDesc centeredText">
            <?php echo $landing_header_section['icon']; ?>
            <h2 class="bigHeading"><?php echo $landing_header_section['title']; ?></h2>
            <p class="mediumPadding"><?php echo $landing_header_section['subtitle']; ?></p>
        </div>
        <div class="summarySectionParent lightBorder highMargined lowRadius"  style="display:<?php if($visaline_services_summary_section['display_section']){echo "none";} ?>; background-color: <?php if($visaline_services_summary_section['bg_sSection']){echo "#8080801c";}?>">
            <h3><?php echo $visaline_services_summary_section['title_summary']; ?></h3>
            <p><?php echo $visaline_services_summary_section['text_summary']; ?></p>
        </div>
        <?php if($visaline_services_sectionUp){?> 
        <?php foreach($visaline_services_sectionUp as $serviceSection){ ?>
            <div class="serviceBoxOne lightBorder lowRadius" style=" background-color: <?php if($serviceSection['bg_section']){echo "#8080801c";} ?>">
                <?php if($serviceSection['photo'] || $serviceSection['video'] || $serviceSection['script_video']){ ?>
                <div class="imageBox" <?php if($serviceSection['image_loc']){echo "style='order: 2;'";} ?> >
                    <?php if($serviceSection['content_type'] == 'photo'){?>
                        <?php if($serviceSection['photo']){ ?><img src="<?php echo $serviceSection['photo']['url']; ?>" alt="<?php echo $serviceSection['photo']['alt']; ?>" <?php if($serviceSection['image_display']){ echo "style='border-radius:100%;'";}?>><?php } ?>
                    <?php } elseif($serviceSection['content_type'] == 'video'){?>
                        <video width="100%" height="auto" controls>
                            <source src="<?php echo $serviceSection['video']['url']; ?>" type="video/mp4">
                        </video>
                    <?php } elseif($serviceSection['content_type'] == 'script'){
                        echo $serviceSection['script_video'];
                    } ?>
                </div>
                <?php } ?>
                <?php if($serviceSection['title'] || $serviceSection['paragraph']){ ?>
                <div class="textBox" <?php if($serviceSection['image_loc']){echo "style='order:1;'";} ?>">
                    <h3 class="bigHeading"><?php echo $serviceSection['title'] ?></h3>  
                    <?php if($serviceSection['paragraph']){ ?><p><?php echo $serviceSection['paragraph'] ?></p><?php } ?>
                </div>
                <?php } ?>
                <?php if($serviceSection['extra_paragraph']){ ?>
                    <div class="extraTextInnerBox"><p><?php echo $serviceSection['extra_paragraph'] ?></p></div>
                <?php } ?>
            </div>
            <?php if($serviceSection['show_form_intro_section']){ ?>

                <div class="bookAppointmentSection lowRadius">
                    <?php echo do_shortcode('[contact-form-7 id="ac69fce" title="book consultation (Home)"]') ?>
                </div>
            <?php } ?>
       <?php }?>
       <?php }

       if($service_faq_section){?>
       <div class="faqContainer">
            <div class="generalHeading highMargined centeredText">
                <h2>FAQ's <?php echo $landing_header_section['title']; ?></h2>
            </div>
            <?php
                foreach ($service_faq_section as $faq) { ?>
                    <div class="faqItem lightBorder">
                        <div class="faqHeader">
                            <h3 class="faqQuestion"><?php echo $faq['question']; ?></h3>
                            <span class="faqIcon"><svg height="15" width="15" fill="#194c82" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve" transform="rotate(180)"><path d="m325.606 229.393-150.004-150a14.997 14.997 0 0 0-21.213.001l-149.996 150c-5.858 5.858-5.858 15.355 0 21.213 5.857 5.857 15.355 5.858 21.213 0l139.39-139.393 139.397 139.393A14.953 14.953 0 0 0 315 255a14.95 14.95 0 0 0 10.607-4.394c5.857-5.858 5.857-15.355-.001-21.213z"/></svg></span>
                        </div>
                        <p class="faqAnswer"><?php echo $faq['answer']; ?></p>
                    </div>
                <?php } ?>
       </div><?php }

        if($service_linked_other_services){ ?>
        <div class="serviceBoxFive highMargined">
            <div class="generalHeading highMargined centeredText">
                <h2>Related posts</h2>
            </div>
            <div class="serviceGrid">
                <?php
                foreach($service_linked_other_services as $linkOther){
                    $theLoopId = url_to_postid($linkOther);
                    $inner_landing_header_section = get_field('landing_header_section',$theLoopId )['subtitle'];
                    $title = get_the_title( $theLoopId );
                    $permalink = get_permalink( $theLoopId );
                    $featuredimage = get_the_post_thumbnail( $theLoopId );
                    $excerpt = truncateString($inner_landing_header_section , 20);
                    ?>
                    <a href="<?php echo esc_url( $permalink ); ?>" class="generalItem lightBorder lowRadius">
                        <div class="grayimg"><?php echo ( $featuredimage ); ?></div>
                        <div class="text-item">
                            <h5 class="bigHeading"><?php echo ( $title ); ?></h5>
                            <p><?php echo $excerpt; ?></p> 
                        </div>
                    </a>
                <?php } ?>

            </div>
        </div>
        <?php } ?>

    </div>
</div>

<?php

get_footer();
?>
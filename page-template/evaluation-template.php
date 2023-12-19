<?php
/*
Template Name: evaluation Template
*/
get_header();
$visaline_bookConsultation_heading = get_field('visaline_bookConsultation_heading');
?>
<div class="evaluationPageParent mainView">
    <div class="evaluationSectionDesc centeredText">
        <div class="evaluationSection">
            <?php echo $visaline_bookConsultation_heading['icon'] ?>
            <h2 class="bigHeading"><?php echo $visaline_bookConsultation_heading['heading'] ?></h2>
            <p class="mediumPadding"><?php echo $visaline_bookConsultation_heading['sub_heading'] ?></p>
        </div>
    </div>
    <div class="evaluationFormContainer lightBorder highMargined highPadding lowRadius">
        <div class="levelsNavbarContainer">
            <div class="evaluationSteps activeStep">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 21 21"><path data-name="Icon material-people" d="M10.5 9A4.5 4.5 0 1 0 6 4.5 4.481 4.481 0 0 0 10.5 9Zm0 3C7.005 12 0 13.755 0 17.25V21h21v-3.75C21 13.755 13.995 12 10.5 12Z" fill="#fff"/></svg>
                <span>Personal information</span>
            </div>
            <div class="evaluationSteps">
                <svg data-name="Group 1476" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 35.683 22.911"><defs><clipPath id="a"><path data-name="Rectangle 321" fill="#fff" d="M0 0h35.683v22.911H0z"/></clipPath></defs><g data-name="Group 1476" clip-path="url(#a)" fill="#fff"><path data-name="Path 1535" d="M17.766 13.778a.971.971 0 0 1-.315-.052L6.433 9.99v9.24h.012l-.025.127c0 1.1 5.081 3.554 11.34 3.554s11.327-2.454 11.327-3.554l-.026-.127h.039V9.99l-11.019 3.736a.965.965 0 0 1-.314.052"/><path data-name="Path 1536" d="M35.348 13.294h.152v-.695h-.483V6.158l.518-.176L17.766-.001 0 5.983l6.433 2.181 11.333 3.843L29.1 8.164l4.931-1.673v6.108h-.483v.694h.148a1.158 1.158 0 0 0-.335.815v3.761a1.162 1.162 0 0 0 2.324 0v-3.76a1.159 1.159 0 0 0-.334-.815"/></g></svg>
                <span>Educational information</span>
            </div>
            <div class="evaluationSteps">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28.731 26.025"><g data-name="Group 1481" fill="#fff"><path data-name="Rectangle 324" d="M1.527 5.968h7.634v17.489H1.527z"/><path data-name="Rectangle 325" d="M10.479 11.937h7.634v11.52h-7.634z"/><path data-name="Rectangle 326" d="M19.432 0h7.634v23.458h-7.634z"/><path data-name="Rectangle 327" d="M0 24.638h28.731v1.387H0z"/></g></svg>
                <span>Additional information</span>
            </div>
            <div class="evaluationSteps">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29.89 26.714"><defs><clipPath id="a"><path data-name="Rectangle 330" fill="#fff" d="M0 0h29.89v26.714H0z"/></clipPath></defs><g data-name="Group 1485"><g data-name="Group 1484" clip-path="url(#a)"><path data-name="Path 1539" d="M15.918 20.861c7.8-.35 13.972-4.882 13.972-10.419C29.89 4.675 23.2 0 14.945 0S0 4.675 0 10.442c0 4.386 3.871 8.14 9.352 9.686L6.9 26.714ZM5.766 7.052h18.483v.858H5.766Zm0 3.239h18.483v.857H5.766Zm0 3.239h9.908v.857H5.766Z" fill="#fff"/></g></g></svg>
                <span>Details</span>
            </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="e20c370" title="Evaluation Form"]') ?>
    </div>
</div>
<?php get_footer();
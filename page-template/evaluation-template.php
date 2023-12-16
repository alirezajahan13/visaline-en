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
                <span>اطلاعات فردی</span>
            </div>
            <div class="evaluationSteps">
                <svg data-name="Group 1476" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 35.683 22.911"><defs><clipPath id="a"><path data-name="Rectangle 321" fill="#fff" d="M0 0h35.683v22.911H0z"/></clipPath></defs><g data-name="Group 1476" clip-path="url(#a)" fill="#fff"><path data-name="Path 1535" d="M17.766 13.778a.971.971 0 0 1-.315-.052L6.433 9.99v9.24h.012l-.025.127c0 1.1 5.081 3.554 11.34 3.554s11.327-2.454 11.327-3.554l-.026-.127h.039V9.99l-11.019 3.736a.965.965 0 0 1-.314.052"/><path data-name="Path 1536" d="M35.348 13.294h.152v-.695h-.483V6.158l.518-.176L17.766-.001 0 5.983l6.433 2.181 11.333 3.843L29.1 8.164l4.931-1.673v6.108h-.483v.694h.148a1.158 1.158 0 0 0-.335.815v3.761a1.162 1.162 0 0 0 2.324 0v-3.76a1.159 1.159 0 0 0-.334-.815"/></g></svg>
                <span>اطلاعات تحصیلی</span>
            </div>
            <div class="evaluationSteps">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28.731 26.025"><g data-name="Group 1481" fill="#fff"><path data-name="Rectangle 324" d="M1.527 5.968h7.634v17.489H1.527z"/><path data-name="Rectangle 325" d="M10.479 11.937h7.634v11.52h-7.634z"/><path data-name="Rectangle 326" d="M19.432 0h7.634v23.458h-7.634z"/><path data-name="Rectangle 327" d="M0 24.638h28.731v1.387H0z"/></g></svg>
                <span>اطلاعات تکمیلی</span>
            </div>
            <div class="evaluationSteps">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29.89 26.714"><defs><clipPath id="a"><path data-name="Rectangle 330" fill="#fff" d="M0 0h29.89v26.714H0z"/></clipPath></defs><g data-name="Group 1485"><g data-name="Group 1484" clip-path="url(#a)"><path data-name="Path 1539" d="M15.918 20.861c7.8-.35 13.972-4.882 13.972-10.419C29.89 4.675 23.2 0 14.945 0S0 4.675 0 10.442c0 4.386 3.871 8.14 9.352 9.686L6.9 26.714ZM5.766 7.052h18.483v.858H5.766Zm0 3.239h18.483v.857H5.766Zm0 3.239h9.908v.857H5.766Z" fill="#fff"/></g></g></svg>
                <span>توضیحات</span>
            </div>
        </div>
        <!-- <form>
            <div class="evaluationForm">
                <div class="evaluationForm step1">
                    <div class="evaluationFormStep1Section1">
                        <div class="evaluationFormInner1">
                            <label class="evaluationFormLabel"> نام کامل
                            <span class="" data-name="your-name"><input size="40" class="evaluationFormText" aria-required="true" aria-invalid="false" placeholder="نام و نام خانوادگی" value="" type="text" name="your-name"></span></label>
                        </div>
                        <div class="evaluationFormInner2">
                            <label class="evaluationFormLabel"> شماره تماس
                            <span class="" data-name="your-number"><input size="40" class="evaluationFormTel" aria-required="true" aria-invalid="false" placeholder="09xxxxxxxxx" value="" type="tel" name="your-number"></span> </label>
                        </div>
                    </div>
                    <div class="evaluationFormStep1Section2">
                        <div class="evaluationFormInner3">
                            <label class="evaluationFormLabel"> ایمیل
                            <span class="" data-name="your-email"><input size="40" class="evaluationFormEmail" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل" value="" type="email" name="your-email"></span> </label>
                        </div>
                        <div class="evaluationFormInner4">
                            <label class="evaluationFormLabel"> سن
                            <span class="" data-name="your-age"><input size="40" class="evaluationFormText" aria-required="true" aria-invalid="false" placeholder="به صورت عدد وارد شود" value="" type="text" name="your-age"></span> </label>
                        </div>
                    </div>
                    <div class="evaluationFormStep1Section3">
                        <div class="evaluationFormInner5">
                            <label class="evaluationFormLabel"> وضعیت تاهل
                            <span class="" data-name="marital-status"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="marital-status"><option value="مجرد">مجرد</option><option value="متاهل">متاهل</option></select></span> </label>
                        </div>
                    </div>
                </div>
                <div class="evaluationForm step2 forceRemover">
                    <div class="evaluationFormStep2Section1">
                        <div class="evaluationFormInner6">
                            <label class="evaluationFormLabel"> آخرین مدرک تحصیلی
                            <span class="" data-name="last-edu-cert"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="last-edu-cert"><option value="زیر دیپلم">زیر دیپلم</option><option value="دیپلم">دیپلم</option><option value="فوق دیپلم">فوق دیپلم</option><option value="لیسانس">لیسانس</option><option value="فوق لیسانس">فوق لیسانس</option><option value="دکترا">دکترا</option></select></span> </label>
                        </div>
                        <div class="evaluationFormInner7">
                            <label class="evaluationFormLabel"> رشته تحصیلی
                            <span class="" data-name="field-study"><input size="40" class="evaluationFormText" aria-required="true" aria-invalid="false" value="" type="text" name="field-study"></span> </label>
                        </div>
                    </div>
                    <div class="evaluationFormStep2Section2">
                        <div class="evaluationformInner8">
                            <label class="evaluationFormLabel"> مدرک زبان
                            <span class="" data-name="Eng-lang-degree"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="Eng-lang-degree"><option value="ندارم">ندارم</option><option value="در حال خواندن">در حال خواندن</option><option value="مدرک IETLS دارم">مدرک IETLS دارم</option></select></span> </label>
                        </div>
                        <div class="evaluationformInner9">
                            <label class="evaluationFormLabel"> مدرک فرانسه
                            <span class="" data-name="French-lang-degree"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="French-lang-degree"><option value="ندارم">ندارم</option><option value="در حال خواندن">در حال خواندن</option><option value="مدرک TEF/TCF دارم">مدرک TEF/TCF دارم</option></select></span> </label>
                        </div>
                    </div>
                </div>
                <div class="evaluationForm step3 forceRemover">
                    <div class="evaluationFormStep3Section1">
                        <div class="evaluationFormInner10">
                            <label class="evaluationFormLabel"> مهاجرت از طریق
                            <span class="" data-name="immigration"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="immigration"><option value="از طریق تخصص">از طریق تخصص</option><option value="اقامت از طریق خوداشتغالی">اقامت از طریق خوداشتغالی</option><option value="اقامت از طریق سرمایه گذاری">اقامت از طریق سرمایه گذاری</option><option value="اقامت از طریق اسپانسرشیپ همسر">اقامت از طریق اسپانسرشیپ همسر</option><option value="ویزای تحصیلی">ویزای تحصیلی</option><option value="ویزای توریستی">ویزای توریستی</option><option value="ویزای کار">ویزای کار</option></select></span> </label>
                        </div>
                        <div class="evaluationFormInner11">
                            <label class="evaluationFormLabel"> آیا قبلا برای ویزای کانادا اقدام کرده اید؟
                            <span class="" data-name="already-apply-CAvisa"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="already-apply-CAvisa"><option value="بله – ویزا دارم">بله – ویزا دارم</option><option value="خیر">خیر</option></select></span> </label>
                        </div>
                    </div>
                    <div class="evaluationFormStep3Section2">
                        <div class="evaluationFormInner12">
                            <label class="evaluationFormLabel"> آیا اخیرا برای ویزای شنگن اقدام کرده اید؟
                            <span class="" data-name="apply-schengen-visa"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="apply-schengen-visa"><option value="بله">بله</option><option value="خیر">خیر</option></select></span> </label>
                        </div>
                        <div class="evaluationFormInner13">
                            <label class="evaluationFormLabel"> آیا در کانادا اقوام درجه یک دارید؟
                            <span class="" data-name="first-degree-relatives"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="first-degree-relatives"><option value="بله">بله</option><option value="خیر">خیر</option></select></span> </label>
                        </div>
                    </div>
                    <div class="evaluationFormStep3Section3">
                        <div class="evaluationFormInner14">
                            <label class="evaluationFormLabel"> نحوه آشنایی با ما
                            <span class="" data-name="get-know-us"><select class="evaluationFormSelect" aria-required="true" aria-invalid="false" name="get-know-us"><option value="موتور جستجو">موتور جستجو</option><option value="اینستاگرام">اینستاگرام</option><option value="تلگرام">تلگرام</option><option value="فیسبوک">فیسبوک</option><option value="دوستان و آشنایان">دوستان و آشنایان</option><option value="سایر">سایر</option></select></span> </label>
                        </div>
                    </div>
                </div>
                <div class="evaluationForm step4 forceRemover">
                    <div class="evaluationFormStep4Section1">
                        <label class="evaluationFormLabel"> در صورت نیاز به ارائه توضیحات بییشتر،لطفا اینجا وارد کنید
                        <span class="" data-name="textarea-EF"><textarea cols="40" rows="10" class="evaluationFormTextarea" aria-invalid="false" placeholder="متن" name="textarea-EF"></textarea></span> </label>
                    </div>
                    <div class="evaluationFormStep4Section2">
                        <input class="evaluationFormSubmit" type="submit" value="ارسال فرم ارزیابی">
                    </div>
                </div>
            </div>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="c7c5bc8" title="فرم ارزیابی جدید"]') ?>
        <!-- <div class="levelsButtonContainer">
            <button id="previousStep" class="previousStep">برو به قبلی</button>
            <button id="nextStep" class="nextStep">برو به</button>
        </div> -->
    </div>
</div>


<?php get_footer();
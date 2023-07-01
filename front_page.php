<?php
/*
Template Name: Front page
 */
?>

<?php get_header(); ?>

<div class="banner_section layout_padding">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
    $slides = get_field('hero_slides');
    foreach ($slides as $key => $slide): ?>
            <div class="carousel-item <?php if ($key == 0 ):?> active <?php endif ?>">
                <div class="container mt-5">
                    <h1 class="banner_taital"><?php echo $slide['hero_title']; ?></h1>
                    <div class="banner_text">
                        <?php echo $slide['hero_description']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- banner section end -->
</div>
<!-- services section start -->
<div class="services_section layout_padding" id="services">
    <?php
    $services = get_field('services_main');
    ?>
    <div class="container">
        <h1 class="services_taital"><?php echo $services['services_title']; ?><br></h1>
        <div class="services_text">
            <?php echo $services['services_description']; ?><br>
        </div>
        <div class="services_section_2">
            <div class="row">
                <?php $slides = $services['services_slides'];
                foreach ($slides as $slide): ?>
                <div class="col-md-4 mb-5">
                    <div><img src="<?php echo $slide['services_img']['url']; ?>" class="services_img" /></div>
                    <div class="btn_main"><a href="#" data-toggle="modal"
                            data-target="#exampleModalCenter"><?php echo $slide['services_button_label']; ?></a></div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- about section start -->
<div class="about_section layout_padding" id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?php
                $about = get_field('about_us');
                ?>
                <div class="about_taital_main">
                    <h1 class="about_taital"><?php echo $about['about_us_title']; ?></h1>
                    <div class="about_text">
                        <?php echo $about['about_us_description']; ?>
                    </div>
                    <div class="readmore_bt"><a href="#"><?php echo $about['about_us_button']; ?></a></div>
                </div>
            </div>
            <div class="col-md-6 padding_right_0">
                <div><img src="<?php echo $about['about_us_img']['url']; ?>" class="about_img" /></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->
<!-- video section start -->
<div class="blog_section layout_padding" id="video">
    <?php
    $video = get_field('video_section');
    ?>
    <div class="container">
        <h1 class="blog_taital"><?php echo $video['video_section_title']; ?></h1>
        <div class="blog_text">
            <?php echo $video['video_section_description']; ?>
        </div>
        <div class="play_icon_main">
            <div class="play_icon">
                <a href="#"><img src="<?php echo $video['video_section_img']['url']; ?>" /></a>
            </div>
        </div>
    </div>
</div>
<!-- video section end -->
<!-- client section start -->
<div class="client_section layout_padding" id="testimonial">
    <div class="container">
        <?php
        $testimonial = get_field('testimonial_section');
        ?>
        <h1 class="client_taital"><?php echo $testimonial['testimonial_section_title']; ?></h1>
        <div class="client_section_2">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $slides = $testimonial['testimonial_slides']; 
                    foreach ($slides as $key => $slide):
                    ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>"
                        class="<?php if ($key == 0 ):?> active <?php endif ?>"></li>
                    <?php endforeach ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                        foreach ($slides as $key => $slide):
                        ?>
                    <div class="carousel-item <?php if ($key == 0 ):?> active <?php endif ?>">
                        <div class="client_main">
                            <div class="box_left">
                                <div class="lorem_text">
                                    <?php echo $slide['testimonial_client_description']; ?>
                                </div>
                            </div>
                            <div class="box_right">
                                <div class="client_taital_left">
                                    <div class="client_img">
                                        <img src="<?php echo $slide['testimonial_client_img']['url']; ?>" />
                                    </div>
                                    <div class="quick_icon">
                                        <img src="<?php echo $slide['testimonial_quote_icon']['url']; ?>" />
                                    </div>
                                </div>
                                <div class="client_taital_right">
                                    <h4 class="client_name"><?php echo $slide['testimonial_client_name']; ?></h4>
                                    <p class="customer_text"><?php echo $slide['testimonial_client_title']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- client section end -->

<!-- faq section start -->
<div class="faq_section layout_padding" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $faq = get_field('faq_section');
            ?>
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h1 class="faq_taital"><?php echo $faq['faq_title']; ?></h1>
                    <div class="mb-5"><?php echo $faq['faq_description']; ?></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <?php
                    $entries = $faq['faq_entries'];
                    foreach ($entries as $key => $entry):
                    ?>
                    <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="card-header" id="heading<?php echo $key; ?>">
                            <h3 class="mb-0 collapsed" data-toggle="collapse"
                                data-target="#collapse<?php echo $key; ?>" aria-expanded="true"
                                aria-controls="collapse<?php echo $key; ?>">
                                <?php echo $entry['faq_question']; ?><span class="lni-chevron-up"></span>
                            </h3>
                        </div>
                        <div class="collapse" id="collapse<?php echo $key; ?>"
                            aria-labelledby="heading<?php echo $key; ?>" data-parent="#faqAccordion">
                            <div class="card-body">
                                <?php echo $entry['faq_answer']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <!-- Support Button-->
                <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp"
                    data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <i class="lni-emoji-sad"></i>
                    <div class="ml-3">
                        <h5 class="mb-5 mt-5">Can't find the answer you need? Feel free to contact us!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- faq section end -->

<!-- choose section start -->
<div class="choose_section mt-5 layout_padding" id="contact_us">
    <?php $contact = get_field('contact_us'); ?>
    <div class="container">
        <h1 class="choose_taital"><?php echo $contact['contact_us_title']; ?></h1>
        <div class="choose_text">
            <?php echo $contact['contact_us_description']; ?>
        </div>
        <div class="read_bt_1"><a href="#"><?php echo $contact['contact_us_button']; ?></a></div>
        <div class="newsletter_box">
            <h2 class="let_text"><?php echo $contact['contact_us_tagline']; ?></h2>
            <div class="getquote_bt"><a href="#ctc_chat"><?php echo $contact['contact_us_tagline_button']; ?></a></div>
        </div>
    </div>
</div>
<!-- choose section end -->
<?php get_footer(); ?>

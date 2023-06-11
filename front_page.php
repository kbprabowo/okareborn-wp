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
                <div class="container">
                    <h1 class="banner_taital"><?php echo $slide['hero_title']; ?></h1>
                    <p class="banner_text">
                        <?php echo $slide['hero_description']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- banner section end -->
</div>
<!-- services section start -->
<div class="services_section layout_padding">
    <?php
    $services = get_field('services_main');
    ?>
    <div class="container">
        <h1 class="services_taital"><?php echo $services['services_title']; ?><br></h1>
        <p class="services_text">
            <?php echo $services['services_description']; ?><br>
        </p>
        <div class="services_section_2">
            <div class="row">
                <?php $slides = $services['services_slides'];
                foreach ($slides as $slide): ?>
                <div class="col-md-4">
                    <div><img src="<?php echo $slide['services_img']['url']; ?>" class="services_img" /></div>
                    <div class="btn_main"><a href="#"><?php echo $slide['services_button_label']; ?></a></div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?php
                $about = get_field('about_us');
                ?>
                <div class="about_taital_main">
                    <h1 class="about_taital"><?php echo $about['about_us_title']; ?></h1>
                    <p class="about_text">
                        <?php echo $about['about_us_description']; ?>
                    </p>
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
<!-- blog section start -->
<div class="blog_section layout_padding">
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
<!-- blog section end -->
<!-- client section start -->
<div class="client_section layout_padding">
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
<!-- client section start -->
<!-- choose section start -->
<div class="choose_section layout_padding">
    <?php $contact = get_field('contact_us'); ?>
    <div class="container">
        <h1 class="choose_taital"><?php echo $contact['contact_us_title']; ?></h1>
        <p class="choose_text">
            <?php echo $contact['contact_us_description']; ?>
        </p>
        <div class="read_bt_1"><a href="#"><?php echo $contact['contact_us_button']; ?></a></div>
        <div class="newsletter_box">
            <h1 class="let_text"><?php echo $contact['contact_us_tagline']; ?></h1>
            <div class="getquote_bt"><a href="#ctc_chat"><?php echo $contact['contact_us_tagline_button']; ?></a></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

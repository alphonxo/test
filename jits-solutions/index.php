<?php get_header(); ?>

<div class="hero">
    <h2>Fast & Reliable Repairs</h2>
    <p>We fix all types of mobile phones and laptops with a 100% satisfaction guarantee.</p>
    <a href="/booking" class="btn">Book Now</a>
    <a href="/track-repair" class="btn">Track Repair</a>
</div>

<div class="container">
    <section id="services" class="services">
        <h2>Our Services</h2>
        <?php
        $services = new WP_Query(array(
            'post_type' => 'service',
            'posts_per_page' => 3
        ));
        if ($services->have_posts()) :
            while ($services->have_posts()) : $services->the_post(); ?>
                <div class="service-item">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile;
        endif;
        ?>
    </section>

    <section id="about" class="about">
        <h2>About Us</h2>
        <p><?php echo get_theme_mod('about_text', 'JITS Solutions has been serving the community for over 10 years. Our team of certified technicians is dedicated to providing high-quality repair services for all your devices.'); ?></p>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]'); ?>
    </section>
</div>

<?php get_footer(); ?>
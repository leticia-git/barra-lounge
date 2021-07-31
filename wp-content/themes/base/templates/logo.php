<a href="<?php bloginfo('url'); ?>" class="">
    <figure class="">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php bloginfo(); ?>" class="">
    </figure>
</a>
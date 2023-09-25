    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="back-fade">
    </section>

    <style>
        .back-fade {
            background-image: url('<?php echo wp_get_attachment_image_url($image, 'full'); ?>');
            height: <?php echo $hauteur_du_bloc; ?>vh;
            background-size: cover;
            background-position: <?php echo $positions; ?>;
            background-repeat: no-repeat;
            position: absolute;
            z-index: -1;
            width: 100%;
            top: 0;
        }
    </style>
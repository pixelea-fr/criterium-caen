    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="introduction">
        <div class="content out">
            <div class="logo">
                <h1>Critérium de Caen</h1>
                <?php echo wp_get_attachment_image($logo, 'full') ?>
            </div>
            <div class="slider">
                <?php foreach ($slider as $i) : ?>
                    <figure>
                        <?php echo wp_get_attachment_image($i, 'full') ?>
                    </figure>
                <? endforeach; ?>
            </div>
            <div class="navigation-slider">
                <div class="slick-slider-nav"></div>
                <div class="slick-slider-dots"></div>
            </div>
        </div>
    </section>
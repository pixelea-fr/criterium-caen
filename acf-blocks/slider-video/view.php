    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="slider-video">
        <div class="content out">
            <h2>Ils nous soutiennent</h2>
            <div class="slider-soutient">
                <?php foreach ($slider as $item) : extract($item) ?>
                    <div class="item">
                        <div class="media">
                            <figure>
                                <?php if ($video_photo) : ?>
                                    <!-- Vidéo -->
                                    <video class="video" muted autoplay playsinline title="<?php echo $nom; ?>" frameborder="0" loop>
                                        <source src="<?php echo $video ?>" type="video/mp4">
                                    </video>
                                <?php else : ?>
                                    <!-- Photo -->
                                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                                <?php endif; ?>
                            </figure>
                        </div>
                        <div class="text">
                            <h4><?php echo $nom; ?></h4>
                            <p class="quote"><?php echo $texte; ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="slick-slider-soutient-dots" ></div>
            <!-- <div class="slick-slider-soutient-nav" ></div> -->
        </div>
    </section>
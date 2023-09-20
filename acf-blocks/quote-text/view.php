    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="quote-text">
        <div class="content">
            <div class="text">
                <h2><?php echo $titre; ?></h2>
                <?php echo $texte; ?>
            </div>
            <?php if ($image) : ?>
                <figure>
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                </figure>
            <?php endif; ?>
        </div>
    </section>
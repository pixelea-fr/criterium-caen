    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="sponsor">
        <div class="content">
            <figure class="logo-spon">
                <?php echo wp_get_attachment_image($logo_sponsor, 'full'); ?>
            </figure>
            <div class="texte">
                <?php echo $texte; ?>
            </div>
            <figure class="ffc">
                <?php echo wp_get_attachment_image($logo_ffc, 'full'); ?>
            </figure>
        </div>
    </section>
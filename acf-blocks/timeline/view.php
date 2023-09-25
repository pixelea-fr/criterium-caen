<?php
$fields = get_fields();
extract($fields);
?>
<section class="timeline">
    <div class="content">
        <?php foreach ($timeline as $t) : extract($t); ?>
        <div class="item">
            <div class="text">
            <h3><?php echo $date; ?></h3>
            <p class="sous-titre"><?php echo $sous_titre; ?></p>
            <span><?php echo $zone_de_texte; ?></span>
            </div>
            <figure>
                <?php echo wp_get_attachment_image($image, 'full'); ?>
            </figure>
        </div>
        <?php endforeach; ?>
    </div>
</section>
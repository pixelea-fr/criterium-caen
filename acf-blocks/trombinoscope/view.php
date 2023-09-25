<?php
$fields = get_fields();
extract($fields);
?>
<section class="trombinoscope">
    <div class="content">
        <h2><?php echo $titre; ?></h2>
        <p class="intro"><?php echo $introduction; ?></p>
        <div class="list">
            <?php foreach ($liste as $l) : extract($l) ?>
                <div class="item">
                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                    <span class="prenom"><?php echo $prenom; ?></span>
                    <span class="nom"><?php echo $nom; ?></span>
                    <span class="role"><?php echo $role; ?></span>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
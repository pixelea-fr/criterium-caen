<?php
$fields = get_fields();
extract($fields);
?>
<section class="programme">
    <h2>Le programme</h2>
    <div class="content">
        <div class="evenements">
            <?php
                foreach ( $programme as $evenement ) {
                    ?>
                    <div class="evenement">
                        <div class="heure">
                            <p class="h2"><?php echo $evenement['heure']; ?></p>
                        </div>
                        <div class="text-content">
                            <div class="titre">
                                <p><?php echo $evenement['titre']; ?></p>
                            </div>
                            <div class="description">
                                <p><?php echo $evenement['description']; ?></p>
                            </div>
                        </div>
                        <div class="illustration">
                            <figure>
                                <?php echo wp_get_attachment_image($evenement['illustration'], 'full'); ?>
                            </figure>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>
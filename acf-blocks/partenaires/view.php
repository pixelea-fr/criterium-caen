<?php
$fields = get_fields();
extract($fields);
?>
<section class="partenaires-list">
    <div class="partenaires-content">
        <div class="partenaires-or">
            <?php
                foreach ($partenaires as $partenaire) {
                    if ( $partenaire['niveau_sponsoring'] === 'Or' ) {
                        ?>
                        <div class="partenaire-or">
                            <a href="<?php echo $partenaire['lien']; ?>" target="_blank">
                                <figure>
                                    <?php echo wp_get_attachment_image($partenaire['logo'], 'full', false, array( "alt" => $partenaire['nom_structure'] ) ); ?>
                                </figure>
                            </a>
                            <?php  ?>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        <div class="partenaires-argent">
            <?php
                foreach ($partenaires as $partenaire) {
                    if ( $partenaire['niveau_sponsoring'] === 'Argent' ) {
                        ?>
                        <div class="partenaire-argent">
                            <a href="<?php echo $partenaire['lien']; ?>" target="_blank">
                                <figure>
                                    <?php echo wp_get_attachment_image($partenaire['logo'], 'full', false, array( "alt" => $partenaire['nom_structure'] ) ); ?>
                                </figure>
                            </a>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
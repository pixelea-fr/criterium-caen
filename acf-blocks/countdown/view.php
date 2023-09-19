    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <script>
        var date = <?php echo json_encode($date); ?>;
    </script>
    <?php

    $positionDebut = strlen($date) - 10; // Calcul de la position de début
    $annee = substr($date, $positionDebut, 4); // Extraire 4 caractères
    ?>

    <section class="countdown">
        <div class="content">
            <div class="grid">
                <div class="text">
                    <h2>Le <?php echo substr($date, 0, -11); ?><br />
                        <span><?php echo $annee; ?></span>
                    </h2>
                    <div id="countdown">
                        <div id="days">
                            <span>0</span>
                            <span>0</span>
                            <span>0</span>
                        </div>
                        <div class="sep">:</div>
                        <div id="hours">
                            <span>0</span>
                            <span>0</span>
                        </div>
                        <div class="sep">:</div>
                        <div id="minutes">
                            <span>0</span>
                            <span>0</span>
                        </div>
                    </div>
                </div>
                <figure>
                    <?php echo wp_get_attachment_image($image_background, 'full') ?>
                </figure>
            </div>
        </div>
        <a class="button grey" href="/programme" aria-label="Le Programme" alt="Le Programme">Voir le programme</a>
    </section>
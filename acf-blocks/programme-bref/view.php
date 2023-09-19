    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="programme_bref">
        <h2 class="bref">Le programme</h2>
        <div class="content">
            <div class="events">
                <?php foreach ($liste_des_activites as $item) : extract($item); ?>
                    <span>
                        <div class="heure"><?php echo $heure; ?></div>
                        <div class="event"><?php echo $event; ?></div>
                    </span>
                <?php endforeach; ?>
                <a class="button grey" href="/programme" aria-label="Le Programme" alt="Le Programme">Voir le programme</a>
            </div>
            <div class="resume">
                <div class="text">
                    <div class="container">
                         <?php echo $resume; ?>
                    </div>
                </div>
                <figure>
                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                </figure>
            </div>
        </div>
    </section>
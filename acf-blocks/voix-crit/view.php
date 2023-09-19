    <?php
    $fields = get_fields();
    extract($fields);
    ?>
    <section class="voix">
        <div class="content">
            <div class="image">
                <figure>
                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                </figure>
                <span id="container">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </div>
            <div class="text">
                <h2>La voix du criterium</h2>
                <h2 class="nom"><?php echo $nom; ?></h2>
            </div>
        </div>
    </section>
<?php

get_header();


?>
<div class="entry-content">
    <?php
        the_title( '<h1>', '</h1>', true );
        ?>
        <figure>
            <?php the_post_thumbnail( 'full'); ?>
        </figure>
        <?php
        the_content();
    ?>
</div>
<?php
get_footer();
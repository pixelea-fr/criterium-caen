    <?php
    // $fields = get_fields();
    // extract($fields);
    ?>
    <section class="actualites">
        <h2>Actualites</h2>
        <div class="content">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                echo '<div class="articles">';
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<article><a href="' . get_permalink() . '">';
                    echo '<figure>';
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    }
                    echo '</figure>';
                    echo '<div class="text"><h3>' . get_the_title() . '</h3>';
                    echo '<p class="exep">' . get_the_excerpt() . '</p></div>';
                    echo '</a></article>';
                }
                echo '</div>';
            }

            wp_reset_postdata(); ?>
        </div>
    </section>
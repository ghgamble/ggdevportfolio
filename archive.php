<?php get_header(); ?>

<main id="primary" class="site-main" tabindex="-1">
    <div class="o-container">
        <h1>
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                echo esc_html(get_the_author());
            } elseif (is_day()) {
                echo get_the_date();
            } else {
                post_type_archive_title();
            }
            ?>
        </h1>
    </div>

    <?php
    if (have_posts()) :
        $post_count = 0;
        while (have_posts()) : the_post();
            $post_count++;
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="o-container">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="archive-thumbnail">
                        <?php the_post_thumbnail('medium', [
                            'style' => 'max-height:100px; height:auto;',
                            'alt'   => esc_attr(get_the_title())
                        ]); ?>
                    </div>
                <?php endif; ?>

                <p class="meta" aria-label="Post metadata">
                    <span class="author"><?php echo esc_html(get_the_author()); ?></span> |
                    <span class="date"><?php echo get_the_date(); ?></span> |
                    <span class="categories"><?php the_category(', '); ?></span>
                </p>

                <div class="excerpt"><?php the_excerpt(); ?></div>
            </div>
        </article>
    <?php endwhile; ?>

        <?php if ($post_count === 20) : ?>
            <nav class="pagination" role="navigation" aria-label="Post navigation">
                <?php the_posts_pagination(); ?>
            </nav>
        <?php endif; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>

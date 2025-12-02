<artical id="post-<?php the_ID(); ?>" <?php post_class();?>>

    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta=info">
            <p> Posted in <?php echo get_the_data(); ?> by <?php the_author_posts_link(); ?></p>
            <?php if( has_category()): ?>
                <p>Category: <?php the_category(' '); ?></p>
                <?php endif; ?>
                <?php if( has_tags()): ?>
                    <p>Tags: <?php the_tags('', ','); ?></p>
                <?php endif; ?>
                </div>
                <?php endif; ?>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
                </div>

</artical>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="container">
            <div class="container">
                <div class="page-item">
                    <?php
                        while (have_posts() ) : the_posts();
                        get_template_part( 'parts/content', 'page');

                        if( comments_open() || get_comments_number()){
                            comment_template();
                        }
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer();?>
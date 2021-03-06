<?php get_header(); ?>
    <?php if(have_posts()) : ?>
                
    <?php while(have_posts()) : the_post(); ?>

    <article class="flex">
                    <div class="image-article quart">

                        <?php if(has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail('small', ['class' => 'fluide']); ?>

                        <?php endif; ?>

                    </div>
                    <div class="texte-article trois-quart">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content();?></p>
                        <p>Ce sujet vous intéresse? Consultez d'autre articles dans la catégorie <?php the_category(', ')?>.</p>
                    </div>
    </article>
    
    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
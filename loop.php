<?php
    if ( have_posts() ) :?>

        <div class="news-slider-container columns-3">
        
            <?php while ( have_posts() ) :
            
                the_post();?>

                <div class="news-post-card">

                    <img src="https://picsum.photos/300/300" alt="">
                    <h5 class="font-bold text-2xl"><?php the_title(); ?></h5>
                    <p><?php the_excerpt(); ?></p>



                </div>


                <?php

            
            endwhile;?>

        </div>

   <?php endif; 
?>
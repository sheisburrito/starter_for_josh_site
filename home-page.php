<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
          <section class="container-fluid aboutbg text-center">
            <div class="container">
                <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
                <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
              </div><!-- container-->
            <div class="blocker"></div>
        </section>

        <section class="container-fluid articlesbg">
            <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
                <div class="row"><!--  a row that gives us access to the BS columns-->
                  <div class="col-md-4 text-center">
                        <img class="img-fluid" src="<?php the_field('articleimage01'); ?>" alt="Illustration of a female warrior">
                        <h4 class="article-title"><?php the_field('articletitle01'); ?></h4>
                        <p class="date" ><?php the_field('articledate01'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerpt01'); ?> </p>
                        <a href="<?php the_field('readmore01'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4 text-center">
                      <img class="img-fluid" src="<?php the_field('articleimage02'); ?>" alt="Render of a masculine 3D being">
                        <h4 class="article-title"><?php the_field('articletitle02'); ?></h4>
                        <p class="date" ><?php the_field('articledate02'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerpt02'); ?> </p>
                        <a href="<?php the_field('readmore02'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
    
                    <div class="col-md-4 text-center">
                    <img class="img-fluid" src="<?php the_field('articleimage03'); ?>" alt="Render of a 3D environment">
                        <h4 class="article-title"><?php the_field('articletitle03'); ?></h4>
                        <p class="date" ><?php the_field('articledate03'); ?></p>
                        <p class="article-p"><?php the_field('articleexcerpt03'); ?> </p>
                        <a href="<?php the_field('readmore03'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    </div><!-- row-->
                </div><!-- container-->
               </section><!-- container-fluid-->
               <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->

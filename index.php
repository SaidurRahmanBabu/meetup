<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>

        <div class="row me-row content-ct speaker" id="speakers">
          <h2 class="row-title"><?php the_title(); ?></h2>
          <div class="col-md-4 col-sm-6 feature">

            <!-- main-post -->
            <img src="<?php the_post_thumbnail_url(); ?>" class="speaker-img">
            <h3><?php the_author(); ?></h3>
            <p><?php the_excerpt(); ?></p>

            <!-- author social -->
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>

          </div>
        </div>
        <!-- End: Speakers -->

  <?php endwhile; ?>
<?php endif; ?>


 <?php get_footer(); ?>
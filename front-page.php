<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      Professional Dog Training
      <a href="#" class="btn btn-default">Let's Go</a>
    </div>
    <div class="col-md-6">
      <?php $args = array(
        'post_type' => 'post',
        'post_per_page' => 1
      ); ?>
      <?php $the_query = new WP_Query( $args ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h2><?php the_title(); ?></h2>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
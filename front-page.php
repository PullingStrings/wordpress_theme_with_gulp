<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="https://via.placeholder.com/500" alt="placeholder">
        </div>
        <div class="col">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="#">Shop now</a>
        </div>
  </div>
<?php endwhile;

endif;?>

<?php get_footer(); ?>

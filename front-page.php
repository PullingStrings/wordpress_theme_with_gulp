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
</div>
</div>

  <div class="container">
    <h2> Popular Products</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <br/>
    <div class="row">
      <div class="col">
        <a href="#">furniture</a>
      </div>
      <div class="col">
        <a href="#">accessories</a>
      </div>
      <div class="col">
        <a href="#">bag</a>
      </div>
      <div class="col">
        <a href="#">decoration</a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/500" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/500" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/500" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/500" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="col">
          <h3>Newsletters</h3>
          <input type="text" name="Email" value="Email">
        </div>
        <div class="col">
          <h3>Contact Us</h3>
          <p>Your address or <br/>contact info gors here</p>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;

endif;?>

<?php get_footer(); ?>

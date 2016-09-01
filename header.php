<!DOCTYPE html>
<html>
  <head>
    <title>My Great Site</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
  <nav class="navbar navbar-default">
    <div class="nav-wrapper">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/DD_unleashed.png" />
      </div>
      <div class="menu-items">
        <div class="menu-info">509-396-1361</div>
        <div class="menu-options">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  </div>
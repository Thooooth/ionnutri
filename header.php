<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navbar TOPO -->
<nav class="navbar navbar-expand-lg navbar-light top-nav">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-nav" href="#">claudia.gomes@ionnutri.com.br</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav" href="#">contato@ionnutri.com.br</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nav" href="#">(11) 3164-1214</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link text-nav" href="#">(11) 9 1081-3015</a>
        </li>
      </ul>
      <div class="navbar-nav me-auto mb-2 mb-lg-0 ml-5">
        <a class="text-nav" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho </a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar TOPO -->
<!-- Navbar MENU -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0 mr-5" href="#">
        <img
			src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_header.png"
          	height="50"
          	alt="MDB Logo"
          	loading="lazy"
        />
      </a>
      <!-- MENU -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Área do profisional</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <!-- MENU -->
      <!-- BOTÃO COMPRA -->
      <div class="navbar-nav me-auto mb-2 mb-lg-0 ml-5">
        <!-- BOTÃO COMPRA -->
        <button type="button" class="btn btn-brand-header">Comprar Kit</button>
      </div>
    <!-- MENU -->
    </div>
  </div>
</nav>
<!-- Navbar MENU-->
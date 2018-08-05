  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> <?php body_class(); ?>>

    <div class="container" id="header">

      <div class="row">

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <div id="logo">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
            ?>
          </div>
          <div id="slogan">
            <?php bloginfo('description'); ?>
          </div>
        </div>

        <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3 widget-header">
          <div>
            <i class="fa <?php echo get_theme_mod( 'o2_fa_icon_picker_mails' ); ?> fa-2x"></i>
          </div>

          <div>
            <?php 
            $mail = get_theme_mod( 'opox_header_mails' );
            $tel = get_theme_mod( 'opox_header_tel' ); 
            ?>
            <div id="title"><?php echo get_theme_mod( 'opox_contact_header_title' ) ?></div>
            <div>@: <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></div>
            <div>TEL: <a href="tel:<?php echo $tel ?>"><?php echo $tel ?></a></div>
            <div>FAX: <span id="description"><?php echo get_theme_mod( 'opox_header_fax' ); ?></span></div>
          </div>
        </div>

        <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3 widget-header">
          <div>
            <i class="fa <?php echo get_theme_mod( 'o2_fa_icon_picker_working_time' ); ?> fa-2x"></i>
          </div>

          <div>
            <div id="title"><?php echo get_theme_mod( 'opox_header_working_time_title' ); ?></div>
            <div id="description"><?php echo get_theme_mod( 'opox_header_working_time' ); ?></div>
          </div>
        </div>
      </div>
      <hr/>

      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php 
            wp_nav_menu( array(
              'theme_location'  => 'primaire',
              'depth'           => 1,
              'menu_class'      => 'nav navbar-nav',
              'walker'          => new WP_Bootstrap_Navwalker()
            ) );
            ?>
          </div>

        </nav>

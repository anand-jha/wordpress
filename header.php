<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scnss.in
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
 <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/icons.min.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/main.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/red-color.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/yellow-color.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/blue-color.css">
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/responsive.css">

    <!-- Revolution Style -->
    <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/stylesheets/revolution/settings.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope>
<?php wp_body_open(); ?>


<main>
        <div class="rspn-hdr">
            <div class="rspn-tpbr">
                <ul class="rspn-cnt">
                    <li class="active"><i class="fa fa-map-marker"></i> Mandir Address PO Box 1552</li>
                    <li><i class="fa fa-phone"></i> (+91) 307-733-3005</li>
                </ul>
            </div>
            <div class="rspn-mdbr">
                <ul class="rspn-scil">
                    <li><a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a></li>                    
                </ul>
             
            </div>
            <div class="lg-mn">
                <div class="logo">
                    <?php 
								  $custom_logo_id = get_theme_mod( 'custom_logo' );
                                 $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                   if ( has_custom_logo() ) {
									   ?>
                                    <a href="<?php echo home_url(); ?>">   <?php
	                                   echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                        } else {
	                                   echo '<h1>' . get_bloginfo('name') . '</h1>';
	
                                         }
								 ?>
                                 </a>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Home</a>
                        
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">About</a>
                        
                    </li>
                   <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Mandir</a>
                        
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Donation</a>
                        
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Donation Receipt</a>
                        
                    </li>
                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Mandir News</a>
                        
                    </li>
                    <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                </ul>963.*
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        <header class="stck styl2 abs-ps">
            <div class="tpbr1">
                <div class="container">
                    <div class="lgo1"><h1 itemprop="headline"><a href="index.html" title="Home" itemprop="url"><img src="assets/images/lgo1-lgt.png" alt="lgo1-lgt.png" itemprop="image"></a></h1></div>
                   
                    <div class="scl1">
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    </div>
                    <div class="cnt-inf-lst2">
                        <div class="cnt-inf1">
                            <i class="fa fa-map-marker blu-clr"></i>
                            <p itemprop="description">Mandir Address PO Box 1552.</p>
                        </div>
                        <div class="cnt-inf1">
                            <i class="fa fa-clock-o blu-clr"></i>
                            <p itemprop="description">Mon - Sat 8.00 - 18.00 Sunday Closed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mnu-br2">
                <div class="container">
                    <nav class="rd4">
                        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                        <a class="rd4 ylw-bg btn1" href="#" title="">DONATION FOR MANDIR</a>
                    </nav>
                </div>
            </div>
        </header><!-- Header -->





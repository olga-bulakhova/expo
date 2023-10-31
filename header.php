<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package expo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="expo-container">
    <header class="expo-header">
        <div class="wrapper d-flex justify-content-between">
            <div class="header-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-primary',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'header-menu header-menu-left',
                        'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
                    )
                );
                ?>
            </div>

            <div class="header-actions">
                <ul class="header-menu header-menu-right">
                    <li class="menu-item-has-children">
                        <a href="#">
                            <svg class="icon icon-search" fill="#646262" version="1.1"
                                 id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 488.4 488.4" xml:space="preserve">
<g>
    <g>
        <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6
			s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2
			S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7
			S381.9,104.65,381.9,203.25z"/>
    </g>
</g>
</svg>
                        </a>
                        <div class="menu-menyu-akkaunta-container">
                            <ul class="sub-menu">
                                <li>
                                    <?php aws_get_search_form(true); ?>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                 class="icon icon-account" fill="none" viewBox="0 0 18 19">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z"
                                      fill="currentColor">
                                </path>
                            </svg>
                        </a>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-account',
                                'menu_id' => 'account-menu',
                                'menu_class' => 'sub-menu',
                            )
                        );
                        ?>
                    </li>

                    <?php if (!is_page('cart') && !is_page('checkout')) : ?>
                        <li>
                        <span class="open-cart">
                            <svg width="27px" height="27px" viewBox="0 0 24 24" fill="none" class="icon"
                                 xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_15_35)">
<rect width="24" height="24" fill="white"/>
<path d="M5.33331 6H19.8672C20.4687 6 20.9341 6.52718 20.8595 7.12403L20.1095 13.124C20.0469 13.6245 19.6215 14 19.1172 14H16.5555H9.44442H7.99998"
      stroke="#646262" stroke-linejoin="round"/>
<path d="M2 4H4.23362C4.68578 4 5.08169 4.30341 5.19924 4.74003L8.30076 16.26C8.41831 16.6966 8.81422 17 9.26638 17H19"
      stroke="#646262" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="10" cy="20" r="1" stroke="#646262" stroke-linejoin="round"/>
<circle cx="17.5" cy="20" r="1" stroke="#646262" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_15_35">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
                            <!--                            <svg class="icon icon-cart" aria-hidden="true" focusable="false"-->
                            <!--                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">-->
                            <!--                              <path fill="currentColor" fill-rule="evenodd"-->
                            <!--                                    d="M20.5 6.5a4.75 4.75 0 00-4.75 4.75v.56h-3.16l-.77 11.6a5 5 0 004.99 5.34h7.38a5 5 0 004.99-5.33l-.77-11.6h-3.16v-.57A4.75 4.75 0 0020.5 6.5zm3.75 5.31v-.56a3.75 3.75 0 10-7.5 0v.56h7.5zm-7.5 1h7.5v.56a3.75 3.75 0 11-7.5 0v-.56zm-1 0v.56a4.75 4.75 0 109.5 0v-.56h2.22l.71 10.67a4 4 0 01-3.99 4.27h-7.38a4 4 0 01-4-4.27l.72-10.67h2.22z"></path>-->
                            <!--                            </svg>-->
                            <span class="cart-badge <?php echo 'count-' . count(WC()->cart->get_cart()) ?> "><?php echo count(WC()->cart->get_cart()); ?></span>
                        </span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>

    <div class="expo-mini-cart animate__fadeInRight hidden">
        <div>
            <div class="mini-card-close">
                <img src="<?php echo get_template_directory_uri() . '/img/banner-close.png' ?>" alt="">
            </div>
            <div>
                <?php woocommerce_mini_cart(); ?>
            </div>
        </div>
    </div>

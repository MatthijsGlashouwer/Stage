<?php
    /**
     * Template Name: Clean Page
     * This template will only display the content you entered in the page editor
     */
    ?>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <style>
            /* POULE TABELLEN */
            table {
            width: 100%!important;
            border-collapse: collapse;
            margin:20px auto;
            }
            /* Zebra striping */
            tr:nth-of-type(odd) {
            background: #eee;
            border: 1px solid #eee;
            border-left: none;
            border-right: none;
            }
            th {
            background: #e95842 !important;
            color: white !important;
            font-weight: bold !important;
            font-family: Arial, Helvetica, sans-serif;
            }
            td, th {
            padding: 5px;
            border: 1px solid #ccc;
            text-align: left; ;
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            }
            .osc-res-tab {
            color: #15975b;
            }
            body {
            background: #fff;
            }
            h1 {
            color: #fff!important;
            }
            .main-header {
            height: 150px;
            background-color: #E1191E;
            box-shadow: 0 0 10px rgba(0,0,0,0.95);
            z-index: 99;
            overflow: hidden;
            }
            .Own {
            color: #e95842;
            }
            .sponsors {
            width: 200px;
            margin-top: 20px;
            right: 2rem;
            top: 150px;
            text-align: center;
            position: fixed;
            }
            .sponsors > img {
            margin-bottom: 1rem;
            max-width: 200px;
            }
            .main-header > .logo {
            display: inline-block;
            padding: 1rem;
            width: 150px;
            margin-bottom: -4.5px;
            height: 100%;
            text-align: center;
            }
            .main-header > .inner-header > nav {
            background-color: #B70F13;
            color: #fff;
            height: 30%;
            font-size: 150%;
            }
            .navbar-nav > li > a {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #ffffff;
            }
        </style>
    </head>
    <header class="main-header">
        <div class="logo">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/logo.png">
        </div>
        <nav class="navigation">
            <a class="cs-click-menu"><i class="fa fa-bars"></i></a>
            <?php px_navigation('main-menu'); ?>    
        </nav>
        <?php the_title( '<h1>', '</h1>' ); ?>
    </header>
    <body>
        <aside class="sponsors">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/sponsors/Mediamarkt.png">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/sponsors/zwf_vvworkumbanner.png">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/sponsors/workumverzekering.png">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/sponsors/dewitte.png">
            <img src="http://narrowcasting.vvworkum.nl/assets/img/sponsors/vanderwerf.png">
        </aside>
        <?php
            while ( have_posts() ) : the_post();   
                the_content();
            endwhile;
            ?>
        <?php wp_footer(); ?>
    </body>
</html>
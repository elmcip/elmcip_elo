<!-- #page-wrapper -->
<div id="page-wrapper">

    <!-- #page -->
    <div id="page">

        <!-- header -->
        <header role="header" class="container clearfix">

            <!-- #pre-header -->
            <div id="pre-header" class="clearfix">

                <?php $main_menu_tree = menu_tree(variable_get('menu-top-menu_links_source', 'menu-top-menu'));
                  print drupal_render($main_menu_tree);
                ?>

                <?php if ($page['header']) :?>
                <?php print render($page['header']); ?>
                <?php endif; ?>

                <?php if (theme_get_setting('social_icons_display', 'elmcip_elo')): ?>
                  <!-- #social-icons -->
                  <div id="social-icons" class="clearfix">
                    <ul id="social-links">
                      <li class="facebook-link"><a href="https://www.facebook.com/groups/6189208410/" class="facebook" id="social-01" title="Join Us on Facebook!">Facebook</a></li>
                      <li class="twitter-link"><a href="https://twitter.com/eliterature" class="twitter" id="social-02" title="Follow Us on Twitter">Twitter</a></li>
                      <li class="vimeo-link"><a href="http://vimeo.com/elmcip" id="social-05" title="Vimeo" class="vimeo">Vimeo</a></li>
                      <li class="rss-link"><a href="feed://conference.eliterature.org/rss.xml" id="social-08" title="RSS" class="rss">RSS Feeds</a></li>
                    </ul>
                  </div>
                  <!-- EOF: #social-icons -->
                <?php endif; ?>

            </div>
            <!-- EOF: #pre-header -->

            <!-- #header -->
            <div id="header" class="clearfix">

                <!-- #header-left -->
                <div id="header-left" class="one-third">

                    <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                    <?php endif; ?>

                    <?php if ($site_name || $site_slogan): ?>
                        <!-- #name-and-slogan -->
                        <hgroup id="name-and-slogan">
                            <?php if ($site_name):?>
                            <h1 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
                            <?php endif; ?>

                            <?php if ($site_slogan):?>
                            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
                            <?php endif; ?>
                        </hgroup>
                        <!-- EOF:#name-and-slogan -->
                    <?php endif; ?>

                </div>
                <!--EOF: #header-left -->

                <!-- #header-right -->
                <div id="header-right" class="two-third last">

                    <!-- #navigation-wrapper -->
                    <div id="navigation-wrapper" class="clearfix">
                        <!-- #main-navigation -->
                        <nav id="main-navigation" class="main-menu clearfix" role="navigation">
                        <?php if ($page['navigation']) :?>
                        <?php print drupal_render($page['navigation']); ?>
                        <?php else : ?>

                        <?php if (module_exists('i18n_menu')) {
                        $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                        } else { $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); }
                        print drupal_render($main_menu_tree); ?>

                        <?php endif; ?>
                        </nav>
                        <!-- EOF: #main-navigation -->
                    </div>
                    <!-- EOF: #navigation-wrapper -->

                </div>
                <!--EOF: #header-right -->

            </div>
            <!-- EOF: #header -->

        </header>
        <!-- EOF: header -->

        <div id="content" class="clearfix">

            <?php if ($page['top_content']): ?>
            <!-- #top-content -->
            <div id="top-content" class="container clearfix">
              <!-- intro-page -->
              <div class="intro-page">
              <?php print render($page['top_content']); ?>
              </div>
              <!-- EOF: intro-page -->
            </div>
            <!--EOF: #top-content -->
            <?php endif; ?>

            <!-- #banner -->
            <div id="banner" class="container">

                <?php if ($page['banner']) : ?>
                <!-- #banner-inside -->
                <div id="banner-inside">
                <?php print render($page['banner']); ?>
                </div>
                <!-- EOF: #banner-inside -->
                <?php endif; ?>

                <?php if (theme_get_setting('slideshow_display', 'elmcip_elo')): ?>

                    <?php if ($is_front): ?>
                    <!-- #slider-container -->
                    <div id="slider-container">
                        <div class="flexslider loading">
                            <ul class="slides">

                                <!-- first-slide -->
                                <li class="slider-item">
                                    <div class="slider-image">
                                        <a href="<?php print base_path();?>"><img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/img1.jpg" alt="" /></a>
                                    </div>
                                    <div class="flex-caption">
                                        <h3>Quisque eu nibh enim, ac aliquam nunc.</h3>
                                    </div>
                                </li>

                                <!-- second-slide -->
                                <li class="slider-item">
                                    <div class="slider-image">
                                        <a href="<?php print base_path();?>"><img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/img2.jpg" alt="" /></a>
                                    </div>
                                    <div class="flex-caption">
                                        <h3>Quisque eu nibh enim, ac aliquam nunc.</h3>
                                    </div>
                                </li>

                                <!-- third-slide -->
                                <li class="slider-item">
                                    <div class="slider-image">
                                        <a href="<?php print base_path();?>"><img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/img3.jpg" alt="" /></a>
                                    </div>
                                    <div class="flex-caption">
                                        <h3>Quisque eu nibh enim, ac aliquam nunc.</h3>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- EOF: #slider-container -->
                    <?php endif; ?>

                <?php endif; ?>

            </div>

            <!-- EOF: #banner -->
            <?php if ($breadcrumb && theme_get_setting('breadcrumb_display', 'elmcip_elo')):?>
            <!-- #breadcrumb -->
            <div class="container clearfix">
            <?php print $breadcrumb; ?>
            </div>
            <!-- EOF: #breadcrumb -->
            <?php endif; ?>

            <?php if ($messages):?>
            <!--messages -->
            <div class="container clearfix">
            <?php print $messages; ?>
            </div>
            <!--EOF: messages -->
            <?php endif; ?>

            <!--#featured -->
            <div id="featured">

                <?php if ($page['highlighted']): ?>
                <div class="container clearfix"><?php print render($page['highlighted']); ?></div>
                <?php endif; ?>

                <?php if (theme_get_setting('highlighted_display', 'elmcip_elo')): ?>

                    <?php if ($is_front): ?>

                    <div class="container clearfix">

                        <!--featured-item -->
                        <div class="one-half">
                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/featured-img-01.png" class="img-align-left" alt="" />
                            <h3>Awesome Features</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="readmore">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <!--EOF: featured-item -->

                        <!--featured-item -->
                        <div class="one-half last">
                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/featured-img-02.png" class="img-align-left" alt="" />
                            <h3>Browser Compatibility</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="readmore">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <!--EOF: featured-item -->

                    </div>

                    <div class="container clearfix">

                        <!--featured-item -->
                        <div class="one-half">
                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/featured-img-03.png" class="img-align-left" alt="" />
                            <h3>Works on Mobile Devices</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="readmore">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <!--EOF: featured-item -->

                        <!--featured-item -->
                        <div class="one-half last">
                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/featured-img-04.png" class="img-align-left" alt="" />
                            <h3>Full Documentation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="readmore">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <!--EOF: featured-item -->

                    <div class="horizontal-line"> </div>

                    </div>

                    <?php endif; ?>

                <?php endif; ?>

            </div>
            <!-- EOF: #featured -->

            <!--#main-content -->
            <div id="main-content" class="container clearfix">

                <?php if ($page['sidebar_first']) :?>
                    <!--.sidebar first-->
                    <div class="one-fourth">
                    <aside class="sidebar">
                    <?php print render($page['sidebar_first']); ?>
                    </aside>
                    </div>
                    <!--EOF:.sidebar first-->
                <?php endif; ?>


                <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
                <div class="one-half">
                <?php } elseif ($page['sidebar_first']) { ?>
                <div class="three-fourth last">
                <?php } elseif ($page['sidebar_second']) { ?>
                <div class="three-fourth">
                <?php } else { ?>
                <div class="clearfix">
                <?php } ?>
                    <!--#main-content-inside-->
                    <div id="main-content-inside">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    <?php print render($page['content']); ?>
                    </div>
                    <!--EOF:#main-content-inside-->
                </div>


                <?php if ($page['sidebar_second']) :?>
                    <!--.sidebar second-->
                    <div class="one-fourth last">
                    <aside class="sidebar">
                    <?php print render($page['sidebar_second']); ?>
                    </aside>
                    </div>
                    <!--EOF:.sidebar second-->
                <?php endif; ?>

            </div>
            <!--EOF: #main-content -->

            <!-- #bottom-content -->
            <div id="bottom-content" class="container clearfix">

                <?php if ($page['bottom_content']): ?>
                <?php print render($page['bottom_content']); ?>
                <?php endif; ?>

                <?php if (theme_get_setting('carousel_display', 'elmcip_elo')): ?>

                    <?php if ($is_front): ?>

                    <h3>Some of Our Featured Projects</h3>

                    <ul id="projects-carousel" class="loading">

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-1.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                           <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img1.jpg" alt="" width="220"  class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> BlackBerry Website Project</a>
                                        </p>
                                        <span>Web</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-2.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img2.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> Vestibulum ante ipsum primis</a>
                                        </p>
                                        <span>Illustration</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-3.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img3.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> Nulla mollis fermentum nunc</a>
                                        </p>
                                        <span>Illustration</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-4.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img4.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> Cras vel orci sapien</a>
                                        </p>
                                        <span>Illustration / Web</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                         <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-5.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img5.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title">Curabitur nisl libero</a>
                                        </p>
                                        <span>Illustration / Web</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-1.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img1.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> BlackBerry Website Project</a>
                                        </p>
                                        <span>Web</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-2.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img2.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> Vestibulum ante ipsum primis</a>
                                        </p>
                                        <span>Illustration</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                        <!-- PROJECT ITEM STARTS -->
                        <li>
                            <div class="item-content">
                                <div class="link-holder">
                                    <div class="portfolio-item-holder">
                                        <div class="portfolio-item-hover-content">

                                            <a href="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/portfolio-img-3.jpg" title="title" data-rel="prettyPhoto" class="zoom">View Image</a>

                                            <img src="<?php print base_path() . drupal_get_path('theme', 'simplecorp') ;?>/images/sampleimages/pt-img3.jpg" alt="" width="220" class="portfolio-img" />

                                            <div class="hover-options"></div>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <a href="#" title="title"> Nulla mollis fermentum nunc</a>
                                        </p>
                                        <span>Illustration</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- PROJECT ITEM ENDS -->

                    </ul>

                    <!-- // optional "view full portfolio" button on homepage featured projects -->
                    <a href="#" class="colored" title="portofolio">View full portofolio</a>

                <?php endif; ?>

            <?php endif; ?>

            </div>
            <!-- EOF: #bottom-content -->


        </div> <!-- EOF: #content -->

        <!-- #footer -->
        <footer id="footer">

            <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']) :?>
            <div class="container clearfix">

                <div class="first one-fourth footer-area">
                <?php if ($page['footer_first']) :?>
                <?php print render($page['footer_first']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area">
                <?php if ($page['footer_second']) :?>
                <?php print render($page['footer_second']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area">
                <?php if ($page['footer_third']) :?>
                <?php print render($page['footer_third']); ?>
                <?php endif; ?>
                </div>

                <div class="one-fourth footer-area last">
                <?php if ($page['footer_fourth']) :?>
                <?php print render($page['footer_fourth']); ?>
                <?php endif; ?>
                </div>

            </div>
            <?php endif; ?>

            <!-- #footer-bottom -->
            <div id="footer-bottom">
                <div class="container clearfix">

                    <?php if ($page['footer']) :?>
                      <?php print render($page['footer']); ?>
                    <?php endif; ?>

                    <?php
                        global $theme_path;
                        global $base_path;
                        $full_path = $base_path . $theme_path;
                    ?>
                    <ul class="logos">
                      <li class="logo">
                        <a href="http://eliterature.org/"><img src="<?php print $full_path; ?>/images/elologo_for_web_white.png" alt="Electronic Literature Organization"/></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.uib.no/en/rg/electronicliterature"><img src="<?php print $full_path; ?>/images/BEL03x_bw2.png" alt="Bergen Electronic Literature Research Group"/></a>
                      </li>
                      <li class="logo">
                        <a href="http://elmcip.net"><img src="<?php print $full_path; ?>/images/elmcip_logo.png" alt="ELMCIP"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.uib.no/en"><img src="<?php print $full_path; ?>/images/uiblogo.png" alt="University of Bergen"></a>
                      </li>
                      <li class="logo">
                        <a href="http://bergenbibliotek.no/"><img src="<?php print $full_path; ?>/images/bob_logo.png" alt="Bergen Public Library"></a>
                      </li>
                      <li class="logo">
                        <a href="http://usf.no/no/forside/"><img src="<?php print $full_path; ?>/images/USF_logo_svhv_transparent.png" alt="USF"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.stiftelsen314.com/"><img src="<?php print $full_path; ?>/images/3,14-LOGO.png" alt="Galleri 3,14"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.lydgalleriet.no/"><img src="<?php print $full_path; ?>/images/Lydgalleriet.png" alt="Lydgalleriet"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.oestre.no/index.php/en/"><img src="<?php print $full_path; ?>/images/oestre_logo.png" alt="Østre"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.nordiskkulturfond.org/en"><img src="<?php print $full_path; ?>/images/nordiskkulturfond.png" alt="Nordic Culture Fund"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.forskningsradet.no/en/Home_page/1177315753906"><img src="<?php print $full_path; ?>/images/FRlogoEngrgb-farger.png" alt="Norwegian Research Council"></a>
                      </li>
                      <li class="logo">
                        <a href="http://www.paris.uio.no/"><img src="<?php print $full_path; ?>/images/pfn_logo.png" alt="Programme Franco-Norvègien"></a>
                      </li>
                    </ul>
                </div>
            </div>
            <!-- EOF: #footer-bottom -->

        </footer>
        <!-- EOF #footer -->

    </div>
    <!-- EOF: #page -->

</div>
<!-- EOF: #page-wrapper -->

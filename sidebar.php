<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?> 
    <div id="secondary" class="secondary">
      <div class="speaker">
          <a href="http://rennweg8.ch/wordpress/">
          <img src="../../../../res/speaker.jpg" />
          </a>
      </div>
      <div class="menu">
          <div class="klingel">
              <a class="klingellink" href="/wordpress/Haus">
              <div class="klingelschrift">
                  Haus
              </div>
              </a>
          </div>
           <div class="klingel">
              <a class="klingellink" href="/wordpress/WG">
              <div class="klingelschrift">
                  WG
              </div>
              </a>
          </div>
           <div class="klingel">
              <a class="klingellink" href="/wordpress/C.Inema">
              <div class="klingelschrift">
                  C.Inema
              </div>
              </a>
        </div>
        <div class="klingel">
              <a class="klingellink" href="/wordpress/Rittersaal">
              <div class="klingelschrift">
                  Rittersaal
              </div>
              </a>
          </div>
          <div class="klingel">
              <a class="klingellink" href="/wordpress/Bilder">
              <div class="klingelschrift">
                  Bilder
              </div>
              </a>
          </div>
          <div class="klingel">
              <a class="klingellink" href="/wordpress/Neues">
              <div class="klingelschrift">
                  Altes
              </div>
              </a>
          </div>
          <div class="klingel">
              <a class="klingellink" href="/wordpress/Panoramen">
              <div class="klingelschrift">
                  Panoramen
              </div>
              </a>
          </div>
          <div class="klingel">
              <a class="klingellink" href="/wordpress/blog">
              <div class="klingelschrift">
                  Blog
              </div>
              </a>
          </div>
        
        <div class="googlesearch">
            <!-- SiteSearch Google -->
            <form name="googlesearch" method="get" action="http://www.google.com/custom" target="_top">
            <input type="hidden" name="domains" value="www.rennweg8.ch"></input>
            <input type="text" name="q" size="20" maxlength="255" value=""></input><br />
            <div style="height:5px;"></div>
            <div style="text-align: center;">
            <input type="radio" name="sitesearch" value="www.rennweg8.ch" checked="checked"></input>
            <font size="-3" color="#fff">RennWG</font>
            <input type="radio" name="sitesearch" value=""></input>
            <font size="-3" color="#fff">Web</font><br />
            </div>
            <input type="hidden" name="client" value="pub-5131432284384458"></input>
            <input type="hidden" name="forid" value="1"></input>
            <input type="hidden" name="ie" value="UTF-8"></input>
            <input type="hidden" name="oe" value="UTF-8"></input>
            <input type="hidden" name="cof" value="GALT:#222222;GL:1;DIV:#DFDDDD;VLC:888888;AH:center;BGC:DFDDDD;LBGC:555566;ALC:222222;LC:222222;T:222222;GFNT:888888;GIMP:888888;LH:100;LW:475;L:http://www.rennweg8.ch/res/willkommen.gif;S:http://www.rennweg8.ch/;LP:1;FORID:1;"></input>
            <input type="hidden" name="hl" value="de"></input>
            </form>
            <!-- SiteSearch Google -->
        </div>
        <div class="klingel">
            <a onClick="document.googlesearch.submit();">
            <div class="klingelschrift">
                Google
            </div>
            </a>
        </div>

			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- .secondary -->

<?php endif; ?>

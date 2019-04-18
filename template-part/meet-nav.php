
      <nav class="side-menu">
        <ul>
          <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
          </li>

          <?php
            wp_nav_menu(
              array(
                'menu' => 'main-menu',
                'link_before' => '<span class="menu-title">',
                'link_after' => '</span><span class="dot"></span>',
                'container' => false,
              )
            );
          ?>

        </ul>
      </nav>


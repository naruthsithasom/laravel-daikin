<!-- BEGIN: Side Menu -->
<?php
    $menu1 = Request::segment(1);
    $menu2 = Request::segment(2);
    $menu3 = Request::segment(3);
    // dd($menu1, $menu2, $menu3);
?>
<nav class="side-nav">
    <ul >
        <li>
            <a href="{{ url('/dashboard/home') }}" class="side-menu @if ($menu2 == 'home') side-menu--active @endif">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Home
                    <div class="side-menu__sub-icon transform rotate-180"> </div>
                </div>
            </a>
        </li>

        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Manufacturing
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="side-menu__sub @if($menu2 == 'production_process' || $menu2 == 'quality_control') side-menu__sub-open  @endif">
              <li>
                <a href="{{ url('/dashboard/production_process') }}" class="side-menu @if($menu2 == 'production_process') side-menu--active @endif">
                  <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                  <div class="side-menu__title">Production Process</div>
                </a>
              </li>
              <li>
                <a href="{{ url('/dashboard/quality_control') }}" class="side-menu @if($menu2 == 'quality_control') side-menu--active @endif"> 
                  <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                  <div class="side-menu__title">Quality Control</div>
                </a>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="{{ url('/dashboard/product_technology') }}" class="side-menu @if( $menu2 == 'product_technology') side-menu--active @endif">
              <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
              <div class="side-menu__title">
                Product & Technology
                <div class="side-menu__sub-icon transform rotate-180">  </div>
              </div>
            </a>
        </li>
          <li>
            <a href="{{ url('/dashboard/news_activities') }}" class="side-menu @if( $menu2 == 'news_activities') side-menu--active @endif">
              <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
              <div class="side-menu__title">
              News & Activities
                <div class="side-menu__sub-icon transform rotate-180">  </div>
              </div>
            </a>
        </li>

    </ul>
</nav>
<!-- END: Side Menu -->

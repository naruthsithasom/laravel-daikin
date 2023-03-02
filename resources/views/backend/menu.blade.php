<!-- BEGIN: Side Menu -->
<?php
    $menu = Request::segment(2);
?>
<nav class="side-nav">
    <ul>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Home
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="side-menu__sub">
                <li>
                    <a href="#" class="side-menu">
                        <div class="side-menu__icon"> </div>
                        <div class="side-menu__title"> sub1 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Corporste Info
                    <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
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
            <ul class="side-menu__sub">
              <li>
                <a href="#" class="side-menu">
                  <div class="side-menu__icon"></div>
                  <div class="side-menu__title">sub1</div>
                </a>
              </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->

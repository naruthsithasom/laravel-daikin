<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="/backend/dist/images/logo.svg">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="{{ url('/webpanel/product') }}" class="menu">
                <div class="menu__icon"> <i data-lucide="layers"></i> </div>
                <div class="menu__title"> สินค้า </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/webpanel/evidence') }}" class="menu">
                <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="menu__title"> สัญญา </div>
            </a>
        </li>

        <li>
            <a href="{{ url('/webpanel/setting') }}" class="menu">
                <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                <div class="menu__title"> การตั้งค่า </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/webpanel/staff') }}" class="menu">
                <div class="menu__icon"> <i data-lucide="smile"></i> </div>
                <div class="menu__title"> พนักงาน </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/webpanel/position') }}" class="menu">
                <div class="menu__icon"> <i data-lucide="pocket"></i> </div>
                <div class="menu__title"> ต่ำแหน่ง </div>
            </a>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<!-- BEGIN: Top Bar -->
<div
    class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] -mt-7 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="/backend/dist/images/logo.svg">
            <span class="logo__text text-white text-lg ml-3">DaiKin</span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <?php $menu = Request::segment(2); ?>
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#"></a></li>
             </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false" data-tw-toggle="dropdown">
                {{-- <img alt="Midone - HTML Admin Template" src="/{{ Auth::user()->image}}"> --}}
            </div>
            <div class="dropdown-menu w-56">
                <ul
                    class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li>
                        <a href="{{ url('/webpanel/logout') }}" class="dropdown-item hover:bg-white/5"> <i
                                data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->
<script>
    function readNoti(i){
        if(i*1 > 0){
            $.ajax({
                type: "POST",
                url: '{{ url("/webpanel/readNoti") }}',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {}
            });
        }
    }
</script>

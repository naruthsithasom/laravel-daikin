<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    @include('backend.style')
</head>
<!-- END: Head -->

<body class="py-5 md:py-0">
    @include('backend.head')
    <div class="flex overflow-hidden">
    @include('backend.menu')
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6 mt-8">

                <div class="col-span-12 lg:col-span-12 2xl:col-span-12">
                    <div class="overflow-x-auto">
                        home
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    @include('backend.script')
</body>

</html>
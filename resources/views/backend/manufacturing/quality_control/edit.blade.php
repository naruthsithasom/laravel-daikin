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
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Manufacturing / Quality Control / Edit
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <button class="btn btn-primary shadow-md mr-2 w-24"
                        onclick="location.href='{{ url('/dashboard/quality_control') }}'">Back</button>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Header Text TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Content Text TH</label>
                            <textarea id="validation-form-6" class="form-control" name="" placeholder="" rows="10"
                                required></textarea>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Header Text EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Content Text EN</label>
                            <textarea id="validation-form-6" class="form-control" name="" placeholder="" rows="10"
                                required></textarea>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
            </div>

            <div class="box border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        icon-name="chevron-down" data-lucide="chevron-down"
                        class="lucide lucide-chevron-down w-4 h-4 mr-2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>Photo Gallery</div>
                <div class="mt-5">

                    <div class="mt-3">

                        <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                            <div class="flex flex-wrap px-4">
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="/backend/dist/images/preview-11.jpg">
                                    <div
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x"
                                            class="lucide lucide-x w-4 h-4">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg> </div>
                                </div>
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="/backend/dist/images/preview-7.jpg">
                                    <div
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x"
                                            class="lucide lucide-x w-4 h-4">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg> </div>
                                </div>
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="/backend/dist/images/preview-13.jpg">
                                    <div
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x"
                                            class="lucide lucide-x w-4 h-4">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg> </div>
                                </div>
                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="/backend/dist/images/preview-8.jpg">
                                    <div
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" icon-name="x" data-lucide="x"
                                            class="lucide lucide-x w-4 h-4">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg> </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="image" data-lucide="image"
                                    class="lucide lucide-image w-4 h-4 mr-2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg> <span class="text-primary mr-1">Upload a file</span> or drag and drop
                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class=" box intro-y col-span-12 lg:col-span-6 p-5">
                    <label for="crud-form-1" class="form-label">Sort</label>
                    <input id="crud-form-1" type="number" min="0" class="form-control w-full" placeholder="">
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-danger w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    @include('backend.script')
</body>

</html>

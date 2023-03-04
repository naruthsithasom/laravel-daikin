<h1>
    Add careers
</h1>
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
                    Careers / Add New
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <button class="btn btn-primary shadow-md mr-2 w-24"
                        onclick="location.href='{{ url('/dashboard/careers') }}'">Back</button>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Jobs TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Position TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Salaly TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Age TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Gender TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Job Experience TH</label>
                            <div class="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Knowledge TH</label>
                            <div class="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Contact for more detail TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="crud-form-1" class="form-label">Jobs EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Position EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Salaly EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Age EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Gender EN</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Job Experience TH</label>
                            <div class="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Knowledge TH</label>
                            <div class="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Contact for more detail TH</label>
                            <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
            </div>


            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class=" box intro-y col-span-12 lg:col-span-6 p-5">
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Phone</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Sort</label>
                        <input id="crud-form-1" type="number" min="0" class="form-control w-full" placeholder="">
                    </div>
                    <div class="form-check form-switch flex flex-col items-start mt-3">
                        <label for="post-form-5" class="form-check-label ml-0 mb-2">Active</label>
                        <input id="post-form-5" class="form-check-input" type="checkbox">
                    </div>
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
<script>
    import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
    $(".editor").each(function () {
        const el = this;
        ClassicEditor.create(el).catch((error) => {
            console.error(error);
        });
    });

</script>

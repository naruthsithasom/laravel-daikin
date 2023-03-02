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
              Manufacturing / Production Procress / Add 
              </h2>
              <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                  <button class="btn btn-primary shadow-md mr-2 w-24" onclick="location.href='{{ url('/dashboard/production_process') }}'">Back</button>
              </div>
          </div>

        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Banner Text TH</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Header Text1 TH</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
 
                    <div class="mt-3">
                        <label>Header Text2 TH</label>
                        <div class="mt-2">
                            <div class="editor">
                                <!-- <p>Content of the editor.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Form Layout -->
            </div>
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Banner Text EN</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Header Text1 EN</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
                    </div>
 
                    <div class="mt-3">
                        <label>Header Text2 EN</label>
                        <div class="mt-2">
                            <div class="editor">
                                <!-- <p>Content of the editor.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Form Layout -->
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
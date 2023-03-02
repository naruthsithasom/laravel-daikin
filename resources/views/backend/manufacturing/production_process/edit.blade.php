<h1>Edit</h1><!DOCTYPE html>
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
          <h2 class="intro-y text-lg font-medium mt-10">
              Edit  
          </h2>
 
      </div>
      <!-- END: Content -->
  </div>
  @include('backend.script')
</body>

</html>
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
              Manufacturing / Production Detail  
              </h2>
              <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                  <button class="btn btn-primary shadow-md mr-2" onclick="location.href='{{ url('/dashboard/production_detail/add') }}'">Add New</button>
              </div>
          </div>
      <div class="grid grid-cols-12 gap-6 mt-5">

              <!-- BEGIN: Data List -->
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                  <table class="table table-report -mt-2">
                      <thead>
                          <tr>
                              <th class="text-center whitespace-nowrap">NO.</th>
                              <th class="text-center whitespace-nowrap">SORT</th>
                              <th class="text-center whitespace-nowrap">TEXT TH</th>
                              <th class="text-center whitespace-nowrap">TEXT EN</th>
                              <th class="text-center whitespace-nowrap">IMAGES</th>
                              <th class="text-center whitespace-nowrap">STATUS</th>
                              <th class="text-center whitespace-nowrap">ACTIONS</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="intro-x">
                              <td class="text-center">1</td>
                              <td class="text-center">1</td>
                              <td class="text-center">Text THAI</td>
                              <td class="text-center">Text ENGLISH</td>
                              <td class="text-center">20</td>
                              <td class="w-40">
                                  <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                              </td>
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                  </div>
                              </td>
                          </tr>
                          <tr class="intro-x">
                          <td class="text-center">2</td>
                              <td class="text-center">2</td>
                              <td class="text-center">Text THAI</td>
                              <td class="text-center">Text ENGLISH</td>
                              <td class="text-center">10</td>
                              <td class="w-40">
                                  <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                              </td>
                              <td class="table-report__action w-56">
                                  <div class="flex justify-center items-center">
                                      <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                      <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                  </div>
                              </td>
                          </tr>
 
                      </tbody>
                  </table>
              </div>
              <!-- END: Data List -->
 
          </div>
          <!-- BEGIN: Delete Confirmation Modal -->
          <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-body p-0">
                          <div class="p-5 text-center">
                              <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                              <div class="text-3xl mt-5">Are you sure?</div>
                              <div class="text-slate-500 mt-2">
                                  Do you really want to delete these records? 
                                  <br>
                                  This process cannot be undone.
                              </div>
                          </div>
                          <div class="px-5 pb-8 text-center">
                              <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                              <button type="button" class="btn btn-danger w-24">Delete</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END: Delete Confirmation Modal -->
      </div>
      <!-- END: Content -->
  </div>
  @include('backend.script')
</body>

</html>
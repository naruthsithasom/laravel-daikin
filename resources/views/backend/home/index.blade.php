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
        <div class="intro-y col-span-12 lg:col-span-12">
          <!-- BEGIN: Form Layout -->
          <div class="intro-y box p-5">
            <div>
              <label for="crud-form-1" class="form-label">LINE Link</label>
              <input id="crud-form-1" type="text" class="form-control w-full" placeholder="https://line.com">
            </div>
            <div class="mt-3">
              <label for="crud-form-1" class="form-label">Fackbook Link</label>
              <input id="crud-form-1" type="text" class="form-control w-full" placeholder="https://facebook.com">
            </div>
            <div class="mt-3">
              <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5  ">
                <div class="grid grid-cols-12 gap-6 mt-8">
              <div class="intro-y col-span-12 lg:col-span-6">
                <label for="crud-form-1" class="form-label">Text 1 TH</label>
                <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">

                <label for="crud-form-1" class="form-label mt-2">Text 2 TH</label>
                <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
              </div>
              <div class="intro-y col-span-12 lg:col-span-6">
                <label for="crud-form-1" class="form-label">Text 1 EN</label>
                <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">

                <label for="crud-form-1" class="form-label mt-2">Text 2 EN</label>
                <input id="crud-form-1" type="text" class="form-control w-full" placeholder="">
              </div>
              </div>
              </div>
            </div>
            <div class="mt-3">
              <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">


                  <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                      Home Banner
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                      <!-- <button class="btn btn-primary shadow-md mr-2" onclick="location.href='{{url('/dashboard/production_process/add') }}'">Add New  </button> -->
                      <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                        <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a
                          file</span>
                        <input type="file" multiple class="w-full h-full top-0 left-0 absolute opacity-0">
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-12 gap-6 mt-5">

                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                      <table class="table table-report -mt-2">
                        <thead>
                          <tr>
                            <th class="whitespace-nowrap">ID</th>
                            <th class="whitespace-nowrap">IMAGE</th>
                            <!-- <th class="text-center whitespace-nowrap">SORT</th> -->
                            <th class="text-center whitespace-nowrap">ACTIVE</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="intro-x">
                            <td class="w-40">
                              <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 20 August 2020">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 20 August 2020">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 20 August 2020">
                                </div>
                              </div>
                            </td>
                            <td>
                              <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                            </td>
                            <!-- <td class="text-center">50</td> -->
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
                            <td class="w-40">
                              <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-12.jpg" title="Uploaded at 20 July 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 20 July 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 20 July 2021">
                                </div>
                              </div>
                            </td>
                            <td>
                              <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                            </td>
                            <!-- <td class="text-center">74</td> -->
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
                            <td class="w-40">
                              <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 14 July 2022">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 14 July 2022">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 14 July 2022">
                                </div>
                              </div>
                            </td>
                            <td>
                              <a href="" class="font-medium whitespace-nowrap">Nike Air Max 270</a>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                            </td>
                            <!-- <td class="text-center">118</td> -->
                            <td class="w-40">
                              <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                            </td>
                            <td class="table-report__action w-56">
                              <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                              </div>
                            </td>
                          </tr>
                          <tr class="intro-x">
                            <td class="w-40">
                              <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-5.jpg" title="Uploaded at 17 August 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-7.jpg" title="Uploaded at 17 August 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                  <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 17 August 2021">
                                </div>
                              </div>
                            </td>
                            <td>
                              <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                              <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                            </td>
                            <!-- <td class="text-center">50</td> -->
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
                    <!-- BEGIN: Pagination -->

                    <!-- END: Pagination -->
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
            </div>
            <div class="mt-3">
              <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
                      <div class="text-right mt-5">
                          <button type="button" class="btn btn-info w-24 mr-1 float-left">Edit</button>
                          <button type="button" class="btn btn-danger w-24 mr-1">Cancel</button>
                          <button type="button" class="btn btn-primary w-24">Save</button>
                      </div>
                    </div>
                  </div>
            </div>

          </div> <!-- -->
        </div>
        <!-- END: Form Layout -->
      </div>
    </div>
  </div>
  <!-- END: Content -->
  </div>
  @include('backend.script')
</body>

</html>

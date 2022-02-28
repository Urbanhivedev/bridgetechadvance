
<!DOCTYPE html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>URBANHIVE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico" />
    
  <link rel="stylesheet" href="../free/assets/css/maicons.css">

<link rel="stylesheet" href="../free/assets/css/bootstrap.css">

<link rel="stylesheet" href="../free/assets/vendor/owl-carousel/css/owl.carousel.css">

<link rel="stylesheet" href="../free/assets/vendor/animate/animate.css">

<link rel="stylesheet" href="../free/assets/css/theme.css">
  </head>
  <body>
    <div class="container-scroller">
                  
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home mr-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white mr-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      @include('user.navbar')
      <!-- partial -->
      @include('user.sidebar')
        <!-- partial -->
        @include('user.freetutorial_content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('user.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('user.script')
    <!-- End custom js for this page -->
  </body>

</html>

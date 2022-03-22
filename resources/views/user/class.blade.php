
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 14:55:18 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>URBANHIVE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<!-- dagogo's compartmentalized css styles -->
<link rel="stylesheet" href="css/developerlist.css">
<link rel="stylesheet" href="css/calendarbookings.css">
<link rel="stylesheet" href="css/bookings.css">
<!-- dagogo's compartmentalized css styles -->

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
        @include('user.class_content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            <!-- footer was here -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    
    </div>
    <!-- @include('user.footer') I COMMENTED OUT THE FOOTER FOR NOW CUZ IT IS IN THE MIDDLE OF THE PAGE FOR SOME REASON -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('user.script')
    <!-- End custom js for this page -->
    
     <script>
     window.onLoad = function(){
     
     let chosenDay = " "
     let chosenTime = " "
     
      function setDay(day){
         chosenDay = day 
         return;
      }

      function setTime(time){
         chosenTime = time 
         return;
      }

    let monday = document.querySelector("#monday");
    let tuesday = document.querySelector("#tuesday");
    let wednesday = document.querySelector("#wednesday");
    let thursday = document.querySelector("#thursday");
    let friday = document.querySelector("#friday");

    let time = document.querySelector(".time");
    
    let developerlist = document.querySelector("#developerList");
     let personal = document.querySelector("#personal");
   
     


     monday.addEventListener("click", setDay(monday[0].id));
     tuesday.addEventListener("click", setDay(tuesday[0].id));
     wednesday.addEventListener("click", setDay(wednesday[0].id));
     thursday.addEventListener("click", setDay(thursday[0].id));
     friday.addEventListener("click", setDay(friday[0].id));

     personal.style.display = "none"



     if(chosenDay !== " " /*&& chosenTime !== " " */){
      
      developerlist.style.display = "none"
      personal.style.display = "block"   

     } 
    
    }

     </script>




  </body>

 

<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 14:55:28 GMT -->
</html>

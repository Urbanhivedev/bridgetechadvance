      <div class="container-fluid page-body-wrapper " style="position:absolute !important; top:-5% !important;left:-2% !important; ">
        <!-- partial:partials/_sidebar.html --> <!-- come check if you absolutely need this position absolute ,or you cna get the sidebar to hit the top another way -->
        <nav  class="sidebar sidebar-offcanvas" id="sidebar" style="background:black !important;color:white !important;">
          <ul class="nav">

          <li class="nav-item d-flex align-items-center justify-content-center;" style="background:black !important;color:white !important;" > 
          <div  class=" text-center navbar-brand-wrapper " style=" background:black !important;width:259px;"> <!-- d-flex align-items-center justify-content-center;  -->
          <a class="navbar-brand brand-logo" href="index-2.html"><img src="admin/assets/images/bridgetechlogo.png"   style="width:150px;height:165px;padding-top:8px;" alt="logo" /></a>
          <!-- <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="admin/assets/images/bridgetechlogo.png"  style="width:60px;height:60px;" alt="logo" /></a> -->
        </div>
          </li> 

            <li class="nav-item nav-profile" style="display:none;">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                <img src="admin/assets/images/donaldglover.jpg"alt="profile-pic">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">URBAN HIVE</span>
                  <span class="text-secondary text-small">TECHNOLOGY</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>

            <li class="nav-item" style="background:black !important;color:white !important; height:70px;" >
            <!-- I DID THIS LIST ITEM , JUST TO PUT SOME SPACE BETWEEN LOGO AND ITEMS -->
           </li>


            <li class="nav-item" style="background:black !important;color:white !important;" >
              <a class="nav-link" > <!-- href="{{ url('user_student')}}" -->
                <span class="menu-title" style="color:white !important; font-size:28px;">Dashboard</span>
                
              </a>
            </li>


            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link"> <!-- href="{{ url('user_student')}}" -->
                <span style="color:white !important; font-size:24px;" class="menu-title ">Coding</span>
                
              </a>
            </li>


       
            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link" href="{{ url('user_student')}}">
                <span class="menu-title ml-5" style="color:white !important;">Sessions</span>
                <i class="mdi mdi-video menu-icon"></i>
              </a>
            </li>

            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link" href="{{ url('student_class')}}">
                <span class="menu-title ml-5" style="color:white !important;">Book Dev</span>
                <i class="mdi mdi-calendar menu-icon"></i>
              </a>
            </li>
<!--

           <li class="nav-item" style="background:black !important;color:white !important;"> 
              <a class="nav-link" >  href="{{ url('user_student')}}"
                <span class="menu-title" style="color:white !important;font-size:24px;">Match</span> 
                
              </a>
            </li>

            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link">  href="{{ url('user_student')}}" 
                <span class="menu-title ml-5" style="color:white !important;">My Profile</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>

            
            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link" >  href="{{ url('user_student')}}" 
                <span class="menu-title ml-5" style="color:white !important;">Candidates</span>
                <i class="mdi mdi-check-all menu-icon"></i>
              </a>
            </li>


            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link" >  href="{{ url('user_student')}}" 
                <span class="menu-title ml-5" style="color:white !important;">Inbox</span>
                <i class="mdi mdi-gmail menu-icon"></i>
              </a>
            </li> -->

            <li class="nav-item" style="background:black !important;color:white !important;">
              <a class="nav-link" > <!-- href="{{ url('user_student')}}" -->
                <span class="menu-title " style="color:white !important;font-size:24px;">Settings</span>
                
              </a>
            </li>


          </ul>
        </nav>
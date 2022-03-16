
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  <!-- alert alert-success -->
     @endif
         
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-calendar"></i>
                </span> Book A Class
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            
            <div class="widgetDivider">
            <div class = "listContainer mt-0 p-0"> <!--list container starting -->
           <div class="widgetSmTitle"> Available Developers</div>
          <ul class="widgetSmList" id="developerList">
 <!-- 1 -->      <li class="widgetSmListItem">
            
            <div class="widgetSmUser ml-4">
           
            <img src="/image/headshot-for-startup.webp" alt="profile pic" class="devAvatar" />
             <span class="widgetSmUsername"> Olanrewaju Kabir</span>
             <span class="widgetSmUserTitle"> Php developer, MySQL ,CI/CD</span>
           
            </div>
       <div class=" d-flex flex-column "> 
        
  <!-- Day Select -->       
     <div class=" d-flex p-2 flex-row flex-wrap justify-content-between align-items-start"> 
      
     <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="monday">
               Monday 
          </span>

          <span class="w-23  m-1" style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="tuesday">
               Tuesday
          </span>

          <span class="w-23  m-1" style="background-color:grey;color:white;padding:10px;border-radius:3px;"  id="wednesday">
               Wednesday
          </span>

          <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="thursday">
               Thursday
          </span>
          
          <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="friday">
               Friday
          </span>
     </div>  <!--widget Sm Day select ending -->

      <br>
      <hr/>
      <br>

 <!-- time select -->     
    <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start">
      
  
    @foreach($tst as $apps)
    <span class="w-23 m-1 time" >
             <button class=" btn btn-dark">
               {{$apps->time}} 
               </button>
          </span>      
      @endforeach

  
    <!--
     
    <span class="w-23 m-1" >
             <button class=" btn btn-dark">
               Monday 
               </button>
          </span>

          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               tuesday
               </button>
          </span>

          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>

          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>
          
          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>

          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>
          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>
          <span class="w-23 m-1" >
          <button class=" btn btn-dark">
               Wednesday
               </button>
          </span>
-->

          </div>   <!-- widget Sm Time select ending -->

      </div> 


          </li> <!-- widget Sm List item ending -->


 <!-- 2 -->     <li class="widgetSmListItem">
            
            <div class="widgetSmUser ml-4">
           
           <img src="/image/Jonathan-Headshot.jpg" alt="profile pic" class="devAvatar" />
            <span class="widgetSmUsername"> Dagogo Uranta</span>
            <span class="widgetSmUserTitle"> Front end developer, Node Js ,UI/UX</span>
          
           </div>
      <div class=" d-flex flex-column "> 
       
 <!-- Day Select -->       
    <div class=" d-flex p-2 flex-row flex-wrap justify-content-between align-items-start"> 
     
    <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="monday">
              Monday 
         </span>

         <span class="w-23  m-1" style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="tuesday">
              Tuesday
         </span>

         <span class="w-23  m-1" style="background-color:grey;color:white;padding:10px;border-radius:3px;"  id="wednesday">
              Wednesday
         </span>

         <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="thursday">
              Thursday
         </span>
         
         <span class="w-23  m-1"  style="background-color:grey;color:white;padding:10px;border-radius:3px;" id="friday">
              Friday
         </span>
    </div>  <!--widget Sm Day select ending -->

     <br>
     <hr/>
     <br>

<!-- time select -->     
   <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start">
     
 
   @foreach($tst as $apps)
   <span class="w-23 m-1" >
            <button class=" btn btn-dark">
              {{$apps->time}} 
              </button>
         </span>      
     @endforeach

 
  
         </div>   <!-- widget Sm Time select ending -->

     </div> 


         </li> <!-- widget Sm List item ending -->


          </ul>
            
           </div> <!--list container ending -->
  <!-- calendar container ending -->
           </div>  <!--widget Divider ending -->

           

    <form class="row g-3" action="{{ url('booking_class')}}"  id="personal" style="display:none" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">FirstName </label>
    <input type="text" name="firstname" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">LastName</label>
    <input type="text" name="lastname" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="inputAddress" placeholder="Email">
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="Phone">
</div> 

<div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
  <label for="inputAddress2" class="form-label">Courses</label>
            <select name="course" id="departement" class="custom-select">
              <option value="">Courses </option>
              <option value="Frontend">Frontend </option>
              <option value="Backend">Backend </option>
              <option value="Mobile App Developer">Mobile App</option>
            </select>
 </div>
  <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
  <label for="inputAddress2" class="form-label">Develolpers</label>
            <select name="developer" id="departement" class="custom-select">
            <option value="">Developers</option>
              <option value="Frontend Developer">Olanrewaju Kabir Backend Developer</option>
              <option value="Backend Developer">Dagogo Uranta Frontend Develper</option>
              <option value="Mobile App Developer">Mobile App Developer</option>
            </select>
 </div>
          
<div class="col-6">
    <label for="inputAddress2" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" id="inputAddress2" placeholder="Message">
</div> 
<div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">

          <label for="inputAddress2" class="form-label">Class Timetable</label>
            <select name="time" id="departement" class="custom-select">
            <option value="">Time</option>
            @foreach($tst as $apps)
              <option value="{{$apps->time}}">{{$apps->time}}</option>
              @endforeach
            
            </select>    
 </div> 

  <div class="col-12">
    <button  style="background-color:black" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>  



  
          
              </div>
            </div>
         </div> 
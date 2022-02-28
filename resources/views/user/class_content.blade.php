<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     @endif
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
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
                

    <form class="row g-3" action="{{ url('booking_class')}}" method="POST" enctype="multipart/form-data">
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
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>   
          
          
              </div>
            </div>
          </div>
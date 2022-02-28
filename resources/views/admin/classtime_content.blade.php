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
                </span> Time Table
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
                

    <form class="row g-3" action="{{ url('class_time_table')}}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Time Table </label>
    <input type="text" name="time" class="form-control" id="inputEmail4">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
         
          
              </div>
            </div>
          </div>
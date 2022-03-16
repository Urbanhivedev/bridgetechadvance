
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Students
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Course</th>
      <th scope="col">Details</th>
      <th scope="col">image</th>

    </tr>
  </thead>
  <tbody> 
    <tr>
    @foreach($developer as $dev)

      <th scope="row">1</th>
     <td>{{$dev->firstname}}</td>
      <td>{{$dev->lastname}}</td>
      <td>{{$dev->course}}</td>
      <td>{{$dev->message}}</td>
      <td>{{$dev->image}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
                   
        
      </div>
            </div>
          </div>
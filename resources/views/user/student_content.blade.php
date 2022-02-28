
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
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Course</th>
      <th scope="col">Developer</th>
      <th scope="col">Date</th>
      <th scope="col">User</th>

    </tr>
  </thead>
  <tbody> 
    <tr>
    @foreach($book as $app)

      <th scope="row">1</th>
     <td>{{$app->firstname}}</td>
      <td>{{$app->lastname}}</td>
      <td>{{$app->email}}</td>
      <td>{{$app->phone}}</td>
      <td>{{$app->course}}</td>
      <td>{{$app->developer}}</td>
      <td>{{$app->date}}</td>
      <td>{{$app->user_id}}</td>


    </tr>
    @endforeach
  </tbody>
</table>
                   
        
      </div>
            </div>
          </div>
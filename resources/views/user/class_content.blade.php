 

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
             
         <!-- THE STUFF BELOW IS NOT NEEDED CUZ IT DOES NOT CORRESPOND WITH THE FIGMA, HENCE WHY IT IS COMMENTED OUT
                <span class="page-title-icon bg-gradient-primary text-white mr-2 mt-6">
                  <i class="mdi mdi-calendar"></i>
                </span> Book A Class
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav> -->
            </div>

            
        <!--    <div class="widgetDivider " > the things in the div below ,make them into one column for small screens with developer pics on top -->
            <div  style="margin-top:5%; " class = "listContainer  p-0"> <!-- mt-0 list container starting -->
           <div class="widgetSmTitle" style="font-family:Lato"> Pick a Time and Date for a Developer</div>

          <ul class="widgetSmList" id="developerList" >
 <!-- 1 -->      <li class="widgetSmListItem" >
            
            <div class="widgetSmUser ml-4">
           
            <img src="/image/headshot-for-startup.webp" alt="profile pic" class="devAvatar" />
             <span class="widgetSmUsername"> Olanrewaju Kabir</span> 
             <span class="widgetSmUserTitle"> Php developer, MySQL ,CI/CD</span>
           
            </div>

           
       <div class=" d-flex flex-column "> 
        
  <!-- Day Select -->       
     <div class=" d-flex p-2 flex-row flex-wrap justify-content-between align-items-start daysMonitor"> 
      
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
    <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start clickMonitor">
      
  
    @foreach($tst as $apps)
    <span class="w-23 m-1 time timeslot" >
             <button class=" btn btn-dark ">
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
    <div class=" d-flex p-2 flex-row flex-wrap justify-content-between align-items-start daysMonitor"> 
     
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
   <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start clickMonitor">
     
 
   @foreach($tst as $apps)
   <span class="w-23 m-1 time timeslot" >
            <button class=" btn btn-dark ">
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
         <!--  </div>  widget Divider ending -->

           

    <form class="row g-3" action="{{ url('booking_class')}}"  id="personal"  style="display:none" method="POST" enctype="multipart/form-data">  <!-- I PUT DISPLAY NONE CUZ I WANT TO MAKE IT ACTIVE WITH JAVASCRIPT, ONLY AFTER THEY HAVE PICKED THE DEV THEY WANT   -->
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

<!-- <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
  <label for="inputAddress2" class="form-label">Courses</label>
            <select name="course" id="department" class="custom-select">
              <option value="">Courses </option>
              <option value="Frontend" selected = <?php ?> >Frontend </option>
              <option value="Backend" selected = <?php ?> >Backend </option>
              <option value="Mobile App Developer" selected = <?php ?> >Mobile App</option>
            </select>
 </div> -->
 
 <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
  <label for="inputAddress2" class="form-label">Develolpers</label>
            <select name="developer" id="dev-name" class="custom-select">
              <option value="">Developers</option>
              <option value="Backend Developer" selected = <?php ?> >Olanrewaju Kabir Backend Developer</option>
              <option value="Frontend Developer" selected = <?php ?>>Dagogo Uranta Frontend Develper</option>
              <option value="Mobile App Developer" selected = <?php ?> >Mobile App Developer</option>
            </select>
 </div>
          
<div class="col-6">
    <label for="inputAddress2" class="form-label">Date</label>
    <input type="date" name="date" class="form-control day-select" id="inputAddress2" placeholder="Message">
</div> 
<div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">

          <label for="inputAddress2" class="form-label">Class Timetable</label>
            <select name="time" id="departement" class="custom-select time-select">
            <option value=" ">Time</option>
            @foreach($tst as $apps)
              <option value="{{$apps->time}}">{{$apps->time}}</option>
              @endforeach
            
            </select>    
 </div> 

  <div class="col-12">
    <button  style="background-color:black" type="submit" class="btn btn-primary">Proceed to Payment</button>
  </div>
</form>  



  
          
              </div>


              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  <!-- alert alert-success -->
     @endif





            </div> 

            <script>
 let devs = document.querySelector('.listContainer');
 let slots=  document.querySelectorAll('.timeslot');
 let deetsForm =  document.querySelector('#personal');
 let slotParents =  document.querySelectorAll('.clickMonitor'); 
 let  daysParents = document.querySelectorAll('.daysMonitor'); 
 
 let devOptions = document.getElementById('dev-name');
 let options = document.getElementById('dev-name').options;
 let selectedDev = '';

 
 let chosenTime =  document.querySelector('.time-select');
 let pickedDay = " ";
 let chosenDay =  document.querySelector('.day-select');


 function hideDevs() {
  if(pickedDay !== " "){
  devs.style["display"]= "none";
  deetsForm.style["display"]= "inline";
  }
 }


 function selectDay(event){
      pickedDay = event.target.textContent.trim()

      /*THIS IS TO CHANGE THE DATE ACCORDING TO THE DAY YOU PICKED */
      /*stating my variables first */
      var today = new Date();
      
      daysOfWeek = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

   
if(daysOfWeek.indexOf(pickedDay)  <= today.getDay()){

   var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()+7-(today.getDay()- daysOfWeek.indexOf(pickedDay)));



var day = ("0" + nextweek.getDate()).slice(-2);
var month = ("0" + (nextweek.getMonth() + 1)).slice(-2);

var oneWeekLater = nextweek.getFullYear()+"-"+(month)+"-"+(day) ;

chosenDay.value = oneWeekLater;
  }else{

     var appointmentDay  = new Date(today.getFullYear(), today.getMonth(), today.getDate() +(daysOfWeek.indexOf(pickedDay) - today.getDay()));



var day = ("0" + appointmentDay.getDate()).slice(-2);
var month = ("0" + (appointmentDay.getMonth() + 1)).slice(-2);

var appointmentFullDate = appointmentDay.getFullYear()+"-"+(month)+"-"+(day) ;

chosenDay.value = appointmentFullDate;

  }

  console.log(chosenTime.options.selectedIndex)

if (chosenTime.options.selectedIndex === 0){
  window.alert('selected a day. Please choose a time period.')
  
  }
  else if(chosenTime.options.selectedIndex  !== 0){
     hideDevs()
  }
   
 }


 function fillInDev(event){

     
 
  if(pickedDay === " "){
       window.alert("Please pick a day !") 
       
     }
  
    /*THIS IS FOR PUTTING THE APPROPRIATE TIME IN THE FORM  */
    chosenTime.value = event.target.textContent.trim()  /*you should use event.target.value not text content */
    
  console.log(chosenTime.value)
  console.log(event.target.textContent.trim())

  /*why two previous siblings to get to the developers name ? it dont make no sense */
  selectedDev = event.target.parentElement.parentElement.parentElement.previousSibling.previousSibling.childNodes[3].textContent

  if(selectedDev.trim() === options[1].textContent.toString().substring(0,16) ){
                                                 /*your should use a regular expresion ,youre supposed to find a way to vary it based on who is selected */
     devOptions.value = options[1].value          /*this hard coding wont work when we have more devs */
     
  }else if ( selectedDev.trim() === options[2].textContent.toString().substring(0,13) ){
     devOptions.value = options[2].value   
  }

  console.log(chosenTime.options.selectedIndex)
  
  
 }

  //if (/*the element that was clicked's parent elements child is Dagogo and the day has been picked*/){
   /*add Dagogo, the chosen day and the chosen timeslot into */
  //}

 


for(let i=0;i<slots.length;i++){
 slots[i].addEventListener("click", hideDevs);
 
}

for(let i=0;i<slotParents.length;i++){
     
slotParents[i].childNodes.forEach((item) => {item.addEventListener("click", fillInDev)} ) 

}

for(let i=0;i<daysParents.length;i++){
     
     daysParents[i].childNodes.forEach((item) => {item.addEventListener("click", selectDay)} ) 
     
     }
console.log(chosenTime.options.selectedIndex)



</script>



         </div> 
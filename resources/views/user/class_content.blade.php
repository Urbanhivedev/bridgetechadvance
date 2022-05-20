 

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
             
         <!-- THE STUFF BELOW IS NOT NEEDED CUZ IT DOES NOT CORRESPOND WITH THE FIGMA, HENCE WHY IT IS COMMENTED OUT
                <span class="page-title-icon bg-gradient-primary text-white mr-2 mt-6">
                  
                </span> Book A Class
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview
                  </li>
                </ul>
              </nav> -->
            </div>

       
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  <!-- alert alert-success -->
             @endif




            
        <!--    <div class="widgetDivider " > the things in the div below ,make them into one column for small screens with developer pics on top -->
            <div  style="margin-top:5%; " class = "listContainer  p-0"> <!-- mt-0 list container starting -->
           <div class="widgetSmTitle" style="font-family:Lato"> Pick a Time and Date for a Developer</div>

          <ul class="widgetSmList" id="developerList" >
 <!-- 1 -->      <li class="widgetSmListItem" >
            
            <div class="widgetSmUser ml-4">
           
            <img src="/image/ola-profile2.png" alt="profile pic" class="devAvatar" />
             <span class="widgetSmUsername"> Olanrewaju Kabir</span> 
             <span class="widgetSmUserTitle"> Php developer, MySQL ,CI/CD</span>
           
            </div>

           
       <div class=" d-flex flex-column "> 
        
  <!-- Day Select -->       
     <div class=" d-flex p-2 flex-row flex-wrap justify-content-start align-items-start daysMonitor"> 

     <input type="date"  class="w-65  m-1"  value="{{date('Y-m-d',strtotime('+1 day')); }}"   min="{{date('Y-m-d'); }}" max="{{date('Y-m-d',strtotime('+3 months')); }}"   style="border-radius:6px;"/> 
      
   <!--  <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;" id="monday">
     
         Monday
        
          </span>

          <span class="w-23  m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;" id="tuesday">
      
          Tuesday
      
          </span>

          <span class="w-23  m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;"  id="wednesday">
       
         Wednesday
       
          </span>

          <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;" id="thursday">
     
            Thursday
      
          </span> -->
          
          <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;" id="friday">
        <!--  <button class=" btn btn-dark " style="color:black!important"> -->
         Choose Date
      <!--    </button> -->
          </span>
     </div>  <!--widget Sm Day select ending -->

      <br>
      <hr/>
      <br>

 <!-- time select -->     
    <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start clickMonitor">
      
  
    @foreach($tst as $apps)
    <span class=" w-25 m-1 time timeslot"  style="text-align:center;background-color:black!important;color:white !important;padding:10px;cursor:pointer !important;border-radius:5px;">
             <!-- <button class=" btn btn-dark " style="background-color:black!important"> -->
               {{$apps->time}} 
             <!--  </button> -->
          </span>      
      @endforeach

  
    

          </div>   <!-- widget Sm Time select ending -->

      </div> 


          </li> <!-- widget Sm List item ending -->


 <!-- 2 -->     <li class="widgetSmListItem">
            
            <div class="widgetSmUser ml-4">
           
           <img src="/image/gray copy-min.jpg" alt="profile pic" class="devAvatar" />
            <span class="widgetSmUsername"> Dagogo Uranta</span>
            <span class="widgetSmUserTitle"> Front end developer, Node Js ,UI/UX</span>
          
           </div>
      <div class=" d-flex flex-column "> 
       
 <!-- Day Select -->       
    <div class=" d-flex p-2 flex-row flex-wrap justify-content-start align-items-start daysMonitor"> 

    <input type="date"  class="w-65  m-1"  value="{{date('Y-m-d',strtotime('+1 day')); }}"  min="{{date('Y-m-d'); }}" max="{{date('Y-m-d',strtotime('+3 months')); }}"   style="border-radius:6px;"/> 
     
   <!-- <span class="w-23 m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="monday">
  
         Monday
       
         </span>

         <span class="w-23 m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="tuesday">
       
         Tuesday
       
         </span>

         <span class="w-23 m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;"  id="wednesday">
    
         Wednesday
     
         </span>

         <span class="w-23 m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="thursday">
     
          Thursday
    
         </span> -->
         
         <span class="w-23 m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="friday">
     
         Choose Date
      
         </span>
    </div>  <!--widget Sm Day select ending -->

     <br>
     <hr/>
     <br>

<!-- time select -->     
   <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start clickMonitor">
     
 
   @foreach($tst as $apps)
   <span class=" time timeslot w-25 m-1"  style="text-align:center;background-color:black!important;color:white !important;padding:10px; cursor:pointer !important;border-radius:5px;">
           <!-- <button class=" btn btn-dark " style="background-color:black!important"> -->
              {{$apps->time}} 
             <!-- </button> -->
         </span>      
     @endforeach

 
  
         </div>   <!-- widget Sm Time select ending -->

     </div> 


         </li> <!-- widget Sm List item ending -->




          <!-- 1 -->      <li class="widgetSmListItem" >
            
          <div class="widgetSmUser ml-4">
           
           <img src="/image/Jonathan-Headshot.jpg" alt="profile pic" class="devAvatar" />
            <span class="widgetSmUsername"> Abu Bakir </span> 
            <span class="widgetSmUserTitle"> Flutter developer, Dart ,Kotlin </span>
          
           </div>

          
      <div class=" d-flex flex-column "> 
       
 <!-- Day Select -->       
    <div class=" d-flex p-2 flex-row flex-wrap justify-content-start align-items-start daysMonitor"> 
     
       <input type="date"   class="w-65  m-1"  value="{{date('Y-m-d',strtotime('+1 day')); }}" min="{{date('Y-m-d'); }}" max="{{date('Y-m-d',strtotime('+3 months')); }}"   style="border-radius:6px;"/> 

      <!--
          <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="monday">
    
           Monday
      
         </span>

         <span class="w-23  m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="tuesday">
      
         Tuesday
     
         </span>

         <span class="w-23  m-1" style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;"  id="wednesday">
      
        Wednesday
     
         </span>

         <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="thursday">
      
           Thursday
     
         </span> -->
         
         <span class="w-23  m-1"  style="background-color:black;color:white;padding:10px;border-radius:3px;cursor:pointer;" id="friday">
       <!--  <button class=" btn btn-dark " style="color:black!important"> -->
        Choose Day
     <!--    </button> -->
         </span>
    </div>  <!--widget Sm Day select ending -->

     <br>
     <hr/>
     <br>

<!-- time select -->     
   <div class="d-flex p-2 flex-row flex-wrap justify-content-between align-items-start clickMonitor">
     
 
   @foreach($tst as $apps)
   <span class=" w-25 m-1 time timeslot"  style="text-align:center;background-color:black!important;color:white !important;padding:10px;cursor:pointer !important;border-radius:5px;">
            <!-- <button class=" btn btn-dark " style="background-color:black!important"> -->
              {{$apps->time}} 
            <!--  </button> -->
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
    <label for="inputEmail4" class="form-label">First Name </label>
    <input type="text" name="firstname" class="form-control" required id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control"  required id="inputPassword4">
  </div>
  
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="text" name="email" class="form-control"   required id="inputAddress" placeholder="Email">
  </div>

  <div class="col-6">
    <label for="inputAddress2" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" required id="inputAddress2" placeholder="Phone">
</div> 

 <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" style="display:none">
  <label for="inputAddress2" class="form-label">Courses</label>
            <select name="course" id="department" class="custom-select">
              <option value="">Courses </option>
              <option value="see chosen developer" selected >see chosen developer</option>
              <option value="see chosen developer"  >see chosen developer</option>
              <option value="see chosen developer"  >see chosen developer</option>
            </select>
 </div> 
 
 <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
  <label for="inputAddress2" class="form-label">Develolpers</label>
            <select name="developer" id="dev-name" class="custom-select" required>
              <option value="">Developers</option>
              <option value="Backend Developer"  >Olanrewaju Kabir Backend Developer</option>
              <option value="Frontend Developer"  >Dagogo Uranta Frontend Develper</option>
              <option value="Mobile App Developer"  >Abu Bakir Mobile App Developer</option>
            </select>
 </div>
          
<div class="col-6">
    <label for="inputAddress3" class="form-label">Date</label>
    <input type="date" name="date" class="form-control day-select" id="inputAddress3" >
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
       <!-- <a href="https://paystack.com/pay/urbanhive-session-payment" >  <button  style="background-color:black" type="button" class="btn btn-primary">Proceed to Payment</button> </a> -->
    <button  style="background-color:black" type="submit" class="btn btn-primary">Book Now</button>  <!-- this is to add to the database ,figure out how to combine them 
  </div>
</form>   OKAY SO i WANT THIS BUTTON TO REDIRECT TO THE PAYSTACK PAYMENT PAGE AND THEN PASS INFORMATION 
          BACK TO OUR APP AND IT WILL STORE DATA IN THE DATABASE , BASED ON WHAT WAS PASSED BACK AND THEN IT CAN REDIRECT TO THAT SAME PAGE ! -->



  
          
              </div>


             




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

 let selectedDate = document.getElementById("inputAddress3");

 
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
     /* pickedDay = event.target.textContent.trim() */

     pickedDay = event.target.value
     console.log(pickedDay)
     console.log(event.target.value)
      /*THIS IS TO CHANGE THE DATE ACCORDING TO THE DAY YOU PICKED */
      /*stating my variables first */
      var today = new Date();
      
      /*daysOfWeek = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]*/

   
if(/*daysOfWeek.indexOf(pickedDay)*/ new Date(pickedDay)  <= today){

  window.alert('Please choose a day in the future !')
   return; }

   else if (new Date(pickedDay)  >   new Date(today.setMonth(today.getMonth()+3)) ){
    window.alert('Your chosen Day is too far ahead!')
   return; } 
  
  

  /* var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate()+7-(today.getDay()- daysOfWeek.indexOf(pickedDay)));



var day = ("0" + nextweek.getDate()).slice(-2);
var month = ("0" + (nextweek.getMonth() + 1)).slice(-2);

var oneWeekLater = nextweek.getFullYear()+"-"+(month)+"-"+(day) ;

chosenDay.value = oneWeekLater;*/
  else{

    /* var appointmentDay  = new Date(today.getFullYear(), today.getMonth(), today.getDate() +(daysOfWeek.indexOf(pickedDay) - today.getDay()));



var day = ("0" + appointmentDay.getDate()).slice(-2);
var month = ("0" + (appointmentDay.getMonth() + 1)).slice(-2);

var appointmentFullDate = appointmentDay.getFullYear()+"-"+(month)+"-"+(day) ;*/

chosenDay.value = pickedDay;

  }

  console.log(chosenTime.options.selectedIndex)

if (chosenTime.options.selectedIndex === 0){
  window.alert('You have selected a day. Please choose a time period.')
  
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
     
    daysParents[i].childNodes.forEach((item) => {item.addEventListener("change", selectDay)} ) 
     
     }
console.log(chosenTime.options.selectedIndex)



</script>



         </div> 
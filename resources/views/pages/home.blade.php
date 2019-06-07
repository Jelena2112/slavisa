@extends("index")

@section("content")
   <section class="home flex flexCenter">
       <form class="homeForm flex flexCenter">

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">Check-in:</p>
               <input  class="formHome" type="date" name="start" placeholder="check-in date">
           </span>

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">Check-out:</p>
               <input  class="formHome" type="date" name="end">
           </span>

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">For:</p>
               <select class="formHome select">
                   <option value="2">2 persons</option>
                   <option value="3">3 persons</option>
                   <option value="4">4 persons</option>
               </select>
           </span>

           <input class="formHome submit" type="submit">

       </form>

   </section>

@endsection("content")
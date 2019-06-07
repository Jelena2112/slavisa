@extends("index")

@section("content")
   <section class="home flex flexCenter">
       <form class="homeForm flex flexCenter">
           <p class="formHome">Check-in:</p>
           <input  class="formHome" type="date" name="start" placeholder="check-in date">

           <p class="formHome">Check-out:</p>
           <input  class="formHome" type="date" name="end">

           <p class="formHome">For:</p>
           <select class="formHome select">
               <option value="2">2 persons</option>
               <option value="3">3 persons</option>
               <option value="4">4 persons</option>
           </select>

           <input class="formHome submit" type="submit">

       </form>

   </section>

@endsection("content")
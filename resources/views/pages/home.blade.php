@extends("index")

@section("content")
   <section class="home flex flexCenter">
       <form class="homeForm flex flexCenter">
           <p class="formHome">From:</p>
           <input  class="formHome" type="date" name="start">

           <p class="formHome">To:</p>
           <input  class="formHome" type="date" name="end">

           <p class="formHome">For:</p>
           <select class="formHome">
               <option value="2">2 persons</option>
               <option value="3">3 persons</option>
               <option value="4">4 persons</option>
           </select>

       </form>

   </section>




@endsection("content")
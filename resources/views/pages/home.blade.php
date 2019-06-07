@extends("index")

@section("content")
   <section class="home flex flexCenter">
       <form class="homeForm flex flexCenter">

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">Check-in:</p>
               <input  class="formHome inputDate" type="date" name="start" placeholder="check-in date">
           </span>

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">Check-out:</p>
               <input  class="formHome inputDate" type="date" name="end">
           </span>

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">For:</p>
               <select class="formHome select">
                   @for($i = 1; $i < 11; $i++)
                       <option value="{{ $i }}">{{ $i }} people</option>
                   @endfor
               </select>
           </span>

           <input class="formHome submit" type="submit">

       </form>

   </section>

@endsection("content")
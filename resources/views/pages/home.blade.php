@extends("index")

@section("content")
   <section class="home flex flexCenter">
       <form class="homeForm flex flexCenter">

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">Check-in: </p>
               <input  class="formHome inputDate" type="date" name="dates" value="01/06/2019- 15/06/2019">

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

    @include("partials.why_us")

    @include("partials.apartments")

   @include("partials.services")

   @include("partials.call_now")

   @include("partials.map")

@endsection("content")
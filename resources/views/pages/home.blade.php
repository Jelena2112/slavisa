@extends("index")

@section("content")
   <section class="home flex flexCenter">

       <form class="homeForm flex flexCenter">

           <span class="wrapForm date flex flexCenter">
               <p class="formHome text">Check-in: </p>
               <input class="datepicker formHome text" type="text" name="datetimes" value="Toma" />
           </span>

           <span class="wrapForm flex flexCenter">
               <p class="formHome text">For:</p>
               <select class="formHome select">
                   @for($i = 1; $i < 4; $i++)
                       <option value="{{ $i }}">{{ $i }} adults</option>
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
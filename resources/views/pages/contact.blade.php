@extends("index")

@section("content")

    <section class="contactPage flex flexCenter">

        <article class="contactRules flex flexCenter">
            <h2 class="rulesHeader">House Rules</h2>

            <p class="input text1"><i class="fas fa-clock rulesIcons"></i>Check-in: 14:00-23:00</p>
            <p class="input text1"><i class="fas fa-clock rulesIcons"></i>Check-out: 07:00-10:00</p>

            <p class="input text1"><i class="fas fa-info-circle rulesIcons"></i>Cancellation/
                prepayment:Cancellation and prepayment policies vary according to accommodation type.</p>

            <p class="input text1"><i class="fas fa-user-alt rulesIcons"></i>Age restriction:No age restriction for check-in. (Only children 16 and older are allowed)</p>

            <p class="input text1"><i class="fas fa-bed rulesIcons"></i>Children 16 and older are allowed at hotel.</p>

            <p class="input text1"><i class="fas fa-paw rulesIcons"></i>Pets are not allowed.</p>

            <p class="input text1"><i class="fas fa-smoking-ban rulesIcons"></i>No smoking.</p>

            <p class="input text1"><i class="far fa-credit-card rulesIcons"></i>We accept only cash payments.</p>

        </article>

        <form class="mainForm flexCenter flex">
            <p class="input text">Name:</p>
            <input class="input" type="text" placeholder="Your first and last name">

            <p class="input text">Email:</p>
            <input class="input" type="email" placeholder="Your email address">


            <p class="input text">Check-in: </p>
            <input class="datepicker text input" type="text" name="datetimes" value="Toma" />

            <p class="input text">For:</p>
            <select class="input">
                @for($i = 1; $i < 4; $i++)
                    <option value="{{ $i }}">{{ $i }} adults</option>
                @endfor
            </select>

            <p class="input text">Apartment</p>
            <select class="input">
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
                <option value="Delux Studio sa King-Sajz Krevetom">Delux Studio sa King-Sajz Krevetom</option>
            </select>

            <input type="submit" class="input submit">

        </form>



    </section>




    @include("partials.map")


@endsection("content")

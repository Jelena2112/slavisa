@extends("index")

@section("content")

    <section class="contactPage flex flexCenter aboutPage">

        <article class="servicesSection servicesMain flex contactRules aboutPage about50">

            <h1 class="servicesHeader">OUR SERVICES</h1>

            <p class="servicesText">CASTLE “KASTIL JELA” in Milna provides adults-only accommodation with a garden, a bar and a shared lounge. 2.9 km from Lucice Bay and 29 km from Blaca Desert, the hotel offers a private beach area. The air-conditioned rooms provide a garden view and come with a desk and free WiFi.</p><br>

            <p class="servicesText">All guest rooms at the hotel come with a seating area, a flat-screen TV with satellite channels and a private bathroom with a hair dryer and a bath. All units will provide guests with a fridge.</p><br>

            <p class="servicesText">CASTLE “KASTIL JELA” offers a terrace. The area is popular for cycling, and bike hire is available at the accommodation.</p><br>

            <p class="servicesText">Staff speak Italian, English, German and Croatian at the 24-hour front desk.</p><br>

            <p class="servicesText">Top location: Highly rated by recent guests (9.4).</p>



            <a class="about link" href="#">BOOK NOW</a>

        </article>

        <article class="contactRules flex flexCenter aboutPage about50">
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

        <article class="apArticle flex about100">

            <p class="apText"> <i class="fas fa-shower"></i>Private bathroom</p>
            <p class="apText"> <i class="fas fa-wifi"></i> Free Wifi</p>
            <p class="apText"> <i class="fas fa-parking"></i>Free parking</p>
            <p class="apText apTextBold"> <i class="fas fa-umbrella-beach"></i> Adriatic Sea - 0.1km</p>
            <p class="apText apTextBold"> <i class="fas fa-plane"></i> Split Airport - 26km</p>

            <p class="apText apTextBold">Closest landmarks:</p>

            <div class="apDiv flex">

                <ul class="apUl">
                    <li class="apLi apText">Lucice Bay - 2.1km</li>
                    <li class="apLi apText">Senjkovic Winery - 7.3km</li>
                    <li class="apLi apText">Blaca Desert - 8.4km</li>
                    <li class="apLi apText">Murvica Beach - 13.7km</li>
                    <li class="apLi apText">Olive Oil Museum Brac - 13.9</li>
                    <li class="apLi apText">Gazul - 15.2km</li>
                    <li class="apLi apText">Vidova gora - 15.3km</li>
                    <li class="apLi apText">Fortica Fortress - 17km</li>
                    <li class="apLi apText">Bishop's Palace in Hvar - 17.2km</li>
                    <li class="apLi apText">St. Stephen's Square in Hvar -17.2km</li>

                </ul>

                <p class="apText apTextBold">Most popular landmarks:</p>

                <ul class="apUl">
                    <li class="apLi apText">Stipanska Beach - 18.8km</li>
                    <li class="apLi apText">Bacvice Beach - 19.5km</li>
                    <li class="apLi apText">Znjan Beach - 19.7km</li>
                    <li class="apLi apText">Jezinac Beach - 19.8km</li>
                    <li class="apLi apText">Kastelet Beach - 19.8km</li>
                </ul>

                <ul class="apUl">
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                    <li class="apLi apText">list</li>
                </ul>

            </div>

        </article>



    </section>

    @include("partials.map")

@endsection("content")
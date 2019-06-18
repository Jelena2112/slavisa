@extends("index")

@section("content")

    <section class="contactPage flex flexCenter aboutPage">

        <article class="servicesSection servicesMain flex contactRules aboutPage margin80">

            <h1 class="servicesHeader">OUR SERVICES</h1>

            <p class="servicesText">CASTLE “KASTIL JELA” in Milna provides adults-only accommodation with a garden, a bar and a shared lounge. 2.9 km from Lucice Bay and 29 km from Blaca Desert, the hotel offers a private beach area. The air-conditioned rooms provide a garden view and come with a desk and free WiFi.</p><br>

            <p class="servicesText">All guest rooms at the hotel come with a seating area, a flat-screen TV with satellite channels and a private bathroom with a hair dryer and a bath. All units will provide guests with a fridge.</p><br>

            <p class="servicesText">CASTLE “KASTIL JELA” offers a terrace. The area is popular for cycling, and bike hire is available at the accommodation.</p><br>

            <p class="servicesText">Staff speak Italian, English, German and Croatian at the 24-hour front desk.</p><br>

            <p class="servicesText">Top location: Highly rated by recent guests (9.4).</p>



            <a class="about link" href="#">BOOK NOW</a>

        </article>

        <article class="infoRules flex flexCenter contactPage">
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

        <article class="apArticle flex  flexCenter about100 row">

            <div class="infoDiv">

                <p class="apText blue"> <i class="fas fa-shower rulesIcons colorW"></i>Private bathroom</p>
                <p class="apText blue"> <i class="fas fa-wifi rulesIcons colorW"></i>Free Wifi</p>
                <p class="apText blue"> <i class="fas fa-parking rulesIcons colorW"></i>Free parking</p>
                <p class="apText blue"> <i class="fas fa-umbrella-beach rulesIcons colorW"></i>Adriatic Sea - 0.1km</p>
                <p class="apText blue"> <i class="fas fa-plane rulesIcons colorW"></i>Split Airport - 26km</p><br>

                <p class="apText apTextBold">Most popular landmarks:</p>

                <ul class="infoUl apText">
                    <li class="apLi apText infoLi">Stipanska Beach - 18.8km</li>
                    <li class="apLi apText infoLi">Bacvice Beach - 19.5km</li>
                    <li class="apLi apText infoLi">Znjan Beach - 19.7km</li>
                    <li class="apLi apText infoLi">Jezinac Beach - 19.8km</li>
                    <li class="apLi apText infoLi">Kastelet Beach - 19.8km</li>
                </ul>

            </div>

            <div class="infoDiv">

                <p class="apText apTextBold">Closest landmarks:</p>

                <ul class="infoUl apText">
                    <li class="apLi apText infoLi">Lucice Bay - 2.1km</li>
                    <li class="apLi apText infoLi">Senjkovic Winery - 7.3km</li>
                    <li class="apLi apText infoLi">Blaca Desert - 8.4km</li>
                    <li class="apLi apText infoLi">Murvica Beach - 13.7km</li>
                    <li class="apLi apText infoLi">Olive Oil Museum Brac - 13.9</li>
                    <li class="apLi apText infoLi">Gazul - 15.2km</li>
                    <li class="apLi apText infoLi">Vidova gora - 15.3km</li>
                    <li class="apLi apText infoLi">Fortica Fortress - 17km</li>
                    <li class="apLi apText infoLi">Bishop's Palace in Hvar - 17.2km</li>
                    <li class="apLi apText infoLi">St. Stephen's Square in Hvar -17.2km</li>

                </ul>

            </div>

            <div class="infoDiv">

                <p class="apText apTextBold">Restaurants and markets:</p>
                <ul class="infoUl apText">
                    <li class="apLi apText infoLi">Restoran "PALMA" - 1km</li>
                    <li class="apLi apText infoLi">Caffe Bar Fjaka - 1km</li>
                    <li class="apLi apText infoLi">Konzum - 1km</li>
                    <li class="apLi apText infoLi">Market Milna - 1km</li>
                    <li class="apLi apText infoLi">Lidi - 2km</li>

                </ul>
            </div>

        </article>

        <p class="apText apTextBold"> All distances are measured in straight lines. Actual travel distances may vary.</p>

    </section>

    @include("partials.map")

@endsection("content")
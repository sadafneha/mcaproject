@extends('frontend.layouts.default')

@section('content')

  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>To CAPITAL GRILL</span></h1>
          <h2>Delivering great food for more than 3 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('frontendtheme/assets/img/about.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ABOUT OUR RESTAURANT</h3>
            <p class="fst-italic">
            We value teamwork, honesty, community involvement, dedication to the culinary arts, and transparency.”
Breakfast sets are served to the guest with an extensive set selection of modern and classic breakfast options reflecting the Corporate Culture and Standards.
Type of Service Sequences & Styles
Breakfast sets:
1. Continental breakfast set
2. American breakfast set
3. Thai breakfast set
4. Spa breakfast set
5. Japanese breakfast set
6. The Dara Serene breakfast set (signature)
In addition 6 other sets are provided
The Coffee & Tea Service:
Is served freshly brewed to every guest, no thermos or pre-brewed beverages are to be served. For Hotel/Resort, a tea selection within the buffet is applicable.  
Children menu:
A small children menu with the emphasis on “most-popular” is available after breakfast.
Pre-ordered private mini bar items (by the guest in advance) is available through and in coordination with the Sales Department or the Reservations Department of the Hotel/Resort.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Feedback Section ======= -->
    <section id="why-" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Feedback</h2>
          <p>Feedback Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Arundhati</h4>
              <p>Staff was very courteous and understood how to deal with customers very well</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Manaswee</h4>
              <p>I loved the place, location food atmosphere and most importantly the wonderful staff. We are a family of 6 and had breakfast for 5 days in row and honestly i had nothing but good food and great serve</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Ankita</h4>
              <p>We were there for Friday Brunch the service and the food was excellent.The staff there was very friendly and corporative.

            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('frontendtheme/assets/img/menu/lobster-bisque.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> Baby Lobster In White Sauce</a><span>Rs500</span>
            </div>
            <div class="menu-ingredients">
              butter,cheese bread crumb,milk,pepper
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('frontendtheme/assets/img/menu/bread-barrel.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Bread pizza</a><span>Rs350</span>
            </div>
            <div class="menu-ingredients">
              pizza bread,dry spices,cheese,veggies
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('frontendtheme/assets/img/menu/cake.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cakes</a><span>Rs500</span>
            </div>
            <div class="menu-ingredients">
              A delicate  cake served on a chocolate syrup
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('frontendtheme/assets/img/menu/caesar.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Biryani</a><span>Rs750</span>
            </div>
            <div class="menu-ingredients">
              rice,veggies,paneer,spices,mushroom
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('frontendtheme/assets/img/menu/tuscan-grilled.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Grilled</a><span>Rs630</span>
            </div>
            <div class="menu-ingredients">
              grilled chicken with salad,red chilly sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('frontendtheme/assets/img/menu/mozzarella.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>Rs200</span>
            </div>
            <div class="menu-ingredients">
               mozerzarella cheese,butter,spices,bread crumbs
            
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('frontendtheme/assets/img/menu/greek-salad.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Diet Salad</a><span>Rs250</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach,cabbage,tomatoes,and olives,avocado
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('frontendtheme/assets/img/menu/spinach-salad.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>Rs150</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms,boiled egg,and veggies
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('frontendtheme/assets/img/menu/lobster-roll.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>Rs320</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Masala dosa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Dal makhani</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Chicken strip basket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Dabeli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Raj Kachori</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Masala dosa</h3>
                    <p class="fst-italic">Arguably South India’s most renowned culinary export, masala dosas are famous the world over. A sort of Indian pancake, dosas are made from a thin batter consisting of rice, flour and lentils. Making dosas is no easy task, with the batter mixture having to soak in water for at least 24 hours before it can be shaped. Once ready, the batter is ladled onto a hot tava (griddle pan) and shaped in a similar way to how the French would shape a crepe. Traditionally, dosas are served folded in half and stuffed with potatoes. Accompaniments like hot sambar give the dish a spicy edge, and whatever you stuff them with, dosas are sure to provide a tasty yet satisfying meal. 
</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('frontendtheme/assets/img/s1.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dal Makhani</h3>
                    <p class="fst-italic">Most foodies will have heard of or tasted dal, but there’s nothing quite like tasting the original dish in the country where it originated from. Dal is the Hindi word for lentils, and this soup-like delicacy is made by stewing small black lentils for hours on end. Whilst there are  many different varieties of this lentil dish, dal makhani is in a league of its own. It’s considered the best of the best, and is reserved for big events like wedding celebrations. With makhani meaning ‘buttery’ in Hindi, there’s no prizes for guessing how rich and creamy this Indian classic tastes. Head to Punjab, in India’s north, to taste the real deal. 
</p>
                  
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('frontendtheme/assets/img/specials-2.jfif')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Chicken strip basket</h3>
                    <p class="fst-italic">The Chicken Strip Basket—chicken served with french fries, Texas toast, and a choice of sauce—is its signature meal.

Whether or not you tend to order these popular items, it's still fun to see what meals have caught your fellow diners' attention.
</p>
                  
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('frontendtheme/assets/img/specials-3.jfif')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dabeli</h3>
                    <p class="fst-italic">Dabeli Badeli is a snack food having its roots in Kutch. It is a spicy snack prepared as a mixture of special dabeli masala and boiled potatoes which is then put into a burger like a bun also known as 'ladi pav'. The dish is accompanied by different chutneys like garlic, tamarind, date, chilli, etc. The garnishing of roasted peanuts and pomegranate add seven stars to its taste. Served with namkeen, the aroma of spices in Dabeli will surely hook you to a nearby stall, making you drool over this street food dish. 
</p>
                  
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('frontendtheme/assets/img/specials-4.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Raj Kachori</h3>
                    <p class="fst-italic">Nothing can beat the Rajasthan's heat as the huge Bikaneri Kachori. A blast of flavours, this street food dish is stuffed with spicy chutneys and hot gravy. Especially found in Bikaner as the name suggests, if you have it once, you'll never want to leave a chance to have it again. </p>
            
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('frontendtheme/assets/img/specials-5.jpg')}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('frontendtheme/assets/img/event-birthday.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>Rs4000-5000</span></p>
                  </div>
                  <p class="fst-italic">
                  Plan all celebration details which include everything from appetizer trays, main dishes, drink menus, and the overall party layout. You will have the best understanding of guest relationships, so coordinate pre-set seating based on familiarity.
                   </p>


                  <ul>
                    <li><i class="bi bi-check-circled"></i> Deciding When and Where to Have the Birthday Party</li>
                    <li><i class="bi bi-check-circled"></i> Decide on a budget for the party<li>
                    <li><i class="bi bi-check-circled"></i> Create a guest list for the party.</li>
                  </ul>
                  <p>
                  For a child's birthday party, there are many options. Games are great, but they often require supplies, so keep that in mind. You could have a story time, if it goes with the theme. Another idea is to have music playing. You could also hire an entertainer, such as a clown, a magician, or a scientist, if it is in your budget.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('frontendtheme/assets/img/event-private.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>Rs2000-4000</span></p>
                  </div>
                  <p class="fst-italic">
                  Private parties can vary in size. If you’re looking for a larger venue, make sure you check our preferred Calgary venues page. Many of these venues will simplify your private party planning experience.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>Determine your budget</li>

                    <li><i class="bi bi-check-circled"></i> Determine the aim of the event</li>
                    <li><i class="bi bi-check-circled"></i> Determine the food menu</li>
                  </ul>
                  <p>
                  When it comes to club/private parties and their arrangements, Insomnia does with the elegance and felicity of your thoughts. Insomnia just puts your thoughts into action and can bring you the piece of cake which you might have never tasted before. We believe in making your celebrations and parties just like the way you might have dreamt of or may be better.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="{{asset('frontendtheme/assets/img/event-custom.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>Rs4000-4500</span></p>
                  </div>
                  <p class="fst-italic">
                   Fun parties are not always fun to organize. People that plan them for a living know that it is an art. You need to take care of the food, the location, the people, the mood, and, of course, the decorations. No wonder it seems stressful – even the idea of juggling feel stressful. As unbelievable as it sounds, custom party decorations can make your job easier. Sure, you will never be able to please everyone. But we have good news for you — it should not even be your goal.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>A little intention goes a long way</li>
                    <li><i class="bi bi-check-circled"></i> Take care of food and logistic… But don’t overdo it</li>
                    <li><i class="bi bi-check-circled"></i>. Leave them with a little reminder</li>
                  </ul>
                  <p>
                    Of course, you can use all the tools available in your disposal to arrange a beautiful space. But the thing you need to take care about the most is your intention and how the party is going to make people feel. Focus more on the people’s experiences and having fun, and any party you organize is going to end up being an absolute success.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials(Description)
          
          </h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Just tried the collard wrap for the first time and it was delicious. I special order a few different items through my local health food store and they are weekly staples for lunch and dinner. Love Awesome Foods!!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontendtheme/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Sadaf</h3>
                <h4>Student &amp; nsl technology</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 I just wanted to say that I have fallen IN LOVE with your foods. I have sacrificed good wholesome food to “treat” myself and fulfill my hunger in the past, but i have found such satisfaction with awesome foods products, that i no longer need to eat the junk
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontendtheme/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>NEHA</h3>
                <h4>Student &amp; nsl technology</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Thank you for your food. It’s so fresh and delicious and it takes the work and guess-work out of my busy life when it comes to eating. Awesome Foods is AWESOME! You have a customer for life!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontendtheme/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Niranjan khushwaha</h3>
                <h4>Network & Security Administrator</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Thank you for your food. It’s so fresh and delicious and it takes the work and guess-work out of my busy life when it comes to eating. Awesome Foods is AWESOME! You have a customer for life!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontendtheme/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Anjali</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                
                Everyone had a wonderful time at The French Gourmet last night.

As expected, the food was delicious and our servers were so friendly and helpful – we loved them! It was a delightful experience all round.
                  
                </p>
                <img src="{{asset('frontendtheme/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">   
                
              
                <h3>Apurwa</h3>
                <h4>Student</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-1.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-2.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-3.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-4.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-5.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-6.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-7.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('frontendtheme/assets/img/gallery/gallery-8.jpg')}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('frontendtheme/assets/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset('frontendtheme/assets/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('frontendtheme/assets/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('frontendtheme/assets/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Lalpur</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Sunday:<br>
                  11:00 AM - 11:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>projectmca29@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>9876546789</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact.us.store') }}" method="post" role="form" class="php-email-form">
            {{ csrf_field() }}
              <div class="row" >
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              @if(Session::has('errors'))
                <div class="alert alert-danger">
                    Something went wrong.
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

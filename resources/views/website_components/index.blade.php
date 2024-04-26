@extends('layouts.app')
<!-- Hero Section - Home Page -->
@section('content')
  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/bk-2.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Intellectual Property Rights Management Portal</h2>
            <p data-aos="fade-up" data-aos-delay="200">The match making portal for all the existing intellectual property rights in East Africa</p>
          </div>
          <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Looking For similar IPs....enter a key word">
              <input type="submit" class="btn btn-primary" value="Search">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    <section id="clients" class="clients">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4 flex justify-content-center">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}
            <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.jpeg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          {{-- <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item --> --}}

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>The Intellectual Property Match Making Portal</h2>
            <p>
                We are a team of intellectual property experts who have come together to create a platform that will help you find the right intellectual property for your business. We have a wide range of intellectual properties that you can choose from. We have patents, trademarks, copyrights, and trade secrets. We also have a team of experts who can help you with the legal aspects of acquiring and protecting your intellectual property. So if you are looking for the perfect intellectual property for your business, look no further than our platform.
            </p>
            {{-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> --}}
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Request Use Of Someone's Property</h3>
                  <p>
                    Do you want to use someone else's property for your Innovation? Its a matter of searching and finding the right match and then requesting to use it.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Get Matched</h3>
                  <p>
                    Are you still confused on what Intellectual Properties fit your innovation? Just register and get matched with the right IP.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Agreement templates</h3>
                  <p>
                    We have a wide range of agreement templates that you can use to protect your intellectual property. These templates are easy to use and can be customized to suit your needs.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Legal and Regulatory Guidance</h3>
                  <p>
                    We have a team of legal and regulatory experts who can help you navigate the complex world of intellectual property law. They can provide you with the guidance you need to protect your intellectual property and avoid legal pitfalls.
                  </p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                Patents
              </p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                Copyrights
              </p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                Trademarks
              </p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p>
                Others
              </p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- End Stats Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>
           We offer a wide range of intellectual property services to help you protect your ideas and innovations. Our services include patent, trademark, and copyright registration, as well as legal and regulatory guidance.
        </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Commercialisation</a></h4>
                <p class="description">
                    We will match you with the right intellectual property for your business. Our platform uses advanced algorithms to find the perfect match for your innovation.
                </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a  class="stretched-link">Request For Intellectual Property Rights</a></h4>
                <p class="description">
                    We offer you a platform where you can request to use someone else's intellectual property for your business. You can search for the right match and then request to use it.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Notification System</a></h4>
                <p class="description">
                    We have a notification system that will keep you updated on the latest intellectual property trends. You will receive notifications on new patents, trademarks, and copyrights that match your interests.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Legal And Regulatory Guidance</a></h4>
                <p class="description">
                    Are you stuck on the legal and regulatory aspects of intellectual property? We have a team of experts who can help you navigate the complex world of intellectual property law.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Discoverable</a></h4>
                <p class="description">
                    We make your intellectual property discoverable to the right audience. Our platform uses advanced algorithms to match your innovation with the right audience.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a class="stretched-link">Educational Resources</a></h4>
                <p class="description">
                    We offer a wide range of educational resources to help you understand the complex world of intellectual property. Our resources include articles, videos, and webinars on various intellectual property topics.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- Features Section - Home Page -->
    <section id="features" class="features">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>
            We offer a wide range of features to help you protect your intellectual property. Our features include matching, request for intellectual property rights, notification system, legal and regulatory guidance, discoverable, and educational resources.
        </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Search</h3>
            <p>
                We offer a wide range of search options to help you find the right intellectual property for your business. Our search options include keyword search, category search, and advanced search.
            </p>
            <a href="/register" class="btn btn-get-started">Get Started</a>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
              <img src="assets/img/search.jpg" alt="" class="stack-front">
              <img src="assets/img/search-2.jpg" alt="" class="stack-back">
            </div>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
          <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="assets/img/collabo.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            <h3>Get Matched</h3>
            <p>Our platform uses Artificial Intelligence complex matching Algorithms to match you to the IPs that you may need for your innovation</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Create an account on our platform</span></li>
              <li><i class="bi bi-check"></i><span> Sign in to our platform</span></li>
              <li><i class="bi bi-check"></i> <span>Register your intellectual Property</span>.</li>
              <li><i class="bi bi-check"></i> <span>Get Matched</span>.</li>
            </ul>
            <a href="/register" class="btn btn-get-started align-self-start">Get Started</a>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- End Features Section -->

    <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Here are the commonly asked questions from our clients. If you have any other questions, feel free to contact us.
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>I have an innovation, can you provide intellectual property rights for it?</span></h3>
                <div class="faq-content">
                  <p>
                    No. We do not provide intellectual property rights. We are a platform that helps you find the right intellectual property for your business. We have a wide range of intellectual properties that you can choose from. We also have a team of experts who can help you with the legal aspects of acquiring and protecting your intellectual property.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>
                    Do I need an account on this portal to search for intellectual properties?
                </span></h3>
                <div class="faq-content">
                  <p>
                    Yes. You need to create an account on our platform to search for intellectual properties. Creating an account is easy and free. Once you have created an account, you can search for intellectual properties, request to use someone else's intellectual property, and receive notifications on new intellectual properties that match your interests.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>How much is an account on this IP portal?</span></h3>
                <div class="faq-content">
                  <p>
                    Creating an account on our platform is free. You can create an account by clicking on the "Register" button on our homepage. Once you have created an account, you can search for intellectual properties, request to use someone else's intellectual property, and receive notifications on new intellectual properties that match your interests.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Are international accounts also searchable on this portal?</span></h3>
                <div class="faq-content">
                  <p>
                    Yes. You can search for international accounts on our platform. We have a wide range of international intellectual properties that you can choose from. You can search for international accounts by using our advanced search options, such as keyword search, category search, and advanced search.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Can my Intellectual Property rights be stolen from this portal?</span></h3>
                <div class="faq-content">
                  <p>
                    No. Your intellectual property rights cannot be stolen from our platform. We take the protection of your intellectual property rights very seriously. We have a team of experts who can help you protect your intellectual property and avoid legal pitfalls. We also have a notification system that will keep you updated on the latest intellectual property trends.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- End Faq Section -->

    <!-- Call-to-action Section - Home Page -->
    <section id="call-to-action" class="call-to-action">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>
                Make your innovation a reality by finding the right intellectual property for your business. Register now and get matched with the perfect intellectual property for your innovation.
              </p>
              <a class="cta-btn" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Call-to-action Section -->

    <!-- Recent-posts Section - Home Page -->
    <section id="recent-posts" class="recent-posts">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Articles</h2>
        <p>Check out our guides and articles concerning intellectual property rights</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
        @foreach ($resources as $resource)
        
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          
          <article>

            <div class="post-img">
              <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
            </div>

            <p class="post-category">
            {{
                $resource->category == 1 ? 'Technology' :
                ($resource->category == 2 ? 'Pharmaceuticals' : 'Agriculture')
            }}
            </p>

            <h2 class="title">
              <a href="{{ url('/resources/blog-details/'.$resource->id) }}">{{ $resource->short_description }}</a>
          </h2>
          

            <div class="d-flex align-items-center">
              
              <div class="post-meta">
                
                <p class="post-date">
                    <time datetime="{{ $resource->created_at->format('Y-m-d') }}">{{ $resource->created_at->format('d/m/Y') }}</time>
                </p>

              </div>
            </div>

          </article>
        </div><!-- End post list item --> 
        @endforeach

        </div><!-- End recent posts list -->

      </div>

    </section><!-- End Recent-posts Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Have a specific question regarding Intellectual Property rights? Or an inquiry? Send us a message or come to or office</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Matyrs Way</p>
                  <p>Kampala, Plot 40</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+256752364557</p>
                  <p>+256778766500</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@ipportal.com</p>
                  <p>contact@ipportal.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

@endsection

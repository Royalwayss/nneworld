@extends('front.layout.layout')
@section('content')
<section class="hero">
         <div class="hero-container">
            <h1 class="hero-title" style="--shift-to-y: -355px;"><span>Experience The Power of</span> NNE World</h1>
         </div>
         <div class="hero-shape">
            <!-- <img class="hero-img" src="https://iili.io/HOlkfV4.jpg" alt="Flower studio preview"> -->
            <video autoplay muted playsinline loop src="front/assets/video/hero.mp4" class="hero-video"></video>
            <div class="overlay"></div>
         </div>
      </section>
      <section class="service__area pt-150 pb-130">
         <div class="container">
            <div class="bg-light1 border-radius-25 pt-120 px-lg-5 px-4 pb-90 pb-120">
               <div class="row pb-120">
                  <div class="col-xxl-7 col-xl-7 col-xl-7">
                     <div class="service__title-wrap" data-aos="fade-up">
                        <h2 class="sec-subtitle">Our Categories
                        </h2>
                        <h3 class="sec-title" data-aos="fade-up">Custom Bicycle Solutions Tailored to Every Need</h3>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5 col-xl-5">
                     <div class="service__text  pt-0">
                        <p class="ms-0" data-aos="fade-left">Explore our wide range of solutions including OEM & ODM bicycle manufacturing,
                           premium e-bikes, and high-performance components. Whether you're building your brand or
                           enhancing your product line, our categories cover everything from innovation to scalability.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="service-inner px-lg-5 px-4">
               <div class="row pt-4">
                  
				  
				  @foreach($categories as $category)
				  <div class="col-xxl-4 col-xl-4 col-xl-4 col-md-6 mb-4">
                     <div class="service__item style2">
                        <div class="service__content">
                           <div class="icon-box">
						      @if(!empty($category['image']))  
                              <img src="{{ asset('front/assets/images/category/'.$category['image']) }}" alt="{{ $category['category_name'] }}" title="{{ $category['category_name'] }}">
							  @endif
                           </div>
                           <a href="{{ url($category['category_url']) }}">
                              <div class="service__title">{{ $category['category_name'] }}</div>
                           </a>
                           <p>@php echo $category['description']; @endphp</p>
                           
                           <a class="db-btn-arrow" href="{{ url($category['category_url']) }}">Read More <i
                              class="fa-solid fa-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  @endforeach
				  
				 
			   
			   </div>
            </div>
         </div>
      </section>
      <section class="about__area">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
                  <div class="about__imgs" data-aos="fade-up">
                     <div class="image-1">
                        <img class="border-radius-25" src="front/assets/imgs/about-3.jpg" alt="img" title="img">
                     </div>
                     <!-- <div class="image-2">
                        <img src="front/assets/imgs/about-2.jpg" alt="Image" data-speed="0.85">
                        </div> -->
                     <div class="bell">
                        <span>
                        <i class="fa-regular fa-bell text-white"></i>
                        </span>
                     </div>
                     <div class="projects">
                        <img src="front/assets/imgs/medal.png" width="40px" alt="img" title="img">
                        <p>
                           <span class="">ISO 9001:2015</span>Quality Certified
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-xl-6 col-md-6">
                  <div class="about__content">
                     <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">ABOUT US
                     </h2>
                     <h3 class="sec-title" data-aos="fade-right" data-aos-delay="200">NNE AT A GLANCE:</h3>
                     <div class="">
                        <p data-aos="fade-left" data-aos-delay="250">NNE World, promoted by Navyug Group, Ludhiana, is a
                           leading bicycle manufacturer catering to
                           the needs of bicycle lovers worldwide. As a recognized star export house by the Government
                           of India, we are committed to delivering top-quality bicycles for both the Indian market and
                           OEM purposes.
                        </p>
                        <p data-aos="fade-right" data-aos-delay="250">NNE specialize in producing a wide range of
                           bicycles to suit every preference. Whether you’re
                           an avid mountain biker, a road cycling enthusiast, a leisurely cruiser, or seeking the
                           eco-friendly advantages of electric bikes, NNE have you covered.
                        </p>
                        <p data-aos="fade-left" data-aos-delay="250">We are a leading producer of MTB, Road, Cruiser,
                           and Hybrid in addition to electric bikes and
                           suspension forks for OEM’s and ODM.
                        </p>
                     </div>
                     <div data-aos="fade-up" data-aos-delay="300">
                        <a class="db-btn-arrow" href="{{ route('aboutus') }}">More Info <i class="fa-solid fa-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <img src="front/assets/imgs/shape/6.png" alt="img" title="img" class="shape">
         </div>
      </section>
      <section class="counter__area bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="counter__inner">
                     <div class="counter__item" data-aos="fade-right">
                        <div class="counter__number counter_slow style2">25+
                        </div>
                        <h3 class="counter__title color-heading">Years of <br> Experience </h3>
                     </div>
                     <div class="counter__item" data-aos="fade-right" data-aos-delay="300">
                        <div class="counter__number counter_slow style2">100+
                        </div>
                        <h3 class="counter__title color-heading">Range of <br> Products </h3>
                     </div>
                     <div class="counter__item" data-aos="fade-right" data-aos-delay="600">
                        <div class="counter__number counter_slow style2">200+
                        </div>
                        <h3 class="counter__title color-heading">Happy <br>Customers </h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="process__area-4 bg-light1 pt-100 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="process__title-wrap-3">
                     <h2 class="sec-subtitle" data-aos="fade-up" data-aos-delay="100">work process</h2>
                     <h3 class="sec-title" data-aos="fade-up" data-aos-delay="200">Driven by Research,<br> Shaped by
                        Innovation
                     </h3>
                  </div>
                  <div class="process__list-4">
                     <div class="process__item-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="serial">01</div>
                        <div class="process__content-4">
                           <h3 class="process__title-4">Market Insights</h3>
                           <p>We start with in-depth market research to understand user behavior, emerging trends, and
                              innovation gaps. This ensures every project is rooted in real-world demand.
                           </p>
                        </div>
                     </div>
                     <div class="process__item-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="serial">02</div>
                        <div class="process__content-4">
                           <h3 class="process__title-4">Concept Validation</h3>
                           <p>Our team transforms ideas into viable concepts, validating them through data, testing,
                              and customer feedback before any development begins.
                           </p>
                        </div>
                     </div>
                     <div class="process__item-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="serial">03</div>
                        <div class="process__content-4">
                           <h3 class="process__title-4">Prototype Engineering</h3>
                           <p>We develop functional prototypes to bring ideas to life. This phase helps us test
                              usability, functionality, and scalability in a controlled setting.
                           </p>
                        </div>
                     </div>
                     <div class="process__item-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="serial">04</div>
                        <div class="process__content-4">
                           <h3 class="process__title-4">Continuous Innovation</h3>
                           <p>Innovation doesn’t stop at launch. We continuously refine our processes and solutions
                              based on analytics, feedback, and technological advancements.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="brand__area pt-150 pb-150">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-12">
                  <div class="sec-title-wrap pb-3" data-aos="fade-up">
                     <h2 class="sec-subtitle mb-0">Our Partner <br> Brands
                     </h2>
                  </div>
               </div>
               <div class="col-lg-9 col-12">
                  <div class="brand__inner p-0">
                     <div class="swiper brand__slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/orbishox.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/orlando.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/speevo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Verdant-bikes.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/omm.svg" alt="img" title="img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="hero__area sustain">
         <div class="hero__inner">
            <div class="hero__top">
               <h1 class="hero__title" data-aos="fade-up">
                  <span class="visibleText">Sustainability Is</span> <br> <a href="" id="hero_video"> <span><i
                     class="fa-solid fa-play"></i></span></a> <span class="visibleText">Our Standard</span>
               </h1>
               <div class="hero__contact cxufadeUp2">
                  <a href="#">
                  <span><i class="fa-solid fa-arrow-right"></i></span>
                  </a>
                  <div class="text">
                     <p>Read More</p>
                  </div>
               </div>
            </div>
            <div class="hero__btm">
               <div class="">
                  <p>We design products and processes that reduce environmental impact and promote a better tomorrow. From
                     responsible sourcing to eco-conscious packaging, we're driven by purpose and guided by innovation.
                  </p>
               </div>
            </div>
         </div>
         <div class="hero__video">
            <video autoplay loop muted>
               <source src="front/assets/video/factory.mp4" type="video/mp4">
            </video>
         </div>
         <img class="shape-1" src="front/assets/imgs/shape/1.png" alt="img" title="img">
         <img class="shape-2" src="front/assets/imgs/shape/2.png" alt="img" title="img">
         <img class="shape-3" src="front/assets/imgs/shape/3.png" alt="img" title="img">
         <img class="shape-4 cxuSpin-slow" src="front/assets/imgs/shape/4.png" alt="img" title="img">
         <img class="shape-5" src="front/assets/imgs/shape/5.png" alt="img" title="img">
      </section>
      <section class="who__area" style="background-image: url('front/assets/imgs/hero/00.png');">
         <div class="who__area_inner infra pt-5 pb-5">
            <div class="container mt-xl-5 mb-xl-5">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-12">
                     <div class="who__left">
                        <div class="sec-title-wrap pb-3" data-aos="fade-up">
                           <h2 class="sec-subtitle" data-aos="fade-up">Infrastructure
                           </h2>
                           <h3 class="sec-title" data-aos="fade-right">Strong Infrastructure That Drives Innovation
                           </h3>
                        </div>
                        <div class="who__features">
                           <div class="who__feature" data-aos="fade-up" data-aos-delay="300">
                              <div class="number">
                                 <span class="color-base">01</span>
                              </div>
                              <div class="who__content">
                                 <h4 class="title">Modern Manufacturing Units</h4>
                                 <p>Equipped with cutting-edge machinery and quality control systems, our facilities
                                    ensure precision, consistency, and large-scale production.
                                 </p>
                              </div>
                           </div>
                           <div class="who__feature" data-aos="fade-up" data-aos-delay="600">
                              <div class="number">
                                 <span class="color-base">02</span>
                              </div>
                              <div class="who__content">
                                 <h4 class="title">Streamlined Supply Chain</h4>
                                 <p>With an optimized logistics network, we guarantee timely delivery and smooth
                                    operations across all verticals.
                                 </p>
                              </div>
                           </div>
                           <div class="who__feature" data-aos="fade-up" data-aos-delay="900">
                              <div class="number">
                                 <span class="color-base">03</span>
                              </div>
                              <div class="who__content">
                                 <h4 class="title">Smart Warehousing</h4>
                                 <p>Our strategically located, tech-enabled warehouses are designed for fast, safe,
                                    and scalable storage and distribution.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="brand__area pt-150 pb-150">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-12">
                  <div class="sec-title-wrap pb-3" data-aos="fade-up">
                     <h2 class="sec-subtitle mb-0">Our Customers
                     </h2>
                  </div>
               </div>
               <div class="col-lg-9 col-12">
                  <div class="brand__inner p-0">
                     <div class="swiper brand__slider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Chase-Logo-NNE.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Decathlon.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Dodge-New-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Fr-New-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Hero-New-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Huge-New-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/NNE-Astra-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/SS-New-Logo.png" alt="img" title="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="brand__slide">
                                 <img src="front/assets/imgs/brand/Sun-Baby-Logo-NNE.png" alt="img" title="img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="blog__area-4 pt-150 pb-150">
         <div class="container">
            <div class="blog__top-4">
               <div class="sec-title-wrap">
                  <h2 class="sec-subtitle" data-aos="fade-up">Events</h2>
                  <h3 class="sec-title" data-aos="fade-right">Explore Upcoming Events &<br>Highlights From NNE</h3>
               </div>
               <div class="btn-wrap" data-aos="fade-up" data-aos-delay="300">
                  <a class="db-btn-border btn-rollover border-radius-50" href="">Explore Now <i
                     class="fa-solid fa-arrow-right"></i></a>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="blog__list">
                     <article class="blog__item-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="blog__thumb-4" data-tilt>
                           <a href="#"><img src="front/assets/imgs/event_1.jpg" alt="img" title="img"></a>
                        </div>
                        <div class="blog__content-4">
                           <ul class="blog__meta-4">
                              <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>
                              <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 27, 2025</a></li>
                           </ul>
                           <a href="#">
                              <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>
                           </a>
                           <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </article>
                     <article class="blog__item-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="blog__thumb-4" data-tilt>
                           <a href="#"><img src="front/assets/imgs/event_2.jpg" alt="img" title="img"></a>
                        </div>
                        <div class="blog__content-4">
                           <ul class="blog__meta-4">
                              <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>
                              <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 29, 2025</a></li>
                           </ul>
                           <a href="#">
                              <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>
                           </a>
                           <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </article>
                     <article class="blog__item-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="blog__thumb-4" data-tilt>
                           <a href="#"><img src="front/assets/imgs/event_3.jpg" alt="img" title="img"></a>
                        </div>
                        <div class="blog__content-4">
                           <ul class="blog__meta-4">
                              <li><a href="#"><i class="fa-solid fa-location-dot"></i> Location</a></li>
                              <li><a href="#"><i class="fa-regular fa-calendar-days"></i> October 30, 2025</a></li>
                           </ul>
                           <a href="#">
                              <h4 class="blog__title">Unveiling Innovation At Eurobike 2025</h4>
                           </a>
                           <a class="db-btn-arrow" href="">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="newsletter__area bg-light1 pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xxl-5 col-xl-5 col-lg-5 align-self-center">
                  <h2 class="sec-subtitle" data-aos="fade-up">Newsletter</h2>
                  <h3 class="sec-title pb-0" data-aos="fade-right">Get Latest Updates</h3>
               </div>
               <div class="col-xxl-7 col-xl-7 col-lg-7">
                  <div class="newsletter__right ps-xxl-5">
                     <form action="javascript:;" data-action="{{ route('addsubscriber') }}" class="ps-xxl-5" id="newsletter-form">@csrf
                        <input class="border-radius-50" type="email" name="email" id="newsletter-email" placeholder="Enter Your Email">
                        <button type="submit"
                           class="submit btn-rollover border-radius-50 border-radius-50-hover bg-base">Subscribe
                        Now</button>
						<p id="newsletter-message"></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
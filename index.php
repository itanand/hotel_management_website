<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel  Booking Website</title>
    <?php require('include/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>

         .custom-box-shadow{box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)}
;
          .availability-form{
             margin-top: -50px;
             z-index: 2;
             position: relative;
          }
          @media  screen and (max-width: 575px)  {
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
          }
    </style>
  </head>
  <body class="bg-light">

     <?php
       require('include/header.php')
     ?>


     <!-- Swiper carousel -->
      <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/carousel/1.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
              <img src="images/carousel/2.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
              <img src="images/carousel/3.png"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
              <img src="images/carousel/4.png"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
              <img src="images/carousel/5.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
              <img src="images/carousel/6.png" class="w-100 d-block" />
            </div>
          </div>
        </div>
      </div>

      <!-- check-availability-form -->

      <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
             <form action="">
                 <div class="row align-items-end">
                     <div class="col-lg-3 mb-3">
                       <label  class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none" >
                     </div>
                     <div class="col-lg-3 mb-3">
                       <label  class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none" >
                     </div>
                     <div class="col-lg-3 mb-3">
                       <label  class="form-label" style="font-weight: 500;">Adult</label>
                          <select class="form-select shadow-none" >
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                     </div>

                     <div class="col-lg-2 mb-3">
                       <label  class="form-label" style="font-weight: 500;">Children</label>
                          <select class="form-select shadow-none" >
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                     </div>
                    <div class="col-lg-1 mb-lg-3 mt-3">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>

                 </div>
             </form>
          </div>
        </div>
      </div>

      <!-- Our Rooms -->

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
             <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                       <h5 >Simple Room Name</h5>
                       <h6 class="mb-4">₹200 per Night</h6>
                       <div class="features mb-4">
                           <h6 class="mb-1">Features</h6>
                           <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            2 Rooms
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            1 Bathroom
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            1 Balcony
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                             2 Sofa
                          </span>
                        </div>
                        <div class="facilities mb-4">
                          <h6 class="mb-1">Facilities</h6>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           Wi-Fi
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            Television
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                          Breakfast
                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         Water
                        </span>
                        </div>

                        <div class="guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           5 Adults
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            4 Childrens
                         </span>
                        </div>

                        <div class="rating mb-4">
                          <h6 class="mb-1">Ratings</h6>
                          <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
               <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 >Simple Room Name</h5>
                      <h6 class="mb-4">₹200 per Night</h6>
                      <div class="features mb-4">
                          <h6 class="mb-1">Features</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           2 Rooms
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           1 Bathroom
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           1 Balcony
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            2 Sofa
                         </span>

                       </div>
                       <div class="facilities mb-4">
                         <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap custom-box-shadow">
                          Wi-Fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         Breakfast
                       </span>
                       <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                        Water
                       </span>
                       </div>

                       <div class="guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           5 Adults
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            4 Childrens
                         </span>
                        </div>
                       <div class="rating mb-4">
                         <h6 class="mb-1">Ratings</h6>
                         <span class="badge rounded-pill bg-light">
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         </span>
                       </div>
                       <div class="d-flex justify-content-evenly mb-2">
                          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                       </div>
                   </div>
           </div>
         </div>

         <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                    <h5 >Simple Room Name</h5>
                    <h6 class="mb-4">₹200 per Night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         2 Rooms
                       </span>
                       <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         1 Bathroom
                       </span>
                       <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         1 Balcony
                       </span>
                       <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                          2 Sofa
                       </span>

                     </div>
                     <div class="facilities mb-4">
                       <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark  text-wrap custom-box-shadow ">
                        Wi-Fi
                      </span>
                      <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                         Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                       Breakfast
                     </span>
                     <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                      Water
                     </span>
                     </div>
                     <div class="guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                           5 Adults
                         </span>
                         <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                            4 Childrens
                         </span>
                        </div>
                     <div class="rating mb-4">
                       <h6 class="mb-1">Ratings</h6>
                       <span class="badge rounded-pill bg-light">
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       </span>
                     </div>
                     <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                     </div>
                 </div>
         </div>
       </div>

          <div class="col-lg-12 text-center mt-5">
              <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>

        </div>
      </div>

        <!-- Our Facilities -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

        <div class="container">
          <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_43553.svg" alt="" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="images/facilities/IMG_41622.svg" alt="" width="80px">
                  <h5 class="mt-3">Television</h5>
              </div>
              <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" alt="" width="80px">
                <h5 class="mt-3">Massage</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
              <img src="images/facilities/IMG_49949.svg" alt="" width="80px">
              <h5 class="mt-3">A.C.</h5>
            </div>
           <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_96423.svg" alt="" width="80px">
            <h5 class="mt-3">Microwave</h5>
          </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
          </div>
          </div>
       </div>

        <!-- Testimonials -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

        <div class="container mt-5">
          <div class="swiper swiper-testimonial">
            <div class="swiper-wrapper mb-5">

              <div class="swiper-slide bg-white shadow p-4">
                <div class="profile d-flex align-items-center mb-3">
                      <img src="images/facilities/user.png" width="30px" alt="">
                      <h6 class="m-0 ms-2">Akash & Raju</h6>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                   elit. Voluptates consequuntur similique repellat
                   praesentium nihil numquam. Voluptas sunt animi
                   veritatis laboriosam!</p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
              </div>

              <div class="swiper-slide bg-white shadow p-4">
                <div class="profile d-flex align-items-center mb-3">
                      <img src="images/facilities/user.png" width="30px" alt="">
                      <h6 class="m-0 ms-2">Sadanand Kumar</h6>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                   elit. Voluptates consequuntur similique repellat
                   praesentium nihil numquam. Voluptas sunt animi
                   veritatis laboriosam!</p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
              </div>

              <div class="swiper-slide bg-white shadow p-4">
                <div class="profile d-flex align-items-center mb-3">
                      <img src="images/facilities/user.png" width="30px" alt="">
                      <h6 class="m-0 ms-2">Ashish & Vishal</h6>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                   elit. Voluptates consequuntur similique repellat
                   praesentium nihil numquam. Voluptas sunt animi
                   veritatis laboriosam!</p>
                    <div class="rating">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
          </div>
        </div>


          <!-- Reach Us -->

          <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8 p-4 mb-lg-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118106.70010221665!2d73.17308625!3d22.32210265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ab91a3ddab%3A0xac39d3bfe1473fb8!2sVadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1662889587305!5m2!1sen!2sin"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                  <h5>Call us</h5>
                  <a href="tel: +917004238112" class="d-inline-block mb-2 text-decoration-none text-dark">
                   <i class="bi bi-telephone-fill"></i> +917004238112</a>
                   <br>
                   <a href="tel: +917004238112" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +917004238112</a>
                </div>
                  <div class="bg-white p-4 rounded mb-4">
                       <h5>Follow us</h5>
                       <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                          <i class="bi bi-twitter me-2"></i> Twitter</span>
                       </a>
                       <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                          <i class="bi bi-facebook me-2"></i>Facebook</span>
                       </a>
                       <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                          <i class="bi bi-linkedin me-2"></i>Linkedin</span>
                       </a>
                       <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                          <i class="bi bi-instagram me-2"></i>Instagram</span>
                       </a>
                  </div>

              </div>
            </div>
          </div>

          <?php
          include('include/footer.php')
          ?>




  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          }
        });

        var swiper = new Swiper(".swiper-testimonial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
      </script>




  </body>
</html>
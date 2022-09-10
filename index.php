<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel  Booking Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .h-font{
            font-family: 'Merienda', cursive;
        }
        /* Chrome, Safari, Edge, Opera */
          input::-webkit-outer-spin-button,
          input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
          }

          /* Firefox */
          input[type=number] {
            -moz-appearance: textfield;
          }
          .custom-bg{
             background-color: #2eac99;
          }
          .custom-bg:hover{
             background-color: #279e8c;
          }
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
  <body>
   <!-- Navbar code  -->
  <nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel Management</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>
        </ul>
          <div class="d-flex" >
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
               Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
               Register
            </button>
          </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
              </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                   <label  class="form-label">Email address</label>
                   <input type="email" class="form-control shadow-none" >
                </div>
                <div class="mb-4">
                   <label  class="form-label">Password</label>
                   <input type="password" class="form-control shadow-none" >
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                  <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                </div>
            </div>
          </form>
        </div>
    </div>
  </div>

  <!-- Register Modal -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-lines-fillfs-3 me-2"></i>User Registration
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your Details must match with your ID(Aadhar card, passport, driving license, etc.)
                  that will be required during check-in.
                </span>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Name</label>
                      <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Email</label>
                      <input type="email" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Phone Number</label>
                      <input type="number" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Picture</label>
                      <input type="file" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-12 p-0 mb-3">
                      <label  class="form-label">Address</label>
                      <textarea class="form-control shadow-none"  rows="2"></textarea>
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">PinCode</label>
                      <input type="number" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Date of Birth</label>
                      <input type="date" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 ps-0 mb-3">
                      <label  class="form-label">Password</label>
                      <input type="password" class="form-control shadow-none" >
                    </div>
                    <div class="col-md-6 p-0 mb-3">
                      <label  class="form-label">Confirm Password</label>
                      <input type="password" class="form-control shadow-none" >
                    </div>
                  </div>
                </div>
                <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>


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

      <br><br><br>

      <br><br><br>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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
      </script>
  </body>
</html>
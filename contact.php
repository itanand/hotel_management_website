<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Manglam - Contact</title>
    <?php require('include/links.php') ?>
  </head>
  <body class="bg-light">
    <?php require('include/header.php') ?>

      <div class="my-5 px-4">
         <h2 class="fw-bold h-font text-center">CONTACT US</h2>
         <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus temporibus consequatur suscipit eius, sapiente illum vitae, <br>dicta quibusdam molestiae sit a quod, expedita non nihil officia optio maiores fugit recusandae!
            </p>
      </div>

      <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-white rounded shadow p-4 ">
                      <iframe class="w-100 rounded mb-4" height="320px"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118106.70010221665!2d73.17308625!3d22.32210265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ab91a3ddab%3A0xac39d3bfe1473fb8!2sVadodara%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1662889587305!5m2!1sen!2sin"
                          loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5 >Address</h5>
                        <a href="https://goo.gl/maps/5HFtAVFNgPx94qFKA" target="_blank"class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> Vadodra, Gujrat, India
                        </a>

                    <h5 class="mt-4">Call us</h5>
                        <a href="tel: +917004238112" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +917004238112
                        </a>
                        <br>
                        <a href="tel: +917004238112" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +917004238112
                        </a>
                            <h5 class="mt-4">Email</h5>
                            <a href="mailto: hey.itanand@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> hey.itanand@gmail.com
                            </a>

                    <h5 class="mt-4">Follow us</h5>

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

              <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 ">
                      <form action="">
                          <h5>Send a Message</h5>
                          <div class="mt-3">
                               <label for="name" class="form-label" style="font-weight: 500;">Name</label>
                               <input type="text" class="form-control shadow-none">
                          </div>
                          <div class="mt-3">
                               <label for="email" class="form-label" style="font-weight: 500;">Email</label>
                               <input type="email" class="form-control shadow-none">
                          </div>
                          <div class="mt-3">
                               <label for="subject" class="form-label" style="font-weight: 500;">Subject</label>
                               <input type="text" class="form-control shadow-none">
                          </div>
                          <div class="mt-3">
                               <label for="message" class="form-label" style="font-weight: 500;">Message</label>
                               <textarea  rows="5" class="form-control shadow-none" style="resize:none"></textarea>
                          </div>
                          <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                      </form>
                </div>
              </div>
            </div>
      </div>

    <?php include('include/footer.php') ?>
  </body>
</html>
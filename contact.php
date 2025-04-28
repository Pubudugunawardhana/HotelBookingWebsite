<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirissa 360 - CONTACT US</title>

    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/common.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>



</head>

<body class="bg-light">

    <!-- header Link -->

    <?php require('inc/header.php'); ?>

    <!-- our facilities -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        We’d love to hear from you!
        Whether you have questions about your booking, need travel assistance, or simply want to learn more about Mirissa 360, our team is here to help. 
        Feel free to reach out to us by phone, email, or through the contact form below.
        We are committed to providing quick and friendly support to ensure your experience with us is smooth and memorable.
        </p>
        <br>
        <br>
        <hr>

    </div>

    <!-- facilities section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                
                <!-- left side -->

                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34209.93681584699!2d80.40440930598652!3d5.96166810812034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f7454a9ba55%3A0xcfe37ec93c0a68c2!2sMirissa%20360!5e0!3m2!1sen!2slk!4v1745770355807!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/AXCh7Mw3tKGejsdF8" target="320" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>Mirissa 360, Mirissa, Sri Lanka
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel :+94712345000" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +94 712 345 000
                    </a>
                    <br>
                    <a href="tel :+94712345222" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +94 712 345 222
                    </a>

                    <h5 class="mt-4">Email us</h5>
                    <a href="mailto:iit22010@std.uwu.ac.lk" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-at-fill"> </i>mirissa360@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>

                    

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">

                        <i class="bi bi-youtube me-1"></i>
                    </a>

                    

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">

                        <i class="bi bi-instagram me-1"></i>

                    </a>

                    

                    <a href="#" class="d-inline-block text-dark fs-5 me-2">

                        <i class="bi bi-whatsapp me-1"></i>

                    </a>

                </div>
            </div>
               
                <!-- right side -->
               

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <form >
                        <br>

                        <h5>Send a massage</h5>
                        <br>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight : 500;">Name </label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" style="font-weight : 500;">Email </label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" style="font-weight : 500;">Subject </label>
                            <input type="text" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" style="font-weight : 500;">Massage </label>
                            <textarea class="form-control shadow-none" rows="10" style="resize :none ;" ></textarea>
                        </div>
                        
                        <br>

                     <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>


                    </form>

                </div>
            </div>

        </div>

    </div>

    <?php require('inc/footer.php'); ?>

    <br><br>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirissa 360</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css" />

    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media (max-width: 575px) {
            .availability-form {
                margin-top: 20px;
                padding: 0 35px;
            }
        }
    </style>

</head>

<body class="bg-light">


    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-b0ld fs-3 h-font" href="index.php">Mirissa 360</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-success shadow-none" type="submit">Search</button> -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModel">Register</button>



                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-6 me-2 "> User Login</i>
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>


                </form>



            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-6 me-2"> User Registration</i>

                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note : Your details must match with your ID(NIC card , passport , driving license , etc.)
                            that will be requireed during check-in.

                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>

                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>

                                    <textarea class="form-control shadow-none" rows="1"></textarea>

                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>


                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>

                        </div>

                    </div>


                </form>



            </div>
        </div>

    </div>

    <!-- Carousel  -->

    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper mySwiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_15372.png">
                </div>
                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_40905.png" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_55677.png" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_62045.png" />
                </div>

                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_93127.png" />
                </div>
                <div class="swiper-slide">
                    <img src="Images/carousel/IMG_99736.png" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- check availability form -->

    <div class="container avalability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Standard Room</h5>
                        <h6 class="mb-4">LKR 5000.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>


                            </span>


                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More datails</a>

                        </div>





                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Deluxe Room</h5>
                        <h6 class="mb-4">LKR 7500.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>


                            </span>


                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More datails</a>

                        </div>





                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="Images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Suite</h5>
                        <h6 class="mb-4">LKR 10,000.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bathrooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>


                            </span>


                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More datails</a>

                        </div>





                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">OUR ROOMS>>></a>
            </div>
        </div>
    </div>

    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_43553.svg" width="80px">
                <h5 class="mt-2">Free Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_49949.svg" width="80px">
                <h5 class="mt-2">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_41622.svg" width="80px">
                <h5 class="mt-2">Telivision</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_47816.svg" width="80px">
                <h5 class="mt-2">Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="Images/facilities/IMG_96423.svg" width="80px">
                <h5 class="mt-2">Room heater</h5>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">OUR FACILITIES>>></a>
            </div>

        </div>

    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper mySwiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/features/person4.jpg" width="30px">
                        <h6 class="m-0 ms-2">Mr.Rajapaksha</h6>

                    </div>
                    <p>"One of the best hotel experiences I've had! The food at the in-house restaurant was fantastic, and the spa treatments were heavenly. Loved how friendly and helpful all the staff were. Definitely recommending this place to all my friends!"</p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/features/person1.jpg" width="30px">
                        <h6 class="m-0 ms-2">Mr.Gunawrdhana</h6>

                    </div>
                    <p>"Absolutely loved our stay! The staff were incredibly welcoming and the room was spotless. We especially enjoyed the rooftop pool — the view was breathtaking! Breakfast was delicious too. Highly recommend for anyone looking for a relaxing getaway." </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/features/person2.avif" width="30px">
                        <h6 class="m-0 ms-2">Miss.Samarakoon</h6>

                    </div>
                    <p>"Great location, right in the heart of the city. Easy access to restaurants and shops. Room was cozy and had everything I needed. Only reason I'm giving 4 stars instead of 5 is the Wi-Fi could have been a bit faster. Overall, very happy with my stay!" </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <!-- <i class="bi bi-star-fill text-warning"></i> -->
                    </div>

                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/features/person3.avif" width="30px">
                        <h6 class="m-0 ms-2">Miss.Dilini</h6>

                    </div>
                    <p>"From check-in to check-out, everything was perfect! The attention to detail was amazing — from the little chocolates on the pillows to the beautiful spa facilities. It felt like a true luxury experience. Can’t wait to come back!" </p>

                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                </div>

                

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row p-2">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded ">
              <iframe class="w-100 rounded" height="420" src ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34209.93681584699!2d80.40440930598652!3d5.96166810812034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f7454a9ba55%3A0xcfe37ec93c0a68c2!2sMirissa%20360!5e0!3m2!1sen!2slk!4v1745770355807!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href ="tel :+94712345000" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
                <i class="bi bi-telephone-fill"></i>  +94 712 345 000
                <br>
                <a href ="tel :+94712345222" class="d-inline-block mb-2 text-decoration-none text-dark"></a>
                <i class="bi bi-telephone-fill"></i>  +94 712 345 222
               </div>

            <div class="bg-white p-4 rounded mb-4">
               <h5>Follow us</h5>
            
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-facebook me-1"></i> Facebook
                </span>
                </a>

                <br>

                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-youtube me-1"></i> Youtube
                </span>
                </a>

                <br>

                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-instagram me-1"></i> Instagram
                </span>
                </a>

                <br>

                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2 ">
                <i class="bi bi-whatsapp me-1"></i> Whatsapp
                </span>
                </a>

            </div>
        </div>
    </div>

    <!-- Footer Design-->

    <div class="container-fluid bg-white mt-5 ">
        <div class="row ">
            <div class="col-lg-4 p-4">
               <h3 class="h-font fw-bold fs-3 mb-2">Mirissa 360</h3>
               <p>Located in the heart of Mirissa in Sri Lanka, Mirissa 360 offers a comfortable and convenient stay for both business and leisure travelers. 
                Enjoy dining at our restaurant, relax by the spa, or explore nearby attractions.We look forward to welcoming you!</p>
            </div>

            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Home</a><br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Rooms</a><br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Facilities</a><br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Contact us</a><br>
                <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">About</a><br>
                
            </div>

            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-facebook me-1"></i> Facebook
                </a>
                <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-instagram me-1"></i> Instagram
                </a>
                <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-whatsapp me-1"></i> Whatsapp
                </a>
                <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none ">
                <i class="bi bi-youtube me-1"></i> Youtube
                </a>
            </div>

        </div>
    </div>

    <h6 class="text-center bg-dark text-white p-3 m-0">© 2025 Developed by UWU. All rights reserved.</h6>

    <br><br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });


        var swiper = new Swiper(".mySwiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView:"3",
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
            breakpoints:{
                320:{
                    slidesPerView:1,
                },
                640:{
                    slidesPerView:3,
                },
                1024:{
                    slidesPerView:3,
                },
            }
        });
    </script>


</body>

</html>
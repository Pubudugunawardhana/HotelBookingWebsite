<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirissa 360 - ABOUT</title>

    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="css/common.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
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
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Welcome to Mirissa 360, where luxury and comfort meet. Located in the heart of Mirissa, we offer a perfect blend of relaxation and adventure for all travelers.
            Whether you're here for business, romance, or a family vacation, we provide spacious rooms, exquisite dining, and world-class facilities.
            Our dedicated team is committed to delivering exceptional service, ensuring every guest feels like family.
            At Mirissa 360, your stay will be a memorable experience from start to finish.
        </p>
        <br>
        <br>
        <hr>

    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-2 order-2">
                <h3 class="mb-3">A Message from General Manager</h3>
                <p>At Mirissa 360, we are committed to delivering exceptional experiences for every guest. As GM, my goal is to create a welcoming environment where luxury, comfort, and personalized service are at the heart of everything we do.
                    We take pride in offering a memorable stay, whether you're here for business, leisure, or a special getaway.</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="Images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4 pop">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4 pop">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/about/customers.svg" width="70px">
                    <h4 class="mt-3">1000+ CUSTOMERS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4 pop">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/about/rating.svg" width="70px">
                    <h4 class="mt-3">500+ REVIEWS</h4>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 mb-4 px-4 pop">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFF</h4>
                </div>

            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image.png" class="w-100">
                    <h5 class="mt-2">Assistant General Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image2.webp" class="w-100">
                    <h5 class="mt-2">Front Office Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image3.jpg" class="w-100">
                    <h5 class="mt-2">Housekeeping Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image4.jpg" class="w-100">
                    <h5 class="mt-2">Food & Beverage (F&B) Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image5.jpg" class="w-100">
                    <h5 class="mt-2">Sales & Marketing Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image6.jpg" class="w-100">
                    <h5 class="mt-2">Revenue Manager</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="Images/about/managementTeam/image7.jpg" class="w-100">
                    <h5 class="mt-2">Finance Manager</h5>
                </div>
               
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <?php require('inc/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
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
                768:{
                    slidesPerView:2,
                },
                1024:{
                    slidesPerView:3,
                },
            }
        });
    </script>

    <br><br>



</body>

</html>
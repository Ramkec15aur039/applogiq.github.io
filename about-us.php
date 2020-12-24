<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Applogiq - About Us Page</title>
    <!------------------  Include head Section -------------------------------->
    <?php include_once('./common/header.php')?>

    <style>
    .about-us-banner {
        background-image: url('./assets/images/hero-banner-bg-1.png');
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
    }

    @media (min-width: 1024px) {
        .about-us-banner-row {
            background-image: url('./assets/images/Up-arrow.png');
            background-position: left 350px top 150px;
            background-repeat: no-repeat;
        }

    }
    </style>

</head>

<body>
    <!------------------  Include Navigation Section ------------------------->
    <?php include_once('./common/navigation.php')?>

    <!------------------  Include Navigation Section ------------------------->
    <div class="container about-us-banner">
        <div class="row about-us-banner-row">
            <div class="col-md-4 banner-item">
                <img src="./assets/images/about-us-banner-image-left.png" alt="Best solution for your BUSSINESS"
                    class="img-fluid pl-3" data-aos="fade-right" data-aos-offset="100" data-aos-duration="1500" />
                <button class="btn btn-danger ml-3 p-3 mt-5">Our services</button>
            </div>
            <div class="col-md-8 banner-item banner-item-responsive" data-aos="fade-left" data-aos-offset="100"
                data-aos-duration="1500">
                <img src="./assets/images/about-us-banner-image-right.png" alt="slider2"
                    class="img-fluid mb-5 animated-slide-images" style="float: right;">
            </div>
        </div>
    </div>



    <!------------------  Include About-us Section ------------------------->
    <div class="container aboutUs-main" style="overflow-y: unset;">
        <div class="row two-column-row p-4">
            <div class="col-md-6 aboutUs-column1">
                <img src="./assets/images/about-us.jpg" alt="About Us" class="img-fluid mr-3" data-aos="fade-up-right"
                    data-aos-duration="800" data-aos-offset="80">
            </div>
            <div class="col-md-6 pl-3 mt-2 aboutUs-column2" data-aos="fade-up-left" data-aos-duration="800"
                data-aos-offset="80">
                <h2>ABOUT US</h2>
                <hr class="line-AboutUs">
                <p>Applogiq puts together a bunch of passinate mind to transform your vision into reality imparting an
                    awesome
                    digital experience for your users. We take care of website design, development, scalable mobile apps
                    to SaaS
                    platforms, the solution we engineer accelerate efficiency and fuel growth for our clients.
                    <br>
                    <br>
                    Applogiq puts together a bunch of passinate mind to transform your vision into reality imparting an
                    awesome
                    digital experience for your users. We take care of website design, development, scalable mobile apps
                    to SaaS
                    platforms, the solution we engineer accelerate efficiency and fuel growth for our clients.
                    <br>
                    <br>
                    Applogiq puts together a bunch of passinate mind to transform your vision into reality imparting an
                    awesome
                    digital experience for your users. We take care of website design, development, scalable mobile apps
                    to SaaS
                    platforms, the solution we engineer accelerate efficiency and fuel growth for our clients.
            </div>
        </div>
        <div class="row pl-3  pt-3 mb-3 aboutUs-column2" data-aos="fade-up-left" data-aos-duration="800"
            data-aos-offset="80">
            Applogiq puts together a bunch of passinate mind to transform your vision into reality imparting an
            awesome
            digital experience for your users. We take care of website design, development, scalable mobile apps
            to SaaS
            platforms, the solution we engineer accelerate efficiency and fuel growth for our clients.
            <br>
            <br>
            Applogiq puts together a bunch of passinate mind to transform your
            vision into reality
            imparting an awesome
            digital experience for your users. We take care of website design, development, scalable mobile
            apps to SaaS
            platforms, the solution we engineer accelerate efficiency and fuel growth for our
            clients.
        </div>
    </div>

    <!------------------  Include process Section ------------------------->
    <?php include_once('./common/process.php')?>

    <!------------------  Include testimonial Section ------------------------->
    <?php include_once('./common/testimonials.php')?>

    <!------------------  Include technology Section ------------------------->
    <?php include_once('./common/technology.php')?>

    <!------------------  Include footer Section ------------------------->
    <?php include_once('./common/footer.php')?>

    <script src="./assets/js/main.js"></script>
    <!-- Animate on scroll -->
    <script src="./assets/js/aos.js">
    </script>
    <script>
    AOS.init({
        offset: 390,
        duration: 2000,
    });
    AOS.refreshHard()
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Applogiq - Home Page</title>
    <!------------------  Include head Section -------------------------------->
    <?php include_once('./common/header.php')?>
</head>

<body>


    <!------------------  Include Navigation Section ------------------------->
    <?php include_once('./common/navigation.php')?>

    <!------------------  Include slider Section ----------------------------->
    <?php include_once('./common/slider.php')?>

    <!------------------  Include about-us Section --------------------------->
    <?php include_once('./common/about-us.php')?>

    <!------------------  Include what-we-do Section ------------------------->
    <?php include_once('./common/what-we-do.php')?>

    <!------------------  Include services Section ------------------------->
    <?php include_once('./common/services.php')?>

    <!------------------  Include process Section ------------------------->
    <?php include_once('./common/process.php')?>

    <!------------------  Include testimonial Section ------------------------->
    <?php include_once('./common/testimonials.php')?>

    <!------------------  Include technology Section ------------------------->
    <?php include_once('./common/technology.php')?>

    <!------------------  Include footer Section ------------------------->
    <?php include_once('./common/footer.php')?>



    <!---------------------------- JS ---------------------------------------->
    <script src="./assets/js/main.js"></script>


    <!------------------- Animate on scroll ---------------------------------->
    <script src="./assets/js/aos.js"></script>
    <script>
    AOS.init({
        offset: 390,
        duration: 2000,
        useClassNames: true,
        initClassName: false,
        animatedClassName: 'animated',
    });
    AOS.refreshHard()
    </script>

</body>

</html>
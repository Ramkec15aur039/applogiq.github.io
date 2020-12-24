<!-------------------------- Bootstrap CSS --------------------------------->
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">

<!------------------  Bootstrap JS ---------------------------------------->
<script src="./assets/js/jquery-3.2.1.slim.min.js"></script>

<script src="./assets/js/popper.min.js"></script>

<script src="./assets/js/bootstrap.min.js"></script>

<!------------------------------ CSS --------------------------------------->
<link rel="stylesheet" href="./assets/css/main.css">


<!------------------------- Google icon ------------------------------------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!---------------------- Font awesome icon ---------------------------------->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------- Animate on scroll ------------------------------------>
<link href="./assets/css/aos.css" rel="stylesheet">

<!--------------------- Slick slider ----------------------------------------->
<link rel="stylesheet" type="text/css" href="./assets/css/slick.css" />
<script type="text/javascript" src="./assets/js/slick.min.js"></script>

<style>
/*------------------------------Fixing background images-------------------------------*/


/*------------------------------Slide Papper rocket image fix---------------------*/

.slider-section-main {
    background-image: url('./assets/images/hero-banner-bg-1.png');
}

/*------------------------------------Desktop devices--------------------------------------*/
@media (min-width: 1024px) {
    .slide-2 {
        background-image: url('./assets/images/Up-arrow.png');
        background-position: center left 350px;
        background-repeat: no-repeat;
    }

    .slide-1,
    .slide-3 {
        background-image: url('./assets/images/Down-arrow.png');
        background-position: bottom 0 left 250px;
        background-repeat: no-repeat;
    }
}


/* ---------------------------Process section background image fix-------------------------- */

/*----------------------------------Mobile and tab devices---------------------------------*/
@media (min-width: 481px) and (max-width: 1024px) {
    .process-background-image {
        background-image: url('./assets/images/Footer-uparrow.png');
        background-position: center center;
        background-repeat: no-repeat;
    }
}

.process-background-image {
    background-image: url('./assets/images/process-papper-rocket.png');
    background-position: left 350px center;
    background-repeat: no-repeat
}

@media (min-width: 481px) and (max-width: 1300px) {
    .process-column {
        margin-top: 0px;
    }

    .process-background-image {
        background-image: url('./assets/images/Footer-uparrow.png');
        background-position: left 350px center;
        background-repeat: no-repeat
    }
}

/* -------------------------Fixing footer section background image---------------------- */
.footer-col-1 {
    background-image: url('./assets/images/Footer-uparrow.png');
    background-repeat: no-repeat;
    background-position: center top 45px;
    height: auto;
    padding-left: 20px;
}

/*-----------------------------Tablets and mobile device-------------------------------*/
@media (min-width: 481px) and (max-width: 1024px) {
    .footer-col-1 {
        background: none;
    }
}


/*-----------------------------Testimonial responsive---------------------------------*/

/*-------------------------------Mobile devices---------------------------------------*/

@media (min-width: 481px) and (max-width: 1024px) {
    .testimonial-mobile {
        display: unset;
    }

    .testimonial-desktop {
        display: none;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        height: 50px;
        width: 50px;
        outline: black;
        background-color: black;
        background-size: 50%, 50%;
        border-radius: 50%;
        border: 1px solid black;
    }
}

/*------------------------------Desktop devices-------------------------------------*/
@media (min-width: 1024px) {
    .testimonial-mobile {
        display: none;
    }
}
</style>
<base href="http://localhost/ap-website/" />
<!-- <base href="https://applogiq.in/" /> -->
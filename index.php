<!DOCTYPE html>
<html>

<head>
    <title>Background Image with Centered Text</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-...">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .cont1 {
            background-image: url('./assest/Interiors Service Banner.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            position: relative;
        }

        .text {
            position: absolute;
            margin: 5rem;
            color: white;
        }

        .text h1 {
            font-size: 3rem;
        }

        .text button {
            padding: 1.2rem;
            width: 17rem;
            font-size: 1rem;
        }

        .cont2 {
            background-image: url('./assest/AboutUS.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .cont2-about {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 100vh;
            flex-wrap: nowrap;
        }

        .our-year {
            width: 17rem;
            height: 17rem;
            background-image: url('./assest/21Years.png');
            background-size: cover;
            background-position: center;
            margin: 3rem;
        }

        .about {
            display: flex;
            /* align-items: center; */
            justify-content: center;
            flex-direction: column;
            margin: 3rem;
        }

        .about h1 {
            color: white;

        }

        .about p {
            color: white;
            display: block;
        }

        .reading {
            width: 17rem;
            height: 17rem;
            margin: 3rem;
        }

        .reading p {
            color: white;
            text-align: justify;
            margin-bottom: 3rem;
        }

        .reading button {
            background: none;
            border: none;
            outline: none;
            color: white;
            background-color: #10566F;
            text-align: justify border !important;
            border-radius: 3rem;
            border-radius: 2px solid #10566F !important;
            padding: 0.8rem;
            width: 15rem;
        }

        /* Font */
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            padding: 0px;
            margin: 0px;
        }

        body {
            color: #272727;
            font-family: 'Quicksand', serif;
            font-style: normal;
            font-weight: 400;
            letter-spacing: 0;

        }

        .main {
            max-width: 100%;
            /* margin: 0 auto; */
            background-image: url('./assest/ServicesBackground.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        h1 {
            font-size: 24px;
            font-weight: 400;
            /* text-align: center; */
        }

        img {
            height: auto;
            max-width: 100%;
            /* vertical-align: middle; */
        }

        .btn {
            /* color: #ffffff; */
            padding: 0.8rem;
            font-size: 0.8rem;
            border-radius: 4px;
            /* font-weight: 400; */
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: transparent;
            font-weight: bold;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 3rem;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            /* background-color: white; */
            border-radius: 0.25rem;
            /* box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25); */
            display: flex;
            flex-direction: column;
            overflow: hidden;
            padding: 0.3rem;
        }

        .card_image {
            position: relative;
        }

        .text-container {
            position: absolute;
            top: 10%;
            left: 35%;
            transform: translate(-50%, -35%);
            /* text-align: center; */
            width: 70%;
            /* font-size: 0.5rem; */
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #FFFFF7;
            height: 4.5rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 0 4%;
        }

        .text-container h1 {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 0px;
        }

        .text-container p {
            font-size: 15px;
            margin-top: 0px;
        }

        .card_content {
            padding: 0 7%;
            margin-top: 1.2rem;
            background-color: white;
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        .why-us {
            padding: 2rem;
            position: relative;
            height: 120vh;
        }

        .why-us-heading h1 {
            font-size: 2.4rem;
            color: #000;
            font-weight: bold;
        }

        .why-us-sub {
            display: flex;
            /* align-items: center; */
            justify-content: space-around;
            position: absolute;
            margin-top: -2.1rem;
        }

        .why-image img {
            height: 39rem;
            /* vertical-align: middle; */
            margin-left: 1.5rem;
            margin-bottom: 3rem;
        }

        .why_main {
            max-width: 60vw;
            margin: 0 auto;
        }


        .why_card_image img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .why_cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }


        .why_cards_item {
            flex-basis: 50%;
            padding: 1rem;
            box-sizing: border-box;
        }

        @media (min-width: 40rem) {

            .why_cards_item:nth-child(1),
            .why_cards_item:nth-child(2) {
                flex-basis: 50%;
            }

            .why_cards_item:nth-child(3),
            .why_cards_item:nth-child(4) {
                flex-basis: 50%;
            }
        }

        @media (min-width: 40rem) {
            .why_cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .why_cards_item {
                width: 33.3333%;
            }
        }

        .why_card {
            /* background-color: white; */
            border-radius: 0.25rem;
            /* box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25); */
            display: flex;
            flex-direction: column;
            overflow: hidden;
            align-items: center;
        }

        .why_card_content {
            padding: 0px;
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .why_card_text {
            color: black;
            font-size: 0.875rem;
            line-height: 1.5;
            /* margin-bottom: 1.25rem; */
            font-weight: 400;
            text-align: center !important;
        }

        .card_text_head {
            color: #10566F;
            font-weight: bold;
            margin-bottom: 0px;
        }

        .why-us-heading {
            display: flex;
            flex-direction: column
        }

        .why-us p:first-child {
            color: #10566F;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            }
        }


        .our-project {
            max-width: 100%;
            background-color: #272727;
            height: 133vh;
            padding: 3rem 3rem;
        }

        .our-project h1 {}

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 10px;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            }
        }

        /* ============ tesitimonial section ================*/

        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .T-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 3rem;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url('img/heading-line.png');
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background-image: url('./assest/Testimonials.jpg');
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*-----Testimonial-------*/

        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(img/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*-----Testimonial-------*/

        .testimonial:after {
            position: absolute;
            top: -0 !important;
            left: 0;
            content: " ";
            background: url("./assest/Testimonials.jpg");
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        .testimonial {
            min-height: 375px;
            position: relative;
            background: url('./assest/Testimonials.jpg');
            padding-top: 50px;
            padding-bottom: 50px;
            background-position: center;
            background-size: cover;
        }

        #testimonial4 .carousel-inner:hover {
            cursor: -moz-grab;
            cursor: -webkit-grab;
        }

        #testimonial4 .carousel-inner:active {
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }

        #testimonial4 .carousel-inner .item {
            overflow: hidden;
        }

        .testimonial4_indicators .carousel-indicators {
            left: 0;
            margin: 0;
            width: 100%;
            font-size: 0;
            height: 20px;
            bottom: 15px;
            padding: 0 5px;
            cursor: e-resize;
            overflow-x: auto;
            overflow-y: hidden;
            position: absolute;
            text-align: center;
            white-space: nowrap;
        }

        .testimonial4_indicators .carousel-indicators li {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            text-indent: 0;
            margin: 2px 3px;
            cursor: pointer;
            display: inline-block;
            background: #ffffff;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }

        .testimonial4_indicators .carousel-indicators .active {
            padding: 0;
            width: 14px;
            height: 14px;
            border: none;
            margin: 2px 3px;
            background-color: #9dd3af;
            -webkit-border-radius: 100%;
            border-radius: 100%;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
            height: 3px;
        }

        .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
            background: #eeeeee;
            -webkit-border-radius: 0;
            border-radius: 0;
        }

        .testimonial4_control_button .carousel-control {
            top: 175px;
            opacity: 1;
            width: 40px;
            bottom: auto;
            height: 40px;
            font-size: 10px;
            cursor: pointer;
            font-weight: 700;
            overflow: hidden;
            line-height: 38px;
            text-shadow: none;
            text-align: center;
            position: absolute;
            background: transparent;
            border: 2px solid #ffffff;
            text-transform: uppercase;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
            transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
        }

        .testimonial4_control_button .carousel-control.left {
            left: 7%;
            top: 50%;
            right: auto;
        }

        .testimonial4_control_button .carousel-control.right {
            right: 7%;
            top: 50%;
            left: auto;
        }

        .testimonial4_control_button .carousel-control.left:hover,
        .testimonial4_control_button .carousel-control.right:hover {
            color: #000;
            background: #fff;
            border: 2px solid #fff;
        }

        .testimonial4_header {
            top: 0;
            left: 0;
            bottom: 0;
            width: 550px;
            display: block;
            margin: 30px auto;
            text-align: center;
            position: relative;
        }

        .testimonial4_header h4 {
            color: #ffffff;
            font-size: 30px;
            font-weight: 600;
            position: relative;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .testimonial4_slide {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 70%;
            margin: auto;
            padding: 20px;
            position: relative;
            text-align: center;
        }

        .testimonial4_slide img {
            top: 0;
            left: 0;
            right: 0;
            width: 136px;
            height: 136px;
            margin: auto;
            display: block;
            color: #f2f2f2;
            font-size: 18px;
            line-height: 46px;
            text-align: center;
            position: relative;
            border-radius: 50%;
            box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
            -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
        }

        .testimonial4_slide p {
            color: #ffffff;
            font-size: 20px;
            line-height: 1.4;
            margin: 40px 0 20px 0;
        }

        .testimonial4_slide h4 {
            color: #ffffff;
            font-size: 22px;
        }

        .testimonial .carousel {
            padding-bottom: 50px;
        }

        .testimonial .carousel-control-next-icon,
        .testimonial .carousel-control-prev-icon {
            width: 35px;
            height: 35px;
        }

        /* ------testimonial  close-------*/

        .complete_project {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Add your custom CSS styles here */
        .my-carousel {
            position: relative;
            max-width: 88vw;
        }

        .my-carousel .slick-dots {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1rem;
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .my-carousel .slick-dots li {
            margin: 0 5px;
        }

        .my-carousel .slick-dots li button {
            width: 1.1rem;
            height: 0.6rem;
            background-color: #10566F;
            border: none;
            padding: 0;
        }

        .my-carousel .slick-dots li.slick-active button {
            background-color: #10566F;
            width: 1.3rem;
            height: 0.8rem;
        }

        /* Hide default slick dots styles */
        .slick-dots li button:before {
            content: none;
        }

        .slick-slide img {
            width: 13rem;
            height: auto;
            border: 1px solid #bebbbb;
            padding: 1rem;
        }

        .slick-initialized .slick-slide {
            display: grid;

        }

        .slick-list .slick-track {
            margin-left: 2rem;
            height: 20rem;
        }

        .comp-pro {
            width: 16rem !important;
        }

        .Project_main {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-left: 5rem;
        }

        .Project_main_heading {
            margin-bottom: 3rem;
        }

        .Project_main_heading h1 {
            color: #10566F;
            font-weight: lighter;
        }

        /* ~~~~~~~~~~~~contact us~~~~~~~~~~ */
        .contact-us {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url("assest/Footer.jpg");
        }

        .contact-us-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .contact-us-text {
            display: flex;

            flex-direction: column;
            height: 80vh;
            width: 40vw;
            margin-top: 5rem;
            /* background-color: #000; */
            margin-right: 10rem;
        }

        .contact-us-text h1 {
            color: white;
            font-size: 2.8rem;
            font-weight: bold;
        }

        .contact-us-form {
            height: 92vh;
            width: 30vw;
            background-color: white;
            padding: 3rem;
        }

        .contact-us-way {
            display: flex;
            flex-direction: column;
        }

        .contact-us-way p {
            color: white;
            font-size: 0.9rem;
            font-weight: normal;
        }

        .address h4 {
            color: white;
            margin-top: 3rem;
        }

        .social-links a {
            text-decoration: none;
            color: white;
            margin-right: 1.5rem;
        }



        /* .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    } */



        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 600px) {
            .container {
                max-width: 100%;
            }
        }

        .submit {
            border: none;
            background-color: #0078AA;
            color: white;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="cont1">
        <div class="container">
            <div class="text">
                <h1>Interior Excellence <br>Your Vision Realized</h1>
                <button><strong>Get your free consulting<strong></button>
            </div>
        </div>
    </div>
    <div class="cont2">
        <div class="cont2-about">
            <div class="our-year">
            </div>
            <div class="about">
                <p>ABOUT US</p>
                <h1>Creative solutions <br> by professional <br> designers </h1>
            </div>
            <div class="reading">
                <p>If anyone looking for the best designing company in Delhi NCR and PAN India than sense interior is
                    the best and only option for you we have 1300+ happy clients. for them we have worked and as per
                    their requirement we have the ability to execute and fulfill the need and dream of each clients</p>
                <button>Continue Reading</button>
            </div>
        </div>
    </div>
    <div class="main">
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/1.jpg">
                        <div class="text-container">
                            <h1><strong>Residential</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">
                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/2.jpg">
                        <div class="text-container">
                            <h1><strong>Corporate</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">

                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/3.jpg">
                        <div class="text-container">
                            <h1><strong>Retail</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">

                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/4.jpg">
                        <div class="text-container">
                            <h1><strong>Hospitality</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">

                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/5.jpg">
                        <div class="text-container">
                            <h1><strong>Industrial</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">

                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="./assest/6.jpg">
                        <div class="text-container">
                            <h1><strong>Institutional</strong></h1>
                            <p>Interior Designing</p>
                        </div>
                    </div>
                    <div class="card_content">

                        <button class="btn card_btn">Get your free consulting</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <section>
        <div class="why-us">
            <p>WHY CHOOSE US</p>
            <div class="why-us-sub">
                <div class="why-us-heading">
                    <h1>
                        <span class="why-us-span">We work to an extremely high</span> <br>
                        <span class="why-us-span">standard of customer satisfaction</span>
                    </h1>
                    <div class="why_main">
                        <ul class="why_cards">
                            <li class="why_cards_item">
                                <div class="why_card">
                                    <div class="why_card_image"><img src="./assest/Icon1.png"></div>
                                    <div class="why_card_content">
                                        <p class="card_text_head">20+ Year of Experience</p>
                                        <p class="why_card_text">We are 20 plus year interior design company in the
                                            region
                                            of Delhi Noida
                                            Gurgaon Faridabad and Ghaziabad. providing us to be the best designing
                                            company
                                            who provides
                                            the best service.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="why_cards_item">
                                <div class="why_card">
                                    <div class="why_card_image"><img src="./assest/Icon2.png"></div>
                                    <div class="why_card_content">
                                        <p class="card_text_head">Skilled Professional</p>
                                        <p class="why_card_text">Our skilled and experienced employees are
                                            professionally
                                            competent in
                                            designing handling and executing your designing need our people are hungry
                                            for
                                            the work &
                                            excited for the new project.</p>

                                    </div>
                                </div>
                            </li>
                            <li class="why_cards_item">
                                <div class="why_card">
                                    <div class="why_card_image"><img src="./assest/Icon3.png"></div>
                                    <div class="why_card_content">

                                        <p class="card_text_head">Guaranteed Results</p>
                                        <p class="why_card_text">Don't think that your work is is guaranteed by small
                                            designing from
                                            accurately. but we as leading designing from promise to get your designing
                                            needs
                                            completed
                                            on time and at affordable capitalization.</p>

                                    </div>
                                </div>
                            </li>
                            <li class="why_cards_item">
                                <div class="why_card">
                                    <div class="why_card_image"><img src="./assest/Icon4.png"></div>
                                    <div class="why_card_content">
                                        <p class="card_text_head">Dedicated Project Manager</p>
                                        <p class="why_card_text">We understand the importance of a personal touch that's
                                            why
                                            we provide our
                                            dedicated project manager for better coordination and with getting you're
                                            done
                                            with
                                            perfection.</p>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="why-image">
                    <img src="./assest/WhychooseUs.png">
                </div>
            </div>
        </div>
    </section>

    <!-- our-project-section -->

    <section class="our-project-section">
        <div class="our-project">
            <p>Our Projects</p>
            <h2>Explore our interior designs</h2>
            <!-- complete projects section start -->
            <div class="grid-container">
                <div class="grid-item"><img src="assest/Collage1.png" alt="Image 1"></div>
                <div class="grid-item"><img src="assest/Collage2.png" alt="Image 2"></div>
                <div class="grid-item"><img src="assest/Collage3.png" alt="Image 3"></div>
                <div class="grid-item"><img src="assest/Collage4.png" alt="Image 4"></div>
                <div class="grid-item"><img src="assest/Collage5.png" alt="Image 5"></div>
                <div class="grid-item"><img src="assest/Collage6.png" alt="Image 6"></div>
                <div class="grid-item"><img src="assest/Collage7.png" alt="Image 7"></div>
                <div class="grid-item"><img src="assest/Collage8.png" alt="Image 8"></div>
                <div class="grid-item"><img src="assest/Collage9.png" alt="Image 9"></div>
            </div>
        </div>
    </section>

    <!-- testimonial section start -->

    <section class="testimonial text-center">
        <div class="T-container">

            <div class="heading white-heading">
                Testimonial
            </div>
            <div id="testimonial4"
                class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 3</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <section class="complete_project"><!-- complete projects section start -->
        <div class="Project_main">
            <div class="Project_main_heading">
                <h1>OUR CLIENTS</h1>
            </div>
            <div>
                <div class="my-carousel">
                    <div class="comp-pro"><img src="assest/client-20.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-13.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-14.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-15.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-16.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                    <div class="comp-pro"><img src="assest/client-19.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us">
        <div class="contact-us-container">
            <div class="contact-us-text">
                <h1>Way To Contact Us</h1>
                <div class="contact-us-way">
                    <p>Contact Sense Interiors to start your dream project with our team of expert designers to make an
                        offer or simply ask a question.
                    </p>
                    <p>We are open from Monday to Saturday / 09:00 - 18:00
                    </p>
                    <div class="social-links">
                        <!-- <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></a> -->
                        <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="address">
                    <h4>DLF Prime Tower, <br>
                        Okhla Phase 1, Delhi - 110020 <br>
                        +919821995637 <br>
                        info@senseinteriors.in</h4>
                </div>

            </div>
            <div class="contact-us-form">

                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="mobile number" id="mobile number" name="mobile number" placeholder="Mobile Number"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="subject" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="form-submit">
                        <input class=submit type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>


    <!-- Include the Slick CSS and JavaScript files -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script> -->

    <script>
        // $(document).ready(function () {
        //     $('.my-carousel').slick({
        //         arrows: false,
        //         dots: true,
        //         slidesPerRow: 3,
        //         rows: 2,
        //         dots: true,
        //         responsive: [
        //             {
        //                 breakpoint: 768,
        //                 settings: {
        //                     slidesPerRow: 2,
        //                     rows: 3
        //                 }
        //             }
        //         ]
        //     });
        // });
        $(document).ready(function () {
            $('.my-carousel').slick({
                items: 4,
                nav: true,
                loop: true,
                row: 2,
                arrows: false,
                dots: true,
                slidesPerRow: 4,
                rows: 2,
                dots: true,
                mouseDrag: true,
                responsiveClass: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 1,
                    },
                    767: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1200: {
                        items: 3,
                    },
                },
            });
        });
    </script>
</body>

</html>
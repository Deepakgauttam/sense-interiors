<!DOCTYPE html>
<html>

<head>
    <title>Background Image with Centered Text</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
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

        /* .testimonial {
            width: 100%;
            min-height: 100vh;
            box-sizing: border-box;
            background-image: url('./assest/Testimonials.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        } */
       
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
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</body>

</html>
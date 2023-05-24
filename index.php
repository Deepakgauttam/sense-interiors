<!DOCTYPE html>
<html>

<head>
    <title>Background Image with Centered Text</title>
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
            vertical-align: middle;
        }

        .btn {
            /* color: #ffffff; */
            padding: 0.8rem;
            font-size: 0.8rem;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
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
            left: 33.5%;
            transform: translate(-50%, -35%);
            text-align: center;
            width: 67%;
            /* font-size: 0.5rem; */
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #FFFFF7;
            height: 4.5rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
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

        .made_by {
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
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
                    <div class="card_image"><img src="./assest/2.jpg">
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
                    <div class="card_image"><img src="./assest/3.jpg">
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
                    <div class="card_image"><img src="./assest/6.jpg">
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
        </ul>
    </div>


    <!-- <div class="cont3">
        <div class="cont3-design">
            <div class="design">
                <div class="design-img">
                    <img src="./assest/1.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>
            <div class="design">
                <div class="design-img">
                    <img src="./assest/2.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>
            <div class="design">
                <div class="design-img">
                    <img src="./assest/3.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>
            <div class="design">
                <div class="design-img">
                    <img src="./assest/4.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>
            <div class="design">
                <div class="design-img">
                    <img src="./assest/5.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>
            <div class="design">
                <div class="design-img">
                    <img src="./assest/6.jpg" alt="Your Image">
                    <div class="text-container">
                        <h1><strong>Hospitality</strong></h1>
                        <p>Interior Designing</p>
                    </div>
                </div>
                <button><strong>Get your free consulting<strong></button>
            </div>

        </div> -->
    </div>
    </div>
</body>

</html>
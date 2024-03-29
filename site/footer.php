
<!--<h1>here</h1>-->

<body>
    <style>
        .footer-distributed{
            border-top: #99cb99 5px solid;
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 106.5%;
            font: bold 16px sans-serif;
            text-align: center;

            padding: 50px 60px 40px;
            overflow: hidden;
        }
        /* Footer left */

        .footer-distributed .footer-left{
            float: left;
        }

        .footer-right button:hover{
            background-color: white;
            color: black;
        }
        /* The company logo */

        .footer-distributed h3{
            color:  #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0 0 10px;
        }

        .footer-distributed h3 span{
            color:  #5383d3;
        }

        /* Footer links */

        .footer-distributed .footer-links{
            color:  #ffffff;
            margin: 0 0 10px;
            padding: 0;
        }

        .footer-distributed .footer-links a{
            display:inline-block;
            line-height: 1.8;
            text-decoration: none;
            color:  inherit;
        }

        .footer-distributed .footer-company-name{
            color:  #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer social icons */

        .footer-distributed .footer-icons{
            margin-top: 40px;
        }
        .footer-distributed .footer-icons a:hover{
            background-color: white;
            color: black;
        }
        .footer-distributed .footer-icons a{
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color:  #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* Footer Right */

        .footer-distributed .footer-right{
            float: left;
            display: block;
        }

        .footer-distributed .footer-right p{
            display: inline-block;
            vertical-align: top;
            margin: 15px 42px 11 0;
            color: #ffffff;
        }

        /* The contact form */

        .footer-distributed form{
            display: inline-block;
        }

        .footer-distributed form input,
        .footer-distributed form textarea{
            display: block;
            border-radius: 3px;
            box-sizing: border-box;
            background-color:  #1f2022;
            box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
            border: none;
            resize: none;

            font: inherit;
            font-size: 14px;
            font-weight: normal;
            color:  #d1d2d2;

            width: 400px;
            padding: 18px;
        }

        .footer-distributed ::-webkit-input-placeholder {
            color:  #5c666b;
        }

        .footer-distributed ::-moz-placeholder {
            color:  #5c666b;
            opacity: 1;
        }

        .footer-distributed :-ms-input-placeholder{
            color:  #5c666b;
        }


        .footer-distributed form input{
            height: 55px;
            margin-bottom: 15px;
        }

        .footer-distributed form textarea{
            height: 100px;
            margin-bottom: 20px;
        }
        .footer-left,.footer-right{margin-right: 15px;}
        .footer-header{text-align: center; margin:7px;}
        .footer-distributed form button{
            border-radius: 3px;
            background-color:  #33383b;
            color: #ffffff;
            border: 0;
            padding: 15px 50px;
            font-weight: bold;
            float: right;
        }

        /* If you don't want the footer to be responsive, remove these media queries */

        @media (max-width: 1000px) {

            .footer-distributed {
                font: bold 14px sans-serif;
            }

            .footer-distributed .footer-company-name{
                font-size: 12px;
            }

            .footer-distributed form input,
            .footer-distributed form textarea{
                width: 250px;
            }


            .footer-distributed form button{
                padding: 10px 35px;
            }

        }

        @media (max-width: 800px) {

            .footer-distributed{
                padding: 30px;
            }

            .footer-distributed .footer-left,
            .footer-distributed .footer-right{
                float: none;
                max-width: 300px;
                margin: 0 auto;
            }

            .footer-distributed .footer-left{
                margin-bottom: 40px;
            }

            .footer-distributed form{
                margin-top: 30px;
            }

            .footer-distributed form{
                display: block;
            }

            .footer-distributed form button{
                float: none;
            }
        }

    </style>

    <!-- The content of your page would go here. -->

    <footer class="footer-distributed" >

        <div class="footer-left" style="width: 30%;">

            <img src="./login/img/freeze/logo.png" alt=""/>
            <h3>Network<span>Signals</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Shorouk Academy &copy; 2015</p>
            <p class="footer-company-name">Team 31</p>


            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

        <div class="footer-right" style="float: left; display: block; width: 30%;">
            <p style="color: #5383d3; font-size: 21px;">About Us</p>
            <p>
                The “Network Signal” is a GPS-based mobile application
                which helps people to find the best signals distribution according to
                samples took at a specific time which can show information
                like user’s current position
                ,call problems(call drop, silent call , cross talk)
                ,mobile information (network operator, Network type,
                network strength, cell information, IMSI, IMEI).<br><br>Get general
                information about user's mobile information
                (Mobile brand, OS information, CPU information, Battery information),
                also see to help to determine the reasons of problem.
            </p>
        </div>

        <div class="footer-right" style="width: 30%;">

            <p style="color: #5383d3; font-size: 21px;">Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email" />
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>

</body>

</html>

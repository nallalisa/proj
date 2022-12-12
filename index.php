<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <script src="css/js/bootstrap.bundle.min.js"></script>
    <title>Welcome</title>
    <style>
        @font-face {
            font-family: 'vogamedium';
            src: url('fonts/Voga/cdtype_-_voga_medium-webfont.woff2') format('woff2'),
                url('fonts/Voga/cdtype_-_voga_medium-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'alataregular';
            src: url('fonts/Alata/alata-regular-webfont.woff2') format('woff2'),
                url('fonts/Alata/alata-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'playfair';
            src: url('fonts/Playfair/playfairdisplay-variablefont_wght-webfont.woff2') format('woff2'),
                url('fonts/Playfair/playfairdisplay-variablefont_wght-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        html,
        body,
        .container-fluid {
            height: 100%;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            background: url('images/aqua_bg.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .box {
            text-align: center;
            color: #032666;
            display: block;
            width: 100%;
            height: 100%;
            /*background-color: black;*/
            font-stretch:narrower;
            font-family: 'playfair';
            padding-top: 100px;
        }

        .box h1 {
            font-size: 100px;
            text-transform: uppercase;
            text-shadow: 6px 2px 2px #68C8FF;
        }

        .box p{
            font-size: 26px;
            font-family: 'consolas';
            color: white;
            text-shadow: 2px 2px 4px #000000;
        }
        .btn {
            width: 150px;
            height: 50px;
            border: none;
            border-radius: 50px;
            background: #2770E1;
            margin: 10px 30px;
            padding-top: 11px;
            color: white;
        }
        .btn:hover{
            background: #24B3FF;
            color: white;
        }
        .soc {
            text-align: left;
            /*background: red;*/
            height: 20%;
            padding-top: 15px;
            margin-left: 50px;
            color: white;
            font-family: 'alataregular';


        }

        .soc img {
            width: 25px;
        }

        .soc h4{
            font-size: 16px;
        }

        .welcome-text {
            height: 60%;
            /*background-color: blue;*/
            padding-top: 100px;
        }

        .button {
            /*background: orange;*/
            height: 20%;
            font-family: 'alataregular';
        }

        h4,
        h5,
        h6 {
            display: inline-block;
        }

        .grid-container{
            display: grid;
            grid-template-areas: 
                'logo phone'
                'logo phone'
            ;
            justify-content: flex-start;
        }
        .logo{
            grid-area: logo;
        }
        .logo img{
            margin: 0 10px;
            height: 65px;
            width: 30px;
            
            
        }
        .phone{
            grid-area: phone;
        }
        .phone h4{
            margin: 5px 0;
            text-shadow: 2px 2px 4px #000000;
        }
    </style>
</head>

<body>
    <div class="container-fluid center">
        <div class="box">
            <div class="welcome-text center">
                <div>
                    <h1>aqualeen</h1>
                    <p>Purified Drinking Water</p>
                </div>
            </div>
            <div class="button center">
                <a href="home.php" class="btn">Shop Now</a>
            </div>
            <div class="soc grid-container">
                <div class="logo">
                    <img src="images/phone.png" alt="" srcset="">
                </div>
                <div class="phone">
                    <h4>+63 917-307-3695</h4>
                    <br>
                    <h4>+63 907-446-3625</h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
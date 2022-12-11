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
            background: url('images/51368.jpg');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .box {
            text-align: center;
            color: white;
            display: block;
            width: 100%;
            height: 100%;
            /*background-color: black;*/
        }

        .box h1 {
            font-size: 72px;
            width: 500px;
            margin: 10px auto;
            text-transform: uppercase;
        }

        .btn {
            width: 150px;
            height: 50px;
            border: none;
            border-radius: 50px;
            background: #373434;
            margin: 10px 30px;
            padding-top: 11px;
        }

        .bi-telephone,
        .bi-facebook {
            padding: 4px 6px;
            border-radius: 50%;
        }

        .bi-telephone {
            border: 2px solid white;
        }

        .soc {
            text-align: left;
            /*background: red;*/
            height: 20%;
            padding-top: 15px;
        }

        .welcome-text {
            height: 60%;
            /*background-color: blue;*/
            padding-top: 100px;
        }

        .button {
            /*background: orange;*/
            height: 20%;
        }

        h4,
        h5,
        h6 {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container-fluid center">
        <div class="box">
            <div class="welcome-text center">
                <div>
                    <h1>Maria's Wardrobe</h1>
                    <p>Clothing Shop</p>
                </div>
            </div>
            <div class="button center">
                <a href="home.php" class="btn btn-dark">Shop Now</a>
            </div>
            <div class="soc">
                <div>
                    <h4 class="bi bi-facebook"></h4><span> @mariaswardrobeph</span>
                </div>
                <div>
                    <h5 class="bi bi-telephone"></h5><span> +63 966-586-8848</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
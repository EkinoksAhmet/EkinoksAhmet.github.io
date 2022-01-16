<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>

    <style>
        
        body {
            background: linear-gradient(to right, #003366, #006699, #0099cc, #00ccff);
        }

        .indexKarsilama {
            width: 1000px;
            height: 400px;
            background-color: darkblue;
            border-radius: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            list-style-type: none;
            z-index: -1;
        }
        
        .indexKarsilama li {
            padding: 25px;
            border: 5px solid white;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 30px;
        }

        .indexKarsilama li:hover {
            border: 5px solid #a3aab5;
            border-radius: 100%;
            transition: 0.5s;
            padding: 40px;
        }

        .indexKarsilama a {
            color: white;
            text-decoration: none;
            font-size: xx-large;
        }

        @media screen and (max-width: 1100px) {
            .indexKarsilama {
                width: 500px;
                height: 370px;
            }

            .indexKarsilama li {
                padding: 10px;
                border: 5px solid white;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 30px;
            }
        }

        @media screen and (max-width: 600px) {
            .indexKarsilama {
                width: auto;
                height: 460px;
                padding: 10px;
            }

            .indexKarsilama li {
                padding: 10px;
                border: 5px solid white;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 30px;
            }
        }

    </style>
</head>
<body>
    
    <?php include("header.html"); ?>


    <div class="indexKarsilama">
        <h1>HOŞGELDİNİZ!</h1><br>
        <h2>Üst bölümde yer alan navigation bar'dan site içeriklerine ulaşabilirsiniz.</h2><br><br>
        <li><a href="hakkinda.php">Devam</a></li>
    </div>

</body>
</html>
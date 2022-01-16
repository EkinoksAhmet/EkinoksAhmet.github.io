<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posterler</title>
</head>
<body>
    
    <?php include("header.html"); ?>

    <div style="margin: 10px;">
        <select name="unitelerPoster" id="unitelerPoster">
            <option value="unitelerPoster10-1">10. Sınıf - 1. Ünite</option>
            <option value="unitelerPoster10-2">10. Sınıf - 2. Ünite</option>
        </select><br>
        <input onclick="searchUnite()" type="submit" value="Ara">
    
        <div class="unitelerPosterler"><br>
    
            <div id="unitelerPoster10-1-1" style="display: none; border: 1px solid black; border-radius: 10px; padding: 10px; width: 200px;">
                <h2>Mitoz Bölünme</h2>
                <a href="content/images/mitozBolunme.png"><img src="content/images/mitozBolunme.png" style="border: 2px solid black; z-index: 0;" width="200px"></a>
            </div><br>

            <div id="unitelerPoster10-1-2" style="display: none; border: 1px solid black; border-radius: 10px; padding: 10px; width: 200px;">
                <h2>Mitoz Bölünmenin Evreleri</h2>
                <a href="content/images/mitozBolunmeEvreleri.png"><img src="content/images/mitozBolunmeEvreleri.png" style="border: 2px solid black; z-index: 0;" width="200px"></a>
            </div><br>

    
            <div id="unitelerPoster10-2-1" style="display: none; border: 1px solid black; border-radius: 10px; padding: 10px; width: 200px;">
                <h2>Mayoz Bölünme</h2>
                <a href="content/images/mayozBolunme.png"><img src="content/images/mayozBolunme.png" style="border: 2px solid black; z-index: 0;" width="200px"></a>
            </div><br>
    
        </div>
    </div>
    
    


    <script>
        function searchUnite() {
            var select = document.getElementById("unitelerPoster");

            if (select.options[select.selectedIndex].value == "unitelerPoster10-1") {
                document.getElementById("unitelerPoster10-1-1").style.display = "block";
                document.getElementById("unitelerPoster10-1-2").style.display = "block";
                document.getElementById("unitelerPoster10-2-1").style.display = "none";
            } else if (select.options[select.selectedIndex].value == "unitelerPoster10-2") {
                document.getElementById("unitelerPoster10-1-1").style.display = "none";
                document.getElementById("unitelerPoster10-1-2").style.display = "none";
                document.getElementById("unitelerPoster10-2-1").style.display = "block";
            }
        }


    </script>

</body>
</html>
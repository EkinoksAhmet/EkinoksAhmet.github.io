<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animasyonlar</title>
</head>
<body>

    <?php include("header.html"); ?>

    <div style="margin: 10px;">
        <select name="unitelerAnimasyon" id="unitelerAnimasyon">
            <option value="unitelerAnimasyon10-1">10. Sınıf - 1. Ünite</option>
            <option value="unitelerAnimasyon10-2">10. Sınıf - 2. Ünite</option>
        </select><br>
        <input onclick="searchUnite()" type="submit" value="Ara">
    
        <div class="unitelerAnimasyonlar"><br>
    
            <div id="unitelerAnimasyon10-1" style="display: none; border: 1px solid black; border-radius: 10px; padding: 10px; width: 200px;">
                <h2>Mitoz Bölünme</h2>
                <video style="border: 2px solid black; z-index: 0;" width="200px" controls>
                    <source src="content/videos/biyolojiMitozBolunme.mp4">
                </video>
            </div><br>
    
            <div id="unitelerAnimasyon10-2" style="display: none; border: 1px solid black; border-radius: 10px; padding: 10px; width: 200px;">
                <h2>Mayoz Bölünme</h2>
                <video style="border: 2px solid black; z-index: 0;" width="200px" controls>
                    <source src="content/videos/biyolojiMayozBolunme.mp4">
                </video>
            </div>
    
        </div>
    </div>
    
    


    <script>
        function searchUnite() {
            var select = document.getElementById("unitelerAnimasyon");

            if (select.options[select.selectedIndex].value == "unitelerAnimasyon10-1") {
                document.getElementById("unitelerAnimasyon10-1").style.display = "block";
                document.getElementById("unitelerAnimasyon10-2").style.display = "none";
            } else if (select.options[select.selectedIndex].value == "unitelerAnimasyon10-2") {
                document.getElementById("unitelerAnimasyon10-1").style.display = "none";
                document.getElementById("unitelerAnimasyon10-2").style.display = "block";
            }
        }


    </script>

</body>
</html>
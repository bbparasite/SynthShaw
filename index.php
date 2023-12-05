<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynthShaw | Home</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="constants/header.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Above stylesheet template from Bootstrap (getbootstrap.com)-->
    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        margin-left: 80px;
        display: flex;
        }

        .active {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 3s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }
    </style>
</head>

<body>
    <?php
    require('constants/header.php');
    require('constants/sidebar.php');
    ?>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="images/synthshaw.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/BannerscanHARSH.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/BATS.JPG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/block.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/Built-up_Floral.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/colekshon2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/Colekshon5.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/Colekshon6.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/Colekshon9.jpg" style="width:100%">
        </div>

         <div class="mySlides fade">
            <img src="images/assets/Feeteeth.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/NOT PREGNANT.JPG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/pnkskbk1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/pnkskbk3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/pnkskbk4.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/scrimprintlined.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/assets/This_N_That 2.jpg" style="width:100%">
        </div>
    </div>
    <?php
    require('constants/footer.php');
    ?>

    <script>
        window.onload = function(){
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) 
            {
                slideIndex = 1
            }    
            slides[slideIndex-1].style.display = "block";  
            setTimeout(showSlides, 3000); // Change image every 3 seconds
            }

            document.querySelector("#header").addEventListener("click", function () {
                window.location.href = "index.php";
            });

            let wordArr1 = [
                "Synth",
                "Scrim",
                "Machine",
                "Neural",
                "Quantum",
                "Autonomous",
                "Drone",
                "Augmented",
                "Virtual",
                "Data",
                "Analytic",
                "Cognitive",
                "Synthetica",
                "Swarm",
                "Dream",
                "Cyber",
                "Bio",
            ];

            let wordArr2 = [
                "Shaw",
                "Brain",
                "Bot",
                "Cyborg",
                "Machine",
                "Soft",
                "Cloud",
                "Synthetica",
                "Replicated",
                "Generated",
                "Sentience",
                "Conscious",
                "Bio",
                "Meta",
                "Punk",
                "Flesh",
                "Metal",
            ];

            let rand1 = Math.floor(Math.random() * 17);
            let rand2 = Math.floor(Math.random() * 17);

            let word1 = wordArr1[rand1];
            let word2 = wordArr2[rand2];

            let headerTxt = word1.concat(word2);

            let header = document.querySelector("#header");

            function textTypingEffect(element, text, i = 0) {
                if (i === 0) {
                element.innerHTML = " ";
                }

                element.innerHTML += text[i];

                if (i === text.length - 1) {
                return;
                }

                setTimeout(() => textTypingEffect(element, text, i + 1), 150);
            }

            textTypingEffect(header, headerTxt);
        }
    </script>
</body>
</html>
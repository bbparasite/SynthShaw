<!DOCTYPE html>
<html lang="en">

<style>
    .highlight {
        border: 2px solid red;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynthShaw | Create</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Above stylesheet template from Bootstrap (getbootstrap.com)-->

</head>

<body>
    <?php
    require('constants/header.php');
    require('constants/sidebar.php');
    ?>

    <button id="button"> Send request </button>
    <br>
    <img src="blendables/Adapter.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/Ev-1.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/pinch.png" height="250px" width="auto" class="blendable">
    <img src="blendables/wires.jpg" height="250px" width="auto" class="blendable">



    <?php
    require('constants/footer.php');
    ?>
</body>


<script>
    window.onload = function() {
        document
            .querySelector("#button")
            .addEventListener("click", function() {
                console.log("button press");
                makeFetchRequest();
            })

        clearSelection();
    };

    const makeFetchRequest = async () => {

    }

    //URLs of highlighted images
    let highlightedImages = [];


    function handleImageClick(event) {
        const clickedImage = event.target;

        // Toggle highlighting and add/remove URL from the array
        if (clickedImage.classList.contains('highlight')) {
            clickedImage.classList.remove('highlight');

            const url = clickedImage.src;
            const index = highlightedImages.indexOf(url);
            if (index > -1) {
                highlightedImages.splice(index, 1);
            }
        } else {
            clickedImage.classList.add('highlight');
            highlightedImages.push(clickedImage.src);
        }
        console.log('Highlighted Images:', highlightedImages);
    }

    // Add click event listener to all images with class 'blendable'
    const images = document.querySelectorAll('.blendable');
    images.forEach(image => {
        image.addEventListener('click', handleImageClick);
    });

    function clearSelection() {
        highlightedImages = [];
        console.log('Array cleared:', highlightedImages);
    }
</script>

</html>
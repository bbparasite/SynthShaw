<!DOCTYPE html>
<html lang="en">

<style>
    .highlight {
        border: 2px solid red;
        line-height: 20px;
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
    <img src="blendables/scrim.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/Adapter.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/collection2.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/pinch.png" height="250px" width="auto" class="blendable">
    <img src="blendables/frank.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/trample.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/fish.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/wires.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/silver2.png" height="250px" width="auto" class="blendable">
    <img src="blendables/hiss.jpeg" height="250px" width="auto" class="blendable">
    <img src="blendables/bacon.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/collection1.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/handwash.png" height="250px" width="auto" class="blendable">
    <img src="blendables/rfid.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/meateat.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/silver.png" height="250px" width="auto" class="blendable">
    <img src="blendables/collection3.jpg" height="250px" width="auto" class="blendable">
    <img src="blendables/toys.png" height="250px" width="auto" class="blendable">
    <img src="blendables/BATS.JPG" height="250px" width="auto" class="blendable">
    <img src="blendables/battersee.jpg" height="250px" width="auto" class="blendable">

    <?php
    require('constants/footer.php');
    ?>
</body>


<script>
    const imagesToBlend = null;
    window.onload = function() {
        document.querySelector("#header").addEventListener("click", function() {
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
        document
            .querySelector("#button")
            .addEventListener("click", function() {
                event.preventDefault();
                console.log("button press");
                sendBlendRequest();
            })

        clearSelection();

        function sendBlendRequest() {
            //send the urls to php...
            let newObj = {};
            newObj.urls = highlightedImages;
            let data = JSON.stringify(newObj);

            fetch('test_n.php', {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json"
                    },
                    credentials: "include",
                    body: data
                })
                .then((response) => response.json())
                .then((json) => {
                    // you can do what ever you want here
                    console.log(json)
                })
        }
    };


    //URLs of highlighted images
    let highlightedImages = [];
    let highlightedElements = [];


    function handleImageClick(event) {
        const clickedImage = event.target;
        highlightedElements.push(clickedImage);

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

        if (highlightedImages.length > 5) {
            highlightedElements[0].classList.remove("highlight");
            console.log(highlightedImages[0].classList);
            highlightedImages.shift();
            highlightedElements.shift();
        }
        console.log('Highlighted Images:', highlightedImages);
    }

    // Add click event listener to class 'blendable'
    const images = document.querySelectorAll('.blendable');
    images.forEach(image => {
        image.addEventListener('click', handleImageClick);
    });

    function clearSelection() {
        highlightedImages = [];
        console.log('Array cleared:', highlightedImages);
    }

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = json_decode(file_get_contents('php://input'), true);
        $imageArray = $_POST['images'];
        runBlend($imageArray);

        //var_dump($_POST);
        exit();
    }

    function runBlend($imageArray)
    {

        $apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjI4NSwiZW1haWwiOiJqZW5uYW1pbHlicm93bkBnbWFpbC5jb20iLCJ1c2VybmFtZSI6Implbm5hbWlseWJyb3duQGdtYWlsLmNvbSIsImlhdCI6MTY5OTM5MjUzMX0.9-5e0l-NJZgiFEtQ5d-cmuyH5zqJI-4VLWRa4bAZtfc';

        $url = 'https://api.mymidjourney.ai/api/v1/midjourney/blend';

        $curl = curl_init();

        $fields = array('urls' => $imageArray);

        $json_string = json_encode($fields);

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_POST, TRUE);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization:Bearer ' . $apiKey));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($curl);
        echo ($data);

        curl_close($curl);
    }


    ?>
</script>

</html>
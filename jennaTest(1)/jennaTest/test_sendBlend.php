<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST = json_decode(file_get_contents('php://input'), true);
    $imageArray = $_POST['images'];
    runBlend($imageArray );

   //var_dump($_POST);
   exit();
}
function runBlend($imageArray){

$apiKey='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjI4NSwiZW1haWwiOiJqZW5uYW1pbHlicm93bkBnbWFpbC5jb20iLCJ1c2VybmFtZSI6Implbm5hbWlseWJyb3duQGdtYWlsLmNvbSIsImlhdCI6MTY5OTM5MjUzMX0.9-5e0l-NJZgiFEtQ5d-cmuyH5zqJI-4VLWRa4bAZtfc';

$url = 'https://api.mymidjourney.ai/api/v1/midjourney/blend';

$curl = curl_init();

$fields = array('urls' =>$imageArray);

$json_string = json_encode($fields);

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_POST, TRUE);

curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization:Bearer '. $apiKey));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

$data = curl_exec($curl);
echo($data);

curl_close($curl);
}


?>

<html>
<head>
    <style>
        .blendable{
            width:200px;
            height:auto;
            margin:10px;
            
        }
    </style>
<head>
<body>
<img class = "blendable" src = "blendables/Adapter.jpg" />
<img class = "blendable" src = "blendables/EV-1.jpg" />
<input type ="button" id = "button" value="blend" />




<script>
window.onload = function() {
        document
            .querySelector("#button")
            .addEventListener("click", function() {
                event.preventDefault();
                console.log("button press");
                sendBlendRequest();
            })

       // clearSelection();
 
       function sendBlendRequest(){
        //send the urls to php...
        let newObj ={};
        newObj.images = highlightedImages;
        let data = JSON.stringify(newObj);

        fetch('test_n.php', {
        method: 'POST',
        headers: { "Content-Type": "application/json"},
        credentials:"include",
        body: data
        })
  .then((response) => response.json())
  .then((json) => {
    // you can do what ever you want here
    console.log(json)
  })
}

    let highlightedImages = [];

      // Add click event listener to class 'blendable'
      const images = document.querySelectorAll('.blendable');
    images.forEach(image => {
        image.addEventListener('click', handleImageClick);
    });

    function clearSelection() {
        highlightedImages = [];
        console.log('Array cleared:', highlightedImages);
    }

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
} //on load
  
</script>

</html>
</body>
</html>



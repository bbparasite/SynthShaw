<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynthShaw | Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://kit.fontawesome.com/49d34f23a6.js" crossorigin="anonymous"></script>
    <script defer src="javascript/gallery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Above stylesheet template from Bootstrap (getbootstrap.com)-->
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <!-- Above credits for Album example on Bootstrap (getbootstrap.com)-->
    <style>
        .container{
            margin-left: 0%;
            display: flex;
        }

        .gallery-item {
            cursor: pointer;
            overflow: hidden;
            border-radius: 4px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.3s ease-in-out;
        }

        .gallery-item img:hover {
            transform: scale(1.1);
        }

        /*Image modal*/

        .modal {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.733);
            margin-top: -1px;
            animation: zoom 0.3s ease-in-out;
        }

        .modal img {
            width: 50%;
            object-fit: cover;
        }

        /*Close modal*/
        .closeBtn {
            color: rgba(255, 255, 255, 0.87);
            font-size: 25px;
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .closeBtn:hover {
            color: rgb(255, 255, 255);
        }

        @keyframes zoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <?php
    require('constants/header.php');
    require('constants/sidebar.php');
    ?>
    <?php
    require_once __DIR__ . '/vendor/autoload.php';
    //put into try catch clause
    try {
        //1: connect to mongodb atlas
        $client = 
        new MongoDB\Client(
            "mongodb+srv://bbparasite:e7QTbOZ1SsA1wr7b@cart351.tiqjonx.mongodb.net/?retryWrites=true&w=majority"
        
        );
        //2: connect to collection (that exists):
        $collection = $client->CART351->SynthShawGallery;

        //3: find items
        //b: all results 
        $resultObject = $collection->find([]);

        //4: display the items
        echo"<div class='album py-5 bg-white'>";
        echo"<div class='container'>";
        echo"<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>";
        
        foreach($resultObject as $galleryItem){
        
            //go through each doc
        
        echo "<div class='col gallery-item'>";
        echo "<div class='card shadow-sm'>";
        $imagePath = $galleryItem["imagePath"];
        echo "<img class='card-img-top' width='100%' height='225' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false' src= $imagePath \>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";

        foreach($galleryItem as $key => $value)
        {
        if($key!="imagePath" && $key!="creationDate" && $key!="_id"){
        
        echo($value." ");
        }
        
        if( $key=="creationDate"){
            $dateTime = $value->toDateTime();
            echo($dateTime->format('Y-m-d')." ");  
        }
        
        
        }
        //end content
        echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        }
        //end gallery
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    
    catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    ?>
    <?php
    require('constants/footer.php');
    ?>
</body>

</html>
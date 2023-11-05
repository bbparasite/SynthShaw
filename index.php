<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SynthShaw</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .hero-image {
            background-image: url("images/synthshaw.PNG");
            background-color: #cccccc;
            height: 800px;
            width: 1000px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <?php
    require('header.php');
    require('sidebar.php');
    ?>
    <div class="hero-image"></div>
    <footer class="footer mt-auto py-3 bg-body-tertiary text-center">
        <div class="container">
            <span class="text-body-secondary">Programming by Jenna Brown and Jayden Thompson. Artwork by Evelyn Hodgson.</span>
        </div>
    </footer>
</div>
</body>
</html>
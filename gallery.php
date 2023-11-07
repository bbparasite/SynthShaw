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

      @media (max-width: 950px) {
          .album {
              grid-template-columns: repeat(2, 1fr);
          }
      }

      @media (max-width: 550px) {
          .album {
              grid-template-columns: repeat(1, 1fr);
          }
      }
    </style>
</head>

<body>
    <?php
    require('constants/header.php');
    require('constants/sidebar.php');
    ?>
    <div class="album py-5 bg-white">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col gallery-item">
          <div class="card shadow-sm">
            <img class="card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="images/synthshaw.PNG"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
    require('constants/footer.php');
    ?>
</body>

</html>
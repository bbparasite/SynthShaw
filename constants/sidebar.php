<style>
    .sidenav {
        height: 100%;
        width: 200px;
        z-index: 1;
        top: 0;
        left: 0;
        padding-right: 50px;
        float: right;
        position: relative;
        overflow-x: hidden;
        padding-top: 50px;
        font-family: "Margarine";

    }

    .sidenav a {
        padding: 8px 8px 8px 8px;
        text-decoration: none;
        font-size: 35px;
        color: black;
        display: block;
    }

    .sidenav p {
        /* used for inactive links */
        font-size: 35px;
        color: grey;
    }

    .sidenav a:hover {
        color: #FC03E3;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    #offset-nav {
        padding-left: 50px;
    }
</style>

<div id="mySidenav" class="sidenav">
    <a href="index.php">Home</a>
    <a href="create.php" id="offset-nav">Create</a>
    <p><em>Family</em></p>
    <a href="gallery.php" id="offset-nav">Gallery</a>
    <p><em>Info</em></p>
</div>
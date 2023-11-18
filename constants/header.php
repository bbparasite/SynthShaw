<main>
    <img id="header" src="./images/assets/synthshaw.jpg" width="450px" height="auto">
</main>

<script>
    window.onload = function() {
        document
            .querySelector("#header")
            .addEventListener("click", function() {
                window.location.href = "index.php"
            })
    }
</script>
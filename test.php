<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide Search on Click</title>
    <style>
        #searchBox {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            display:none;
        }
    </style>
</head>
<body>
        <p id="searchButton">hello</p>
        <form id="searchBox" >
    <input type="text" placeholder="Search here...">
    <button >Search</button>
    </form>
    <script>
        document.getElementById("searchButton").addEventListener("click", function() {
            document.getElementById("searchBox").style.display = "block";
            this.style.display = "none"; // Hides the button too
        });
    </script>

</body>
</html>

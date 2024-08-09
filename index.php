<?php 
    require_once "php/minificate.php";
    // Start output buffering and apply minification
    ob_start('minify_html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Minificator | TrinsyCa</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }
        body {
            width: 100%;
            height: 100svh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            gap: 20px;
            background-color: black;
        }
        .box {
            width: 100%;
            height: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-radius: 20px;
            box-shadow: 3px 3px 5px 3px rgb(0,0,0,0.4);
            transition: background-color 0.5s;
        }
        h1 {
            padding: 8px 12px;
            border-radius: 15px;
            background-color: white;
            transition: scale 0.5s;
        }
        .box:hover h1 {
            scale: 1.2;
        }
        .box:first-child {
            background-color: green;
        }
        .box:first-child:hover {
            background-color: #399918;
        }
        .box:nth-child(2) {
            background-color: red;
        }
        .box:nth-child(2):hover {
            background-color: #C80036;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Hello world! 😊</h1>
    </div>
    <div class="box">
        <h1>World sucks! 🤬</h1>
    </div>
</body>
<script>
    function LeavedPage() {
        var documentTitle = document.title;
        document.addEventListener("visibilitychange", function() {
            if(document.visibilityState === "hidden") {
                document.title = "Come Back 😭";
            }
            else {
                document.title = documentTitle;
            }
        });
    }
    window.addEventListener("DOMContentLoaded", LeavedPage);
</script>
</html>
<?php ob_end_flush(); ?>
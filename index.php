<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
    <title>RFTM Website</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/png" sizes="16x16" href="Images/Logo RFTM Blanc PNG.png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body class="bodyHome">
    <?php include("entete.php"); ?>

    <div class="container mt-5" style="color: rgb(255, 255, 255);">
        <div class="row">
            
            <div class="col-sm-4" >
                <h3>Welcome all!</h3>
                <p>
                    More than three years ago, I started to share pictures of my idol Roger Federer on Instagram.
                    As of today, more than 45.000 fans have joined the community by subscribing to my fanpage.<br>
                    Be a part of it too!
                </p>
            </div>
            
            <div class="col-sm-4">
                <h3>Next tournaments</h3>
                <ul>
                    <!--
                    va jouer : &#9989;
                    on ne sait pas sûr : &#10067;
                    ne vas pas jouer : 	&#10060;
                    -->
                    <li>Laver Cup (London) &#9989; : Sept 23-25, 2022<br></li>
                    <li>ATP 1000 - Shanghai &#10067;<br></li>
                    <li>ATP 500 - Basel &#9989; : Oct 24-30, 2022<br></li>
                    <li>ATP 1000 - Paris &#10067;<br></li>
                </ul>
            </div>
            
            <div class="col-sm-4">
                <img width="350px" src="Images/video.gif">
            </div>
        </div>
    </div>
    
    <?php include("footer.php"); ?>
</body>

</html>

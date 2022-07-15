<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Official website of the Instagram fanpage followed worldwide: @rogerfedererthemaster. Click to get all the information about Roger Federer!">
    <link rel="stylesheet" href="style.css"/>
    <title>Roger Federer the Master - Home</title>
    <link rel="icon" type="image/png" sizes="16x16" href="Images/Onglet/logoTab2.png">
    <link rel="apple-touch-icon" href="Images/RFTM2.png">
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

        <div class="col-sm-4">
            <table> <!-- border="1" -->
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" placeholder="Your Name">
                    </td>
                </tr>
                <tr>
                    <td>First name:</td>
                    <td>
                        <input type="text" placeholder="Your First Name">
                    </td>
                </tr>
                <tr height="50px">
                    <td valign="top">Email adress:</td>
                    <td valign="top">
                        <input type="email" placeholder="Your Email Adress">
                    </td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td>
                        <input type="text" placeholder="Your Subject">
                    </td>
                </tr>
                <tr>
                    <td valign="top">Message:</td>
                    <td>
                        <textarea rows="4" cols="50" maxlength="500" placeholder="Your Message"></textarea>
                    </td>
                </tr>
                <tr height="100px">
                    <td style="visibility:hidden;">wwwwwwwww</td>
                    <td>
                        <a href="index.php">
                            <button type="submit" class="btn btn-outline-light" style="width:80px">Send</button>
                        </a>
                    </td>

                </tr>
            </table>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
</body>

</html>

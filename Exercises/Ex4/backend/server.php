<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../includes/style.css">
    <title> Response </title>
</head>

<body>
    <main>
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <section>
                        <?php
                        $user = $_GET["inputUser"];
                        $pass = $_GET["inputPassword"];

                        $us = strtolower($user);
                        if ($us == "admin") {
                            if ($pass != "RootPass") {
                                echo "<h1 class='pos'>INNCORRECT ADMIN LOGIN</h1>";
                                echo '<div style="width:100%;height:0;padding-bottom:115%;position:relative;"><iframe src="https://giphy.com/embed/l1J9u3TZfpmeDLkD6" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
                            } else {
                                echo "<h1 class='pos'>Welcome sir.</h1>";
                                echo "<p class='pos'>we've stolen alot of data</p>";
                                echo '<div style="width:100%;height:0;padding-bottom:66%;position:relative;"><iframe src="https://giphy.com/embed/DyTreqKSAqjLy" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
                            }
                        } else {
                            echo "<h1 class='pos'>Welcome  " . $user . "</h1>";
                            echo "<p class='pos'> you are very welcome for giving me your data</p>";
                            echo '<div class="link" style="width:100%;height:0;padding-bottom:66%;position:relative;"> <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
                            echo '<div style="width:100%;height:0;padding-bottom:66%;position:relative;"><iframe src="https://giphy.com/embed/Yq1pe2v7nNlwA" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div></p>';
                        }
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
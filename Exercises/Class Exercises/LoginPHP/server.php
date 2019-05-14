<!DOCTYPE html>
<html>
    <head>
        <title> Response </title>
    </head>
    <body>
        <section>
            <?php
             $user = $_GET["reg_un"];
             $pass = $_GET["reg_pass"];

             if( $user == "" || $pass == "")
                echo "<h1>ERROR INVALID INPUT</h1>";
             else{
                $us = strtolower($user);
                if($us == "admin"){
                    if($pass != "RootPass")
                        echo "<h1>INNCORRECT ADMIN LOGIN</h1>";
                    else{
                        echo "<p>Welcome. we stolen alot of data</p>";
                    }
                }
                else{
                    if($pass != "takemydatapls"){
                        echo "<h1>Welcome  ".$user."</h1>";
                        echo "<p> you are very welcome to give me your data</p>";
                    }
                    else{
                        echo "<h1>UNACCEPTABLE LOGIN!</h1>";
                    }
                }
             }
            ?>
    </body>
</html>

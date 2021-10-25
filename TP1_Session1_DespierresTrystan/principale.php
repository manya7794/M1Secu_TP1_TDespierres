<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="css/style.css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    alert("Vous êtes bien connecté");
                }
                function alert($msg) {
                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                }
            ?>

        </div>
    </body>
</html>

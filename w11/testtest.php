<!DOCTYPE html>

<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Add Movie</title>
</head>

<body>

<header id="PageHeader">
    <a id="headerLink" href="index.html">
        <h1 id="SiteTitle">PMDB</h1>
        <h3 id="Subtitle">Personal Movie Database</h3>
    </a>
</header>


<section id="PageContent">

    <?php

    $mysqli = new mysqli("eu-cdbr-azure-north-d.cloudapp.net", "b8522d73b537a0", "b0f6819e", "slq654");

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }


    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // execute if requested using HTTP GET Method

        $form = <<<FORM

				<form action="{$_SERVER['PHP_SELF']}" method="post">

                <table border="0" cellspacing="5" cellpadding="5">
                    <tr>
                         <td>Title</td>
                         <td> <input type="text" name="title"> </td>
                    </tr>
                    <tr>
                         <td>Synopsis</td>
						 <td><textarea name="synopsis" id="synopsis"></textarea></td>
                    </tr>
                    <tr>
                         <td>Genre</td>
                         <td> <input type="text" name="genre"> </td>
                    </tr>
                    <tr>
                         <td>Relesae</td>
                         <td> <input type="text" name="release"> </td>
                    </tr>
                    <tr>
                         <td>Score</td>
                         <td> <input type="text" name="score"> </td>
                    </tr>
                    <tr>
                         <td>Poster</td>
                         <td> <input type="text" name="poster"> </td>
                    </tr>
                    	<td><input type="submit" name="submit" value="Submit"/>
                        </td>
                    <tr>
               </table>

            </form>
FORM;

        print($form);

    }


    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // execute if requested using HTTP POST Method

        $title = $_POST["title"];
        $synopsis = $_POST["synopsis"];
        $genre = $_POST["genre"];
        $release = $_POST["release"];
        $score = $_POST["score"];
        $poster = $_POST["poster"];


        $sql = "INSERT INTO `movie` (`poster`, `title`, `synopsis`, `genre`, `release-date`, `score`) VALUES ('{$poster}', '{$title}', '{$synopsis}', '{$genre}', '{$release}', '{$score}');";


        if ($result = $mysqli->query($sql)) {
            printf("New movie added");
        }
        else printf("Couldn't add movie");


        header( 'Location: index.html' ) ;


    }
    else {
        header( 'Location: addmovie.php' ) ;
    }

    ?>


</section>

<footer id="PageFooter">
    <p>Designed by: Inese Avota 2012</p>
</footer>

</body>
</html>
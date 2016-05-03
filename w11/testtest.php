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

            <form action={$_SERVER['PHP_SELF']}" method="post">
                <fieldset>
                    <label for="bugName">Bug Name</label>
                    <input type="text" name="bugName" required>
                    <br>
                    <label for="BugSummary">Bug Summary</label>
                    <textarea name="BugSummary" maxlength="500" required></textarea>
                    <br>
                    <label for="BugCategory">Bug Category</label>
                    <select name="BugCategory" required>
                        <option value="">Select Bug Category</option>
                        <option value="Android">Android</option>
                        <option value="iOS">iOS</option>
                        <option value="Windows">Windows</option>
                    </select>
                    <br>
                    <input type="submit" value="Submit">

                </fieldset>
            </form>
FORM;

        print($form);

    }


    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // execute if requested using HTTP POST Method

        $bugName = $_POST['bugName'];
        $BugCategory = $_POST['BugCategory'];
        $BugSummary = $_POST['BugSummary'];


        $sql = "INSERT INTO bugs (bugName, BugCategory, BugSummary) VALUES ('$bugName', '$BugCategory', '$BugSummary')";


        if ($result = $mysqli->query($sql)) {
            echo "New movie added";
        }
        else {
            echo "Couldn't add movie";
        }

        header('Location: index.html');


    }
    else {
        header( 'Location: testtest.php' ) ;
    }

    ?>


</section>

<footer id="PageFooter">
    <p>Designed by</p>
</footer>

</body>
</html>
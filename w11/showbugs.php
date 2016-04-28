<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BugTracker Website</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>

<body>
<!-- HEADER START -->
<header>
    <div id="head">
        <img src = "assets\images\logo.png" alt="BugTracker logo" id="buglogo"/>
        <div id ="heads">
            <h1>BugTracker</h1>
            <h2 id="h2inhead">Keeping track of all the pesky little bugs</h2>
        </div>
    </div>
</header>
<!-- HEADER END-->

<!-- MAIN START -->
<Main>
    <!-- NAVIGATION BAR START -->
    <div id="nav">
        <ul>
            <li><a href="showbugs.php">All Bug Items</a></li>
            <li><a href="showbugs.php">Android Bugs</a></li>
            <li><a href="showbugs.php">iOS Bugs</a></li>
            <li><a href="showbugs.php">Windows Bugs</a></li>
            <li><a href="addbugs.php">Insert Bugs</a></li>
        </ul>
    </div>
    <!-- NAVIGATION BAR END -->

    <!-- MAIN PARAGRAPH START -->
    <div id = "showbugs">
        <?php
        include ("db_connect.php");

        if(isset($_GET['category'])) {
            $BugCategory = $_GET['category'];
            $sql_query = "SELECT * FROM bugs where BugCategory = '$BugCategory'";
        }
        else {
            $sql_query = "SELECT * FROM bugs";
        }

        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $bugName = $row['bugName'];
            $BugCategory = $row['BugCategory'];
            $BugSummary = $row['BugSummary'];
            echo "<h3>{$bugName}</h3>";
            echo "<h4>{$BugCategory}</h4>";
            echo "<p>{$BugSummary}</p>";
            echo "<hr>";
        }

        /*
        $sql_query = "SELECT * FROM bugs";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $bugName = $row['bugName'];
            $BugCategory = $row['BugCategory'];
            $BugSummary = $row['BugSummary'];
            echo "<h3>{$bugName}</h3>";
            echo "<h4>{$BugCategory}</h4>";
            echo "<p>{$BugSummary}</p>";
            echo "<hr>";
        }
        */

        ?>
     </div>
    <!-- MAIN PARAGRAPH END -->


</Main>
<!-- MAIN END -->

<!-- FOOTER START -->
<Footer>
    <p>Designed by Rita Avota, 2016</p>
</Footer
<!-- FOOTER END -->

</body>
</html>


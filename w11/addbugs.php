<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BugTracker Website - Add Bugs</title>
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

    <!-- FORM START -->
    <form action="insertbug.php" method="post">
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
    <!-- FORM END -->


</Main>
<!-- MAIN END -->

<!-- FOOTER START -->
<Footer>
    <p>Designed by Rita Avota, 2016</p>
</Footer>
<!-- FOOTER END -->

</body>
</html>
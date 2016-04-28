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
    <form>
        <fieldset>
            <label for="bugname">Bug Name</label>
            <input type="text" name="bugname" required>
            <br>
            <label for="bugsummary">Bug Summary</label>
            <textarea name="bugsummary" maxlength="500" required></textarea>
            <br>
            <label for="bugcategory">Bug Category</label>
            <select name="bugcategory" required>
                <option value="">Select Bug Category</option>
                <option value="android">Android</option>
                <option value="ios">iOS</option>
                <option value="windows">Windows</option>
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
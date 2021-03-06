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
            <li><a href="showbugs.php?category=Android">Android Bugs</a></li>
            <li><a href="showbugs.php?category=iOS">iOS Bugs</a></li>
            <li><a href="showbugs.php?category=Windows">Windows Bugs</a></li>
            <li><a href="addbugs.php">Insert Bugs</a></li>
        </ul>

        <!-- include connection to the database-->

    </div>
    <!-- NAVIGATION BAR END -->

    <!-- MAIN PARAGRAPH START -->
    <div id = "content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ante sit amet enim interdum laoreet fermentum in enim. Quisque consequat vestibulum hendrerit. Vestibulum imperdiet ex non metus porta hendrerit. Morbi sollicitudin suscipit nisl eu accumsan. Integer pellentesque pellentesque orci, eget gravida diam dignissim eget. Etiam tellus justo, egestas non ante ac, vulputate faucibus elit. Proin non tristique justo, eu ornare dui. Sed quis vestibulum dolor, nec lacinia quam. Integer imperdiet vulputate enim at imperdiet. Suspendisse varius orci sit amet augue convallis dictum. Praesent iaculis eu justo vitae sollicitudin. Aenean eu nunc quis est commodo sodales. Pellentesque dictum dictum eros a sagittis. Proin et aliquam odio. Vestibulum eu augue id mi rutrum sollicitudin ut sed tellus. </p>
    </div>
    <!-- MAIN PARAGRAPH END -->


</Main>
<!-- MAIN END -->

<!-- FOOTER START -->
<Footer>
    <p>Designed by Rita Avota, 2016</p>
</Footer>
<!-- FOOTER END -->

</body>
</html>



<?php
?>

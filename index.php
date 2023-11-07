<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Home</h1>
<?php
<!DOCTYPE html>
<html>
<body>

<h2>Soccer player</h2>

<p id="demo">who is my favorite player?.</p>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Lionel Messi"'>Click to find out!</button>

</body>
</html>

include "view-footer.php";
?>

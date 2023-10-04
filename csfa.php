<?php
require_once "dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $db = new DB();

    $result = $db->insert($_POST["name"], $_POST["email"], $_POST["comment"]);

    echo $result ? "SUCCESS" : "Fail";
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br><br>
    <label for="comment">Comment</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>
    <button type="submit" value="Comment">Comment</button>
    <div class="clear"></div>
</form>
<?php
require_once "dbconnect.php";

$date = new DateTime('+1 day');
setcookie("token", time(), $date->getTimestamp(), '/', null, null, true);


$db = new DB();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if ($db->insert($name, $email, $comment)) {
        header("Location:cropsitescript.php");
    }
    echo "<script>alert('Comment insertion Fail');</script>";
} else {
    $comments = $db->getAllComment();
}

?>
<style>
    .wrapper {
        width: 500px;
        height: 600px;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        border: 1px solid black;
        padding: 20px;
    }

    form {
        width: inherit;
    }

    textarea,
    input {
        width: inherit;
        padding: 10px;
    }

    button {
        color: white;
        background-color: orangered;
        padding: 10px;
    }

    .panel {
        background: lightseagreen;
        height: 150px;
        overflow: scroll;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        border-bottom: 1px solid black;
        padding: 10px 0;
    }

    li>span {
        padding-left: 20px;
    }
</style>
<div class="wrapper">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>
        <button type="submit" value="Comment">Comment</button>
        <div class="clear"></div>
    </form>
    Opening &lt;h1&gt;and Closing &lt;/h1&gt;are header.

    <xmp>
        <html>

        <body>

            <head></head>
        </body>

        </html>
    </xmp>
    <div class="panel">
        <ul>
            <?php foreach ($comments as $comment) : ?>
                <li>
                    <span><?php echo $comment->name; ?></span>
                    <span><?php echo $comment->email; ?></span>
                    <span><?php echo $comment->comment; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php

//ini_set("display_errors", "Off");

$db = new PDO("mysql:host=localhost;dbname=hacker", "root", "");

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     echo "POST method";
// } else {
//     $id = $_GET['id'];

//     $query = $db->query("SELECT * FROM users WHERE id='$id' ");
//     $query->execute();
//     $result = $query->fetchAll(PDO::FETCH_OBJ);
//     echo "<pre>" . print_r($result, true) . "</pre>";
// }


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $query = $db->query("SELECT * FROM users WHERE name=$name ");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>" . print_r($result, true) . "</pre>";
}

//  '' OR 1=1
// id=1 ';DROP TABLE posts;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" id="">
    <input type="submit">
</form>
<?php
require_once "vendor/autoload.php";

use inj\Posts\Posts;


class injection
{
    public function __construct()
    {
        $fname = "HtetShine";
        $lname = "Linn";
        $content = "This is a book";

        $author = new \inj\Authors\Author($fname, $lname);

        $post = new Posts($author, $content);
        $this->answerOut($post);
    }
    public function answerOut(Posts $post)
    {
        $author = $post->getAuthor();
        echo $author->getFirstName();
    }
}
new injection();
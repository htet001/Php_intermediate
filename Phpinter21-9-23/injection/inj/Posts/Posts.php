<?php

namespace inj\Posts;

use inj\Authors\Author;

class Posts
{
    private $author, $content;
    public function __construct($author, $content)
    {
        //$author = new Author($fname, $lname);
        $this->author =  $author;
        $this->content =  $content;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getContent()
    {
        return $this->content;
    }
}
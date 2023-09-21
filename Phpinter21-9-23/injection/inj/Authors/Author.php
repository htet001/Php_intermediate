<?php

namespace inj\Authors;

class Author
{
    private $fname, $lname;
    public function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function getFirstname()
    {
        return $this->fname;
    }
    public function getLastname()
    {
        return  $this->lname;
    }
}
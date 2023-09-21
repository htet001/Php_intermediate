<?php

class player
{
    private $path;
    private $music;
    // public function __construct($path, $music)
    // {
    //     $this->path = $path;
    //     $this->music = $music;
    // }
    // public function playNow()
    // {
    //     echo "Playig " . $this->music . " From " . $this->path;
    // }

    public function __construct()
    {
    }
    public function setMusicPath($path)
    {
        $this->path = $path;
    }
    public function setMusic($music)
    {
        $this->music = $music;
    }
    public function getMusicPath()
    {
        return $this->path;
    }
    public function getMusic()
    {
        return $this->music;
    }
}
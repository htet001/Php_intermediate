<?php

require_once "player.php";

class indo
{
    public function __construct()
    {
        // $player = new player("c/f/", "loveyourself");
        // $player->playNow();

        $player = new player();
        $player->setMusicPath("c/g/");
        $player->setMusic("moon");

        $this->playNow($player->getMusicPath(), $player->getMusic());
    }
    public function playNow($path, $music)
    {
        echo "Playing" . $music . " From " . $path;
    }
}
new indo();
<?php

class SongsRecords
{
    private $typeList;
    private $songName;
    private $time;

    public function __construct($type, $name, $time)
    {
        $this->typeList = $type;
        $this->songName = $name;
        $this->time = $time;
    }

    public function getSongName()
    {
        return $this->songName;
    }

    public function getTypeList()
    {
        return $this->typeList;
    }
}

$numberSongs = intval(readline());
$songs = [];

for ($i = 0; $i < $numberSongs; $i++) {
    $newSong = explode('_', readline());
    $song = new SongsRecords($newSong[0], $newSong[1], $newSong[2]);
    $songs[] = $song;
}

$typeListToPrint = readline();

foreach ($songs as $song) {

    if ($typeListToPrint == $song->getTypeList() || $typeListToPrint == 'all') {
        echo $song->getSongName() . PHP_EOL;
    }
}
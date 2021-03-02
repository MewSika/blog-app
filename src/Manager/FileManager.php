<?php

namespace App\Manager;

class FileManager {

    public function explodeFileToArray(string $filePath) : string
    {
        $fileRow = explode("\r\n", $filePath);
        return $this->explodeFileColumnToArray($fileRow);
    }

    public function explodeFileColumnToArray(string $fileRow) : array
    {
        $fileData = [];
        foreach($fileRow as $k =>$row) {
            array_push($fileData, explode(',', $row));
        }

        if(empty($fileData[count($fileData) - 1])) {
            array_pop($fileData);
        }
        return $fileData;
    }
}
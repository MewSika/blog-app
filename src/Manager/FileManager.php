<?php

namespace App\Manager;

class FileManager {

    public function explodeFileToArray($filePath)
    {
        $fileRow = explode("\r\n", $filePath);
        return $this->explodeFileColumnToArray($fileRow);
    }

    public function explodeFileColumnToArray($fileRow)
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
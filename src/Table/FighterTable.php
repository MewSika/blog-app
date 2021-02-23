<?php

namespace App\Table;

use App\Manager\FileManager;

class FighterTable extends Table{
    protected $table = "fighter";
    protected $class = Fighter::class;

    public function importData($filePath)
    {
        $fileManager = new FileManager();
        $fightersData = $fileManager->explodeFileToArray($filePath);
        foreach($fightersData as $fighterData){
            dd($fighterData);
        }
    }
}
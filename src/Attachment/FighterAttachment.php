<?php
namespace App\Attachment;

use App\Model\Fighter;
use Intervention\Image\ImageManager;

class FighterAttachment {

    const DIRECTORY = UPLOAD_PATH . DIRECTORY_SEPARATOR . 'fighters';

    public static function upload(Fighter $fighter)
    {
        $image = $fighter->getImage();
        if(empty($image) || $fighter->shouldUpload() === false) {
            return;
        }
        $directory = self::DIRECTORY;
        if(file_exists($directory) === false) {
            mkdir($directory, 0777, true);
        }
        if(!empty($fighter->getOldImage())) {
            $formats = ['small', 'medium', 'large'];
            foreach($formats as $format) {
                $oldFile = $directory . DIRECTORY_SEPARATOR . $fighter->getOldImage() . '_' . $format . '.jpg';
                if(file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }
        }
        $filename = uniqid("", true) . '.jpg';
        $manager = new ImageManager(['driver' => 'gd']);
        $manager
            ->make($image)
            ->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($directory . DIRECTORY_SEPARATOR . $filename . "_small.jpg");
        $manager
            ->make($image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($directory . DIRECTORY_SEPARATOR . $filename . "_medium.jpg");
        $manager
            ->make($image)
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($directory . DIRECTORY_SEPARATOR . $filename . "_large.jpg");

        $fighter->setImage($filename);
    }

    public static function detach (Fighter $fighter) {
        if (!empty($fighter->getImage())) {
            $formats = ['small', 'medium', 'large'];
            foreach($formats as $format) {
                $file = self::DIRECTORY . DIRECTORY_SEPARATOR . $fighter->getImage() . '_' . $format . '.jpg';
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }
    }
}
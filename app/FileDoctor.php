<?php
/**
 * Created by PhpStorm.
 * User: charlescombs
 * Date: 8/30/16
 * Time: 1:39 PM
 */

namespace App;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class FileDoctor
{

    public function examine(Filesystem $filesystem, $filename){
        $fileContents = '';
        $filePath = '../resources/markdown/' . $filename;
        $fileExists = $filesystem->exists($filePath);
        if ($fileExists) {
            $fileContents = $filesystem->get($filePath);
        } else {

            die("The file does not exist.");

        }

        return $fileContents;

    }

}
<?php


namespace App\Patterns\Structural\Adapter\Model;


use App\Patterns\Structural\Adapter\Interfaces\MediaLibraryInterface;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{

    public function get($fileCode): string
    {
        // TODO: Implement get() method.
    }

    public function upload($pathToFile): string
    {
        // TODO: Implement upload() method.
    }
}
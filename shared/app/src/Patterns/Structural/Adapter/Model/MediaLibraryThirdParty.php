<?php


namespace App\Patterns\Structural\Adapter\Model;


use App\Patterns\Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;

class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{

    public function getMedia($fileCode): string
    {
        return sprintf('Call %s with arg value %s', __METHOD__, $fileCode);
    }

    public function addMedia($pathToFile): string
    {
        return sprintf('Call %s with arg value %s', __METHOD__, $pathToFile);
    }
}
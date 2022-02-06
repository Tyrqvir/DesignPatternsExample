<?php


namespace App\Patterns\Structural\Adapter\Interfaces;


interface MediaLibraryThirdPartyInterface
{
    public function getMedia($fileCode): string;

    public function addMedia($pathToFile): string;
}
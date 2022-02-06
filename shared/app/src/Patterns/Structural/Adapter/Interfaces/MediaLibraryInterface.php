<?php


namespace App\Patterns\Structural\Adapter\Interfaces;


interface MediaLibraryInterface
{
    public function get($fileCode): string;

    public function upload($pathToFile): string;
}
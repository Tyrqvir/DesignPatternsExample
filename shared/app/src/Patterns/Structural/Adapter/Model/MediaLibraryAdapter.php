<?php


namespace App\Patterns\Structural\Adapter\Model;


use App\Patterns\Structural\Adapter\Interfaces\MediaLibraryInterface;
use App\Patterns\Structural\Adapter\Interfaces\MediaLibraryThirdPartyInterface;
use Exception;
use RuntimeException;

class MediaLibraryAdapter implements MediaLibraryInterface
{

    private MediaLibraryThirdPartyInterface $adapterObj;

    public function __construct()
    {
        $this->adapterObj = new MediaLibraryThirdParty();
    }

    public function get($fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    public function upload($pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    /**
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this->adapterObj, $name)) {
            return call_user_func_array([$this->adapterObj, $name], $arguments);
        }

        throw new RuntimeException("Method {$name} not found");
    }
}
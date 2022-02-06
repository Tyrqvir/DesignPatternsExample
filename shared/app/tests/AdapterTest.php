<?php

namespace App\Tests;

use App\Patterns\Structural\Adapter\Model\MediaLibraryAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function test(): void
    {
        $mediaGallery = new MediaLibraryAdapter();
        dump($mediaGallery->get('getMediaString'));
        dump($mediaGallery->upload('UploadString'));
    }
}

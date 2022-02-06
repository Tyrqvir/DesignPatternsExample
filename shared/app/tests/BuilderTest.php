<?php

namespace App\Tests;

use App\Patterns\Creational\Builder\BlogPostBuilder;
use App\Patterns\Creational\Builder\BlogPostManager;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function test(): void
    {
        $posts = [];

        $builder = new BlogPostBuilder();

        $posts[] = $builder
            ->setTitle('title 1')
            ->setBody('body 1');

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);
        $posts[] = $manager->createCleanPost();
        $posts[] = $manager->createNewPostIt();
        dump($posts);
    }
}

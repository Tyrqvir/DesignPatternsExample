<?php


namespace App\Patterns\Creational\Builder\Interfaces;


use App\Patterns\Creational\Builder\Model\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): self;

    public function setTitle(string $val): self;

    public function setBody(string $val): self;

    public function setCategory(array $val): self;

    public function setTags(array $val): self;

    public function get(): BlogPost;
}
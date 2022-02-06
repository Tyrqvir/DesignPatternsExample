<?php


namespace App\Patterns\Creational\Builder;


use App\Patterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;
use App\Patterns\Creational\Builder\Model\BlogPost;

class BlogPostManager
{
    private BlogPostBuilderInterface $builder;

    public function setBuilder(BlogPostBuilderInterface $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost(): BlogPost
    {
        return $this->builder->get();
    }

    public function createNewPostIt(): BlogPost
    {
        return $this->builder
            ->setTitle('New It post')
            ->setBody('New It post...')
            ->setCategory([
                'cat1',
            ])
            ->setTags([
                'tag1',
            ])
            ->get()
        ;
    }
}
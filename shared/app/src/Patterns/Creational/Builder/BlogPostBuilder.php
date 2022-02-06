<?php


namespace App\Patterns\Creational\Builder;


use App\Patterns\Creational\Builder\Interfaces\BlogPostBuilderInterface;
use App\Patterns\Creational\Builder\Model\BlogPost;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private BlogPost $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->setTitle($val);

        return $this;
    }

    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->setBody($val);

        return $this;
    }

    public function setCategory(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->setCategories($val);

        return $this;
    }

    public function setTags(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->setTags($val);

        return $this;
    }

    public function get(): BlogPost
    {
        $res = $this->blogPost;
        $this->create();

        return $res;
    }
}
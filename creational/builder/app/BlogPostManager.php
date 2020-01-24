<?php


namespace App;


use App\Classes\BlogPost;
use App\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    /**
     * @var BlogPostBuilderInterface
     */
    private $builder;

    /**
     * @param BlogPostBuilderInterface $builder
     *
     * @return $this
     */
    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * @return BlogPost
     */
    public function createCleanPost()
    {
        $blogPost = $this->builder->getBlogPost();

        return $blogPost;
    }

    /**
     * @return BlogPost
     */
    public function createNewItPost()
    {
        $blogPost = $this->builder
            ->setTitle('Новый IT пост')
            ->setBody('Это новый пост про IT')
            ->setCategories([
                'it_category'
            ])
            ->setTags([
                'tag_it',
                'tag_development'
            ])
            ->getBlogPost();

        return $blogPost;
    }

    /**
     * @return BlogPost
     */
    public function createNewСatsPost()
    {
        $blogPost = $this->builder
            ->setTitle('Новый пост о котиках')
            ->setCategories([
                'cat_category'
            ])
            ->setTags([
                'tag_cats',
                'tag_pets'
            ])
            ->getBlogPost();

        return $blogPost;
    }


}
<?php


namespace App\Classes;


class BlogPost
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $body;

    /**
     * @var array
     */
    public $tags = [];

    /**
     * @var array
     */
    public $categories = [];

    /**
     * BlogPost constructor.
     *
     * @param string $title
     * @param string $body
     * @param array $categories
     * @param array $tags
     */
    /*public function __construct(string $title, string  $body, array $categories = [], array $tags = [])
    {
        $this->title = $title;
        $this->body = $body;
        $this->categories = $categories;
        $this->tags = $tags;
    }*/
}
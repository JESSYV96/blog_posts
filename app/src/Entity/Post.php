<?php

namespace App\Entity;


class Post extends BaseEntity
{
    private string $title;
    private string $content;
    private \DateTime $publishedAt;
    private int $authorId;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     * @return Post
     */
    public function setAuthorId(int $authorId): Post
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime
    {
        return  $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     * @return Post
     * @throws \Exception
     */
    public function setPublishedAt(string $publishedAt): Post
    {
        $this->publishedAt = new \DateTime($publishedAt);
        return $this;
    }

}

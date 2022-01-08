<?php

namespace App\Entity;

class Comment extends BaseEntity
{
    private string $name;
    private string $email;
    private string $content;
    private \DateTime $publishedAt;
    private int $postId;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Comment
     */
    public function setName(string $name): Comment
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Comment
     */
    public function setEmail(string $email): Comment
    {
        $this->email = $email;
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
     * @return Comment
     */
    public function setContent(string $content): Comment
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     * @return Comment
     * @throws \Exception
     */
    public function setPublishedAt(string $publishedAt): Comment
    {
        $this->publishedAt = new \DateTime($publishedAt);
        return $this;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return Comment
     */
    public function setPostId(int $postId): Comment
    {
        $this->postId = $postId;
        return $this;
    }
}

<?php

namespace App\Model;

use App\Core\Hydrate;

class PostDTO
{
    private int $id;
    private string $title;
    private string $content;
    //TODO: Now it's empty find a way to get comment by post
    private array $comments;
    private \DateTime $publishedAt;
    private string $firstname;
    private string $lastname;

    use Hydrate;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PostDTO
     */
    public function setId(int $id): PostDTO
    {
        $this->id = $id;
        return $this;
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
     * @return PostDTO
     */
    public function setTitle(string $title): PostDTO
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
     * @return PostDTO
     */
    public function setContent(string $content): PostDTO
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param array $comments
     * @return PostDTO
     */
    public function setComments(array $comments): PostDTO
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): \DateTime
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     * @return PostDTO
     * @throws \Exception
     */
    public function setPublishedAt(string $publishedAt): PostDTO
    {
        $this->publishedAt = new \DateTime($publishedAt);
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return PostDTO
     */
    public function setFirstname(string $firstname): PostDTO
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return PostDTO
     */
    public function setLastname(string $lastname): PostDTO
    {
        $this->lastname = $lastname;
        return $this;
    }
}

<?php

namespace App\Entity;

use App\Core\Hydrate;

abstract class BaseEntity
{
    private int $id;

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
     * @return BaseEntity
     */
    public function setId(int $id): BaseEntity
    {
        $this->id = $id;
        return $this;
    }


}

<?php

namespace App\Models;
use App\Core\Model;

class Offer extends Model
{
    protected $id;
    protected $title;
    protected $link;
    protected int $special;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function isSpecial(): int
    {
        return $this->special;
    }

    /**
     * @param int $special
     */
    public function setSpecial(int $special): void
    {
        $this->special = $special;
    }

    static public function setTableName(): string
    {
        return "offers";
    }

    static public function setDbColumns(): array
    {
        return ["id", "title", "link", "special"];
    }

}
<?php

namespace App\Models;
use App\Core\Model;

class Esport extends Model
{
    protected $id;
    protected $title;
    protected $imageSrc;
    protected $imageAlt;
    protected $text;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
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
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getImageSrc()
    {
        return $this->imageSrc;
    }

    /**
     * @param string $imageSrc
     */
    public function setImageSrc(string $imageSrc): void
    {
        $this->imageSrc = $imageSrc;
    }

    /**
     * @return mixed
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
    }

    /**
     * @param string $imageAlt
     */
    public function setImageAlt(string $imageAlt): void
    {
        $this->imageAlt = $imageAlt;
    }

    static public function setTableName(): string
    {
        return "esports";
    }

    static public function setDbColumns(): array
    {
        return ["id", "title", "imageSrc", "imageAlt", "text"];
    }
}
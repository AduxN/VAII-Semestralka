<?php

namespace App\Models;
use App\Core\Model;

class Hardware extends Model
{
    protected $id;
    protected $title;
    protected $description;
    protected $paragraph1;
    protected $paragraph2;
    protected $imageSrc;
    protected $imageAlt;

    /*public function __construct(int $id, string $title, ?string $description, string $paragraph1, ?string $paragraph2, string $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->paragraph1 = $paragraph1;
        $this->paragraph2 = $paragraph2;
        $this->image = $image;
    }
    */
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getParagraph1()
    {
        return $this->paragraph1;
    }

    /**
     * @param string $paragraph1
     */
    public function setParagraph1(string $paragraph1): void
    {
        $this->paragraph1 = $paragraph1;
    }

    /**
     * @return mixed
     */
    public function getParagraph2()
    {
        return $this->paragraph2;
    }

    /**
     * @param string|null $paragraph2
     */
    public function setParagraph2(?string $paragraph2): void
    {
        $this->paragraph2 = $paragraph2;
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
        return "hardware";
    }

    static public function setDbColumns(): array
    {
        return ["id", "title", "description", "paragraph1", "paragraph2", "imageSrc", "imageAlt"];
    }
}
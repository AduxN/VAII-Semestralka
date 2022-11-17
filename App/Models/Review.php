<?php

namespace App\Models;
use App\Core\Model;

class Review extends Model
{
    protected $id;
    protected $title;
    protected $description;
    protected $paragraph1;
    protected $paragraph2;
    protected $paragraph3;
    protected $paragraph4;
    protected $image;
    protected $imagealt;



    /*public function __construct(int $id, string $title, ?string $description, string $paragraph1, ?string $paragraph2, ?string $paragraph3, ?string $paragraph4, string $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->paragraph1 = $paragraph1;
        $this->paragraph2 = $paragraph2;
        $this->paragraph3 = $paragraph3;
        $this->paragraph4 = $paragraph4;
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
    public function getParagraph3()
    {
        return $this->paragraph3;
    }

    /**
     * @param string|null $paragraph3
     */
    public function setParagraph3(?string $paragraph3): void
    {
        $this->paragraph3 = $paragraph3;
    }

    /**
     * @return mixed
     */
    public function getParagraph4()
    {
        return $this->paragraph4;
    }

    /**
     * @param string|null $paragraph4
     */
    public function setParagraph4(?string $paragraph4): void
    {
        $this->paragraph4 = $paragraph4;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImagealt()
    {
        return $this->imagealt;
    }

    /**
     * @param string $imagealt
     */
    public function setImagealt(string $imagealt): void
    {
        $this->imagealt = $imagealt;
    }

    static public function setTableName(): string
    {
        return "reviews";
    }

    static public function setDbColumns(): array
    {
        return ["id", "title", "description", "paragraph1", "paragraph2", "paragraph3", "paragraph4", "image", "imagealt"];
    }
}
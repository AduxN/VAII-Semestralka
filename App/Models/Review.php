<?php

namespace App\Models;
use App\Core\Model;

class Review extends Model
{
    protected int $id;
    protected string $title;
    protected ?string $description;
    protected string $paragraph1;
    protected ?string $paragraph2;
    protected ?string $paragraph3;
    protected ?string $paragraph4;
    protected string $image;

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
     * @return int
     */
    public function getId(): int
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
     * @return string
     */
    public function getTitle(): string
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
     * @return string|null
     */
    public function getDescription(): ?string
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
     * @return string
     */
    public function getParagraph1(): string
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
     * @return string|null
     */
    public function getParagraph2(): ?string
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
     * @return string|null
     */
    public function getParagraph3(): ?string
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
     * @return string|null
     */
    public function getParagraph4(): ?string
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
     * @return string
     */
    public function getImage(): string
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

    static public function setTableName(): string
    {
        return "recenzia";
    }

    static public function setColumnNames(): array
    {
        return ["id", "title", "description", "paragraph1", "paragraph2", "paragraph3", "paragraph4", "image"];
    }
}
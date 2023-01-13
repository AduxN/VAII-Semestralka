<?php

namespace App\Models;
use App\Core\Model;

class News extends Model
{
    protected $id;
    protected $title;
    protected $description;
    protected $summ;
    protected $content;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summ;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary): void
    {
        $this->summ = $summary;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    static public function setTableName(): string
    {
        return "news";
    }

    static public function setDbColumns(): array
    {
        return ["id", "title", "description", "summ", "content"];
    }
}
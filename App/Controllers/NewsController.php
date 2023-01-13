<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\News;

class NewsController extends AControllerBase
{

    public function index(): Response
    {
        $allNews = News::getAll();
        return  $this->html($allNews);
    }

    public function newPost(): Response
    {
        $id = $this->request()->getValue("id");
        $post = ($id ? News::getOne($id) : new News());
        $post->setTitle($this->request()->getValue('title'));
        $post->setDescription($this->request()->getValue('description'));
        $post->setSummary($this->request()->getValue('summary'));
        $post->setContent($this->request()->getValue('content'));

        // form validation PHP
        if (!$this->validateForm()) {
            return $this->redirect("?c=news&a=error");
        }

        $post->save();
        return $this->redirect("?c=news"); /* redirect na uvod */
    }

    public function newPostForm() {
        return $this->html(new News(),'newpost');
    }

    public function editPostForm() {
        $id = $this->request()->getValue("id");
        $post = News::getOne($id);
        return $this->html($post,'newpost');
    }

    public function deletePost(): Response {
        $id = $this->request()->getValue("id");
        $post = News::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=news"); /* redirect na uvod */
    }

    public function validateForm(): bool
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $summary = $_POST['summary'];

        if ($title == "" || strlen($title) > 255) {
            return false;
        } else if ($description == "" || strlen($description) > 1000) {
            return false;
        } else if ($summary == "" || strlen($summary) > 1000) {
            return false;
        }
        return true;
    }
}
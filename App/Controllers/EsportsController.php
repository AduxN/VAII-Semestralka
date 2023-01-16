<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Esport;

class EsportsController extends AControllerBase
{
    public function index(): Response
    {
        $allEsports = Esport::getAll();
        return  $this->html($allEsports);
    }

    public function newPost(): Response
    {
        $id = $this->request()->getValue("id");
        $post = ($id ? Esport::getOne($id) : new Esport());
        $post->setTitle($this->request()->getValue('title'));
        $post->setImageSrc($this->request()->getValue('imageSrc'));
        $post->setImageAlt($this->request()->getValue('imageAlt'));
        $post->setText($this->request()->getValue('text'));

        // form validation PHP
        if (!$this->validateForm()) {
            return $this->redirect("?c=home&a=error");
        }

        $post->save();
        return $this->redirect("?c=esports");
    }

    public function newPostForm() {
        return $this->html(new Esport(),'newpost');
    }

    public function editPostForm() {
        $id = $this->request()->getValue("id");
        $post = Esport::getOne($id);
        return $this->html($post,'newpost');
    }

    public function deletePost(): Response {
        $id = $this->request()->getValue("id");
        $post = Esport::getOne($id);
        if ($post != null) {
            $post->delete();
        }
        return $this->redirect("?c=esports");
    }

    public function validateForm(): bool
    {
        $title = $_POST['title'];
        $imageSrc = $_POST['imageSrc'];
        $imageAlt = $_POST['imageAlt'];
        $text = $_POST['text'];

        if ($title == "" || strlen($title) > 255) {
            return false;
        } else if (strlen($imageSrc) > 2000) {
            return false;
        } else if (strlen($imageAlt) > 30) {
            return false;
        } else if (strlen($text) > 5000) {
            return false;
        }
        return true;
    }
}
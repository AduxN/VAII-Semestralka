<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\JsonResponse;
use App\Core\Responses\Response;
use App\Models\Hardware;

class HardwareController extends AControllerBase
{
    public function index(): Response
    {
        $allHW = Hardware::getAll();
        return  $this->html($allHW);
    }

    public function article(): Response
    {
        $id = $this->request()->getValue("id");
        $HW = Hardware::getOne($id);
        return $this->html($HW);
    }

    public function newArticle(): Response
    {
        $id = $this->request()->getValue("id");
        $HW = ($id ? Hardware::getOne($id) : new Hardware());
        $HW->setTitle($this->request()->getValue('title'));
        $HW->setDescription($this->request()->getValue('description'));
        $HW->setParagraph1($this->request()->getValue('paragraph1'));
        $HW->setParagraph2($this->request()->getValue('paragraph2'));
        $HW->setImageSrc($this->request()->getValue('imageSrc'));
        $HW->setImageAlt($this->request()->getValue('imageAlt'));

        // form validation PHP
        if (!$this->validateForm()) {
            return $this->redirect("?c=home&a=error");
        }

        $HW->save();
        return $this->redirect("?c=hardware"); /* redirect na uvod */
    }

    public function newArticleForm() {
        return $this->html(new Hardware(),'newarticle');
    }

    public function editArticleForm() {
        $id = $this->request()->getValue("id");
        $HW = Hardware::getOne($id);
        return $this->html($HW,'newarticle');

    }

    public function deleteArticle(): Response {
        $id = $this->request()->getValue("id");
        $HW = Hardware::getOne($id);
        if ($HW != null) {
            $HW->delete();
        }
        return $this->redirect("?c=hardware"); /* redirect na uvod */
    }

    public function validateForm(): bool
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $paragraph1 = $_POST['paragraph1'];
        $paragraph2 = $_POST['paragraph2'];
        $paragraph3 = $_POST['paragraph3'];
        $paragraph4 = $_POST['paragraph4'];
        $imageAlt = $_POST['imageAlt'];

        if ($title == "" || strlen($title) > 255 || $description == "" || strlen($description) > 1000 || $paragraph1 == "" || strlen($paragraph1) > 2000) {
            return false;
        }
        if (strlen($paragraph2) > 2000 || strlen($paragraph3) > 2000 || strlen($paragraph4) > 2000) {
            return false;
        }
        if (strlen($imageAlt) > 30) {
            return false;
        }
        return true;
    }

    /**
     * @return JsonResponse
     * @throws \Exception
     */
    public function hardware() : JsonResponse
    {
        $all = Hardware::getAll();
        return $this->json($all);
    }
}
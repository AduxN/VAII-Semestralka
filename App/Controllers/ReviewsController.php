<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Review;

class ReviewsController extends AControllerBase
{

    public function index(): Response
    {
        $allReviews = Review::getAll();
        return  $this->html($allReviews);
    }

    public function article(): Response
    {
        $id = $this->request()->getValue("id");
        $review = Review::getOne($id);
        return $this->html($review);
    }

    public function newArticle(): Response
    {
        $id = $this->request()->getValue("id");
        $review = ($id ? Review::getOne($id) : new Review());
        $review->setTitle($this->request()->getValue('title'));
        $review->setDescription($this->request()->getValue('description'));
        $review->setParagraph1($this->request()->getValue('paragraph1'));
        $review->setParagraph2($this->request()->getValue('paragraph2'));
        $review->setParagraph3($this->request()->getValue('paragraph3'));
        $review->setParagraph4($this->request()->getValue('paragraph4'));
        $review->setImageSrc($this->request()->getValue('imageSrc'));
        $review->setImageAlt($this->request()->getValue('imageAlt'));

        // form validation PHP
        if (!$this->validateForm()) {
            return $this->redirect("?c=reviews&a=error");
        }

        $review->save();
        return $this->redirect("?c=reviews"); /* redirect na uvod */
    }

    public function newArticleForm() {
        return $this->html(new Review(),'newarticle');
    }

    public function editArticleForm() {
        $id = $this->request()->getValue("id");
//        if ($id != null) {
        $review = Review::getOne($id);
        return $this->html($review,'newarticle');
//        }
//        else {
//            return $this->html(new Review(),'newarticle');
//        }
    }

    public function deleteArticle(): Response {
        $id = $this->request()->getValue("id");
        $review = Review::getOne($id);
        if ($review != null) {
            $review->delete();
        }
        return $this->redirect("?c=reviews"); /* redirect na uvod */
    }

    public function error(): Response
    {
        return $this->html();
    }

    public function validateForm(): bool
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $paragraph1 = $_POST['paragraph1'];
        $paragraph2 = $_POST['paragraph2'];
        $paragraph3 = $_POST['paragraph3'];
        $paragraph4 = $_POST['paragraph4'];
        $imageSrc = $_POST['imageSrc'];
        $imageAlt = $_POST['imageAlt'];

        if ($title == "" || strlen($title) > 255 || $description == "" || strlen($description) > 1000 || $paragraph1 == "" || strlen($paragraph1) > 2000) {
            return false;
        }
        if (strlen($paragraph2) > 2000 || strlen($paragraph3) > 2000 || strlen($paragraph4) > 2000) {
            return false;
        }
        if (strlen($imageSrc > 255) || strlen($imageAlt) > 30) {
            return false;
        }
        return true;
    }

}
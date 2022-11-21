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
        $title = $_POST['title'];
        $description = $_POST['description'];
        $paragraph1 = $_POST['paragraph1'];

        if ($title == "" || strlen($title) > 255 || $description == "" || strlen($description) > 1000 || $paragraph1 == "" || strlen($paragraph1) > 2000) {
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
}
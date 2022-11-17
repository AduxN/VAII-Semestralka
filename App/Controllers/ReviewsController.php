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
        $review = new Review();
        $review->setTitle($this->request()->getValue('title'));
        $review->setDescription($this->request()->getValue('description'));
        $review->setParagraph1($this->request()->getValue('paragraph1'));
        $review->setParagraph2($this->request()->getValue('paragraph2'));
        $review->setParagraph3($this->request()->getValue('paragraph3'));
        $review->setParagraph4($this->request()->getValue('paragraph4'));
        $review->setImage($this->request()->getValue('image'));
        $review->setImagealt($this->request()->getValue('imagealt'));
        $review->save();
        return $this->redirect("?c=reviews"); /* redirect na uvod */
    }

    public function newArticleForm() {
        return $this->html(viewName: 'newarticle');
    }

    public function deleteArticle(): Response {
        $id = $this->request()->getValue("id");
        $review = Review::getOne($id);
        if ($review != null) {
            $review->delete();
        }
        return $this->redirect("?c=reviews"); /* redirect na uvod */
    }
}
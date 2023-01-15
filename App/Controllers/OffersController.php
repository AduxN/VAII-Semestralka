<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Offer;

class OffersController extends AControllerBase
{

    public function index(): Response
    {
        $allOffers = Offer::getAll();
        return  $this->html($allOffers);
    }

    public function newOffer(): Response
    {
        $offer = new Offer();
        $offer->setTitle($this->request()->getValue('title'));
        $offer->setLink($this->request()->getValue('link'));
//        $offer->setSpecial(false);
//        if (isset($_POST['special'])) {
//            $offer->setSpecial(true);
//        }
        isset($_POST['special']) ? $offer->setSpecial(1) : $offer->setSpecial(0);
        // form validation PHP
        if (!$this->validateForm()) {
            return $this->redirect("?c=home&a=error");
        }

        $offer->save();

        return $this->redirect("?c=offers");
    }

    public function newOfferForm() {
        return $this->html(new Offer(),'newoffer');
    }

    public function deletePost(): Response {
        $id = $this->request()->getValue("id");
        $offer = Offer::getOne($id);
        if ($offer != null) {
            $offer->delete();
        }
        return $this->redirect("?c=offers"); /* redirect na uvod */
    }

    public function validateForm(): bool
    {
        $title = $_POST['title'];
        $link = $_POST['link'];

        if ($title == "" || strlen($title) > 255) {
            return false;
        } else if ($link == "" || strlen($link) > 255) {
            return false;
        }
        return true;
    }
}
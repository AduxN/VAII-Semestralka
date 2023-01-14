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

    //TODO: createOffer, deleteOffer
}
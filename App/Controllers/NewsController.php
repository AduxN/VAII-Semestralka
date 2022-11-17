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
}
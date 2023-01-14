<?php

namespace App\Config;

use App\Auth\AccountAuthenticator;

/**
 * Class Configuration
 * Main configuration for the application
 * @package App\Config
 */
class Configuration
{
    public const APP_NAME = 'GameCommunity';
    public const FW_VERSION = '1.0';

    public const DB_HOST = 'localhost';  // change to db if you use docker
    public const DB_NAME = 'gamecommunity_db';
    public const DB_USER = 'root'; // change to vaiicko_user if you use docker
    public const DB_PASS = 'dtb456';

    public const LOGIN_URL = '?c=auth&a=login';

    public const ROOT_LAYOUT = 'root';

    public const DEBUG_QUERY = false;

    public const AUTH_CLASS = AccountAuthenticator::class;
}
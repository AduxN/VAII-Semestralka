<?php
namespace App\Auth;
use App\Core\IAuthenticator;
use App\Models\Account;
use Exception;


/**
 * Class AccountAuthenticator
 * @package App\Auth
 */

class AccountAuthenticator implements IAuthenticator
{
    /**
     * AccountAuthenticator constructor
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Verify, if the user is in DB and has his password is correct
     * @param $login
     * @param $password
     * @return bool
     * @throws Exception
     */
    function login($login, $password) : bool
    {
        $account = Account::getAll("login = ?", [$login]);

        if (count($account) == 1) {
            $account = $account[0];
            if (password_verify($password, $account->getPassword())) {
                $_SESSION['user'] = $account;
                return true;
            }
        }
        return false;
    }

    /**
     * Logout the user
     */
    function logout() : void
    {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            session_destroy();
        }
    }

    /**
     * Return if the user is authenticated or not
     * @return bool
     */
    function isLogged() : bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }


    function getLoggedUserName(): string
    {
        return $_SESSION['user']->getName() ?? throw new Exception("Not logged in");
    }


    function getLoggedUserId(): mixed
    {
        return $_SESSION['user']->getId() ?? throw new Exception("Not logged in");
    }


    function getLoggedUserEmail(): string
    {
        return $_SESSION['user']->getEmail() ?? throw new Exception("Not logged in");
    }


    function getLoggedUserContext(): mixed
    {
        return $_SESSION['user'] ?? throw new Exception("Not logged in");
    }
}

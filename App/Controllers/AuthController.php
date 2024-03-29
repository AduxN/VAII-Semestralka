<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;
use App\Models\Account;

/**
 * Class AuthController
 * Controller for authentication actions
 * @package App\Controllers
 */
class AuthController extends AControllerBase
{
    /**
     *
     * @return \App\Core\Responses\RedirectResponse|\App\Core\Responses\Response
     */
    public function index(): Response
    {
        return $this->redirect(Configuration::LOGIN_URL);
    }

    /**
     * Login a user
     * @return \App\Core\Responses\RedirectResponse|\App\Core\Responses\Response
     */
    public function login(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;
        if (isset($formData['submit'])) {
            $logged = $this->app->getAuth()->login($formData['login'], $formData['password']);
            if ($logged) {
                return $this->redirect('?c=admin');
            }
        }

        $data = ($logged === false ? ['error' => 'Zlý login alebo heslo!'] : []);
        return $this->html($data);
    }

    /**
     * Logout a user
     * @return \App\Core\Responses\ViewResponse
     */
    public function logout(): Response
    {
        $this->app->getAuth()->logout();
        return $this->html();
    }


    public function signInForm()
    {
        return $this->html(new Account(),'signIn');
    }


    public function signIn(): Response
    {
        if (!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $login = $_POST['login'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $accounts = Account::getAll();

            foreach ($accounts as $account) {
                if ($account->getLogin() == $login) {
                    return $this->html(['error' => 'Login je už používaný.']);
                }
                if ($account->getEmail() == $email) {
                    return $this->html(['error' => 'Email je už používaný.']);
                }
            }
            if ($password != $password2) {
                return $this->html(['error' => 'Heslá sa nezhodujú.']);
            }

            $account = new Account();
            $account->setLogin($login);
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $account->setPassword($pass);
            $account->setName($name);
            $account->setEmail($email);

            // form validation PHP
            if (!$this->validateForm()) {
                return $this->html(['error' => 'Jeden z údajov je príliš dlhý']);
            }

            $account->save();
            $this->login();
            return $this->redirect('?c=admin');
        }
        return $this->html(['error' => 'Nevyplnené povinné pole']);
    }

    public function validateForm(): bool
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (strlen($login) > 30 || strlen($password) > 255 || strlen($email) > 100 || strlen($name) > 255) {
            return false;
        }
        return true;
    }
}
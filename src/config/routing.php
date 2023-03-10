<?php

use Apsl\Inf\Lab01\Controller\CheckEmailPage;
use Apsl\Inf\Lab01\Controller\Error404Page;
use Apsl\Inf\Lab01\Controller\ContactPage;
use Apsl\Inf\Lab01\Controller\HashGenerator;
use Apsl\Inf\Lab01\Controller\HomePage;
use Apsl\Inf\Lab01\Controller\RecoverPasswordPage;
use \Apsl\Inf\Lab01\Controller\NewPassword;
use Apsl\Inf\Lab01\Controller\ViewPage;


return [
    '/' => HomePage::class,
    '/contact' => ContactPage::class,
    '_404' => Error404Page::class,
    '/recover_password' => RecoverPasswordPage::class,
    '/generate_hash'=>HashGenerator::class,
    '/check_email'=>CheckEmailPage::class,
    '/new-password'=>NewPassword::class,
    '/viewpage'=>ViewPage::class
];

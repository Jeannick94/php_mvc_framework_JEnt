<?php


namespace jeannick\phpmvc\middlewares;


use jeannick\phpmvc\Application;
use jeannick\phpmvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
//    public array $actions = [];
    public $actions = [];

    /**
     * AuthMiddleware constructor.
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest ()){
            if (empty($this->actions) || in_array (Application::$app->controller->action, $this->actions)){
                throw new ForbiddenException();
            }
        }
    }

}
<?php


namespace jeannick\phpmvc;


use jeannick\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}
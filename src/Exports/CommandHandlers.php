<?php 
namespace Nigromante\Guitar\Exports;
use Nigromante\Guitar\Security\Application\UseCases\CheckUser;
use Nigromante\Guitar\Security\Application\UseCases\CheckUserRoleCommand;


class CommandHandlers {

    public static function defines() {

        return [

            CheckUserRoleComman::class => CheckUserRoleCommandHandler::class

        ];
    }

}
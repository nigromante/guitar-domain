<?php 
namespace Nigromante\Guitar\Exports;
use Nigromante\Guitar\Security\Application\UseCases\handleCheckUserRoleCommand;
use Nigromante\Guitar\Security\Application\UseCases\CheckUserRoleCommand;


class CommandHandlers {

    public static function defines() {

        return [

            CheckUserRoleCommand::class => handleCheckUserRoleCommand::class

        ];
    }

}
<?php 
namespace Nigromante\Guitar\Exports;
use Nigromante\Guitar\Security\Application\Command\handleCheckUserRoleCommand;
use Nigromante\Guitar\Security\Application\Command\CheckUserRoleCommand;


class CommandHandlers {

    public static function defines() {

        return [

            CheckUserRoleCommand::class => handleCheckUserRoleCommand::class

        ];
    }

}
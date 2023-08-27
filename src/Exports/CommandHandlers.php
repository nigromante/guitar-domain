<?php 
namespace Nigromante\Guitar\Exports;

use Nigromante\Guitar\Security\Application\Command\handleCheckUserRoleCommand;
use Nigromante\Guitar\Security\Application\Command\CheckUserRoleCommand;
use Nigromante\Guitar\Security\Application\Command\CheckAssignmentResourceCommand;
use Nigromante\Guitar\Security\Application\Command\handleCheckAssignmentResourceCommand;


class CommandHandlers {

    public static function defines() {

        return [

            CheckUserRoleCommand::class => handleCheckUserRoleCommand::class ,
            CheckAssignmentResourceCommand::class => handleCheckAssignmentResourceCommand::class

        ];
    }

}
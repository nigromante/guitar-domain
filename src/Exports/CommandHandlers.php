<?php 
namespace Nigromante\Guitar\Exports;


class CommandHandlers {

    public static function defines() {

        return [

            CheckUserRoleComman::class => CheckUserRoleCommandHandler::class

        ];
    }

}
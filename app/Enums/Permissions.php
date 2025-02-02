<?php

namespace App\Enums;

enum Permissions: string
{
    // Users
    case CAN_ADD_USER = "add user";
    case CAN_EDIT_USER = "edit user";
    case CAN_DELETE_USER = "delete user";
    case CAN_ADD_ROLE_TO_USER = "add role user";

    // ROLES and PERMISSIONS
    case CAN_ADD_ROLE = "add role";
    case CAN_EDIT_ROLE = "edit role";
    case CAN_DELETE_ROLE = "delete role";

    case CAN_ADD_PERMISSION = "add permission";
    case CAN_EDIT_PERMISSION = "edit permission";
    case CAN_DELETE_PERMISSION = "delete permission";

    // Videos
    case CAN_ADD_VIDEO = "add video";
    case CAN_EDIT_VIDEO = "edit video";
    case CAN_DELETE_VIDEO = "delete video";

    // Admin Panel
    case CAN_ENTER_TO_ADMIN_PANEL= "enter admin panel";

}

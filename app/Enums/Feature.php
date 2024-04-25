<?php

namespace App\Enums;

use ArchTech\Enums\Values;
use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Names;

enum Feature: string
{
    use Values;
    use InvokableCases;
    use Names;

    case FEATURES = 'FEATURES';
    case FORGET_PASSWORD = 'FORGET_PASSWORD';
    case CHANGE_PASSWORD = 'CHANGE_PASSWORD';
    case ENFORCEMENT_CHANGE_PASSWORD = 'ENFORCEMENT_CHANGE_PASSWORD';
    case SOCIAL_LOGIN = 'SOCIAL_LOGIN';
    case REGISTER = 'REGISTER';
    case LOGIN = 'LOGIN';
    case LOOKUPS = 'LOOKUPS';
    case LOOKUP_CATEGORIES = 'LOOKUP_CATEGORIES';
    case ROLES = 'ROLES';
    case PERMISSIONS = 'PERMISSIONS';
    case UPDATE_PROFILE = 'UPDATE_PROFILE';
    case TOGGLE_ACTIVE = 'TOGGLE_ACTIVE';
    case USER_CRUD_OPERATIONS = 'USER_CRUD_OPERATIONS';
    case AUTO_LOGIN_AFTER_RESET_PASSWORD = 'AUTO_LOGIN_AFTER_RESET_PASSWORD';
    case AUTO_LOGIN_AFTER_EMAIL_VERIFICATION = 'AUTO_LOGIN_AFTER_EMAIL_VERIFICATION';
    case AUTO_GENERATE_PASSWORD = 'AUTO_GENERATE_PASSWORD';

}

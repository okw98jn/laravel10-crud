<?php
namespace App\Consts;

class AdminConsts
{
    public const STATUS_VALID   = 1;
    public const STATUS_INVALID = 0;

    public const ROLE_ADMIN = 0;
    public const ROLE_STAFF = 1;

    public const ROLE_LIST = [
        self::ROLE_ADMIN => '管理者',
        self::ROLE_STAFF => '一般スタッフ',
    ];

}
<?php

namespace app\observer\Login;

class PartnershipTool extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // Проверяем ip-address
        // Отправим cookie файлы, если адрес соотвествует списку
        echo __CLASS__ . " : Отправка cookie файла , если адрес соотвествует списку";
    }
}
<?php

namespace app\factoryMethod;

abstract class ComssManager // Класс производитель
{
 abstract public function getHeaderText() : string;
 abstract public function getApptEncoder() : ApptEncoder;
 abstract public function getFooterText() : string;
}
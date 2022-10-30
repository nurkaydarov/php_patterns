<?php

namespace app\observer\Login;

interface Observer
{
    public function update(Observable $observable);
}
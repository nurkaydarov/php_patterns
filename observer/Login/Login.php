<?php

namespace app\observer\Login;

class Login implements Observable
{
    private array $observers = [];
    private array $storage;

    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    private array $status = [];


    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $this->observers = array_filter($this->observers, function($element) use ($observer){
            return (!($element === $observer));
        });
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function handleLogin(string $user, string $pass, string $ip) : bool
    {
        switch (rand(1,3)){
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $isvalid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $isvalid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $isvalid = false;
                break;
        }
        $this->notify($this);
        return $isvalid;
    }
    private function setStatus(int $status, string $user, string $ip){
        $this->status = [$status, $user, $ip];
    }
    public function getStatus():array{
        return $this->status;
    }
}
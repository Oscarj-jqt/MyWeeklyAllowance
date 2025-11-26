<?php

namespace App;

class Account
{
    private float $balance = 0.0;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getBalance(): float 
    { 
        return $this->balance;
    }
    public function add(float $amount): void 
    { 
        $this->balance += $amount;
    }
    public function spend(float $amount): void 
    { 
        $this->balance -= $amount; 
    }
}
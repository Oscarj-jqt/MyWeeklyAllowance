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

    // Obtenir le solde du compte
    public function getBalance(): float 
    { 
        return $this->balance;
    }
    
    // Déposer de l'argent sur le compte
    public function add(float $amount): void 
    { 
        $this->balance += $amount;
    }

    // Dépenser de l'argent du compte
    public function spend(float $amount): void 
    { 
        $this->balance -= $amount; 
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
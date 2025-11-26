<?php

namespace App;

class User
{
    private string $firstName;
    private string $lastName;
    private string $userName;
    private string $email;

    public function __construct(string $firstName, string $lastName, string $userName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
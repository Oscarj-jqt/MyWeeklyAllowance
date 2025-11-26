<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    public function testCanCreateUser()
    {
        $user = new User("John", "Doe", "johndoe", "john@example.com");
        $this->assertEquals("John", $user->getFirstName());
        $this->assertEquals("Doe", $user->getLastName());
        $this->assertEquals("johndoe", $user->getUserName());
        $this->assertEquals("john@example.com", $user->getEmail());
    }
}
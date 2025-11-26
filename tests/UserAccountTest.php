<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\User;
use App\Account;

class UserAccountTest extends TestCase
{
    public function testCanCreateUserWithAccount()
    {
        $user = new User("Jean", "Durand", "jean21", "jean@email.com");
        $account = new Account($user);

        $this->assertInstanceOf(User::class, $user);
        $this->assertInstanceOf(Account::class, $account);

        $this->assertSame($user, $this->getUserFromAccount($account));

        $this->assertEquals(0.0, $account->getBalance());
    }

    private function getUserFromAccount(Account $account): User {
        $reflect = new ReflectionClass($account);
        $prop = $reflect->getProperty('user');
        $prop->setAccessible(true);
        return $prop->getValue($account);
    }
}
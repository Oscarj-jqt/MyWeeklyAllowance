<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\User;
use App\Account;

class AccountTest extends TestCase
{
    private Account $account;
    private User $user;

    protected function setUp(): void
    {
        $this->user = new User("Jean", "Durand", "jean21", "jean@email.com");
        $this->account = new Account($this->user);
    }

    public function testInitialBalanceIsZero()
    {
        $this->assertEquals(0.0, $this->account->getBalance());
    }

    
}
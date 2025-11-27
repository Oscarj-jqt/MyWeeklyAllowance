<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\User;
use App\Account;

class AccountTest extends TestCase
{
    private Account $account;
    private User $user;


    // Création d'un utilisateur et d'un compte avant chaque test
    protected function setUp(): void
    {
        $this->user = new User("Jean", "Durand", "jean21", "jean@email.com");
        $this->account = new Account($this->user);
    }

    public function testInitialBalanceIsZero()
    {
        $this->assertEquals(0.0, $this->account->getBalance());
    }

    public function testAccountIsLinkedToUser()
    {
        $this->assertSame($this->user, $this->account->getUser());
    }

    // Dépôt d'argent sur le compte
    public function testAddMoneyIncreasesBalance()
    {
        $this->account->add(25.0);
        $this->assertEquals(25.0, $this->account->getBalance());
    }
}
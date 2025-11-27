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

    // Dépense d'argent du compte et enregistrement de la dépense
    public function testRecordExpenseDecreasesBalanceAndStoresExpense()
    {
        $this->account->add(50.0);
        $this->account->recordExpense(12.0, "cinéma");
        $this->assertEquals(38.0, $this->account->getBalance());

        $expenses = $this->account->getExpenses();
        $this->assertCount(1, $expenses);
        $this->assertEquals(12.0, $expenses[0]['amount']);
        $this->assertEquals("cinéma", $expenses[0]['description']);
    }

    public function testWeeklyAllowanceIsAddedToBalance()
    {
        $this->account->setWeeklyAllowance(10.0);
        $this->account->applyWeeklyAllowance();
        $this->assertEquals(10.0, $this->account->getBalance());

        $this->account->applyWeeklyAllowance();
        $this->assertEquals(20.0, $this->account->getBalance());
    }
}
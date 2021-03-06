<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MerchantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MerchantsTable Test Case
 */
class MerchantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MerchantsTable
     */
    public $Merchants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Merchants',
        'app.Users',
        'app.States',
        'app.Cities',
        'app.BankAccounts',
        'app.CartItems',
        'app.Coupons',
        'app.MerchantGalleries',
        'app.MerchantPayouts',
        'app.MerchantProducts',
        'app.MerchantTransactions',
        'app.OrderPayments',
        'app.Orders',
        'app.Purchases',
        'app.Reviews',
        'app.Suppliers',
        'app.Wishlists',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Merchants') ? [] : ['className' => MerchantsTable::class];
        $this->Merchants = TableRegistry::getTableLocator()->get('Merchants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Merchants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

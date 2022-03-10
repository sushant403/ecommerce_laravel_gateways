<?php

namespace Tests\Browser\Modules\Marketing;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Modules\Marketing\Entities\BulkSMS;
use Tests\DuskTestCase;

class BulkSMSTest extends DuskTestCase
{
    use WithFaker;
    public function setUp(): void
    {
        parent::setUp();


    }

    public function tearDown(): void
    {
        $sms_ids = BulkSMS::pluck('id');
        BulkSMS::destroy($sms_ids);

        parent::tearDown(); // TODO: Change the autogenerated stub
    }
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_for_visit_index_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visit('/marketing/bulk-sms')
                    ->assertSee('SMS List');
        });
    }

    public function test_for_all_user_create_bulk_sms(){
        $this->test_for_visit_index_page();
        $this->browse(function (Browser $browser) {
            $browser->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(2) > div > label')
                ->pause(1000)
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div > ul > li:nth-child(2)')
                ->pause(1000)
                ->assertSeeAnythingIn('#all_user_div > div > label')
                ->click('#submit_btn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Created successfully!');

        });
    }

    public function test_for_role_wise_create_bulk_sms(){
        $this->test_for_visit_index_page();
        $this->browse(function (Browser $browser) {
            $browser->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(2) > div > label')
                ->pause(1000)
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div > ul > li:nth-child(3)')
                ->pause(1000)
                ->click('#select_role_div > div > div')
                ->click('#select_role_div > div > div > ul > li:nth-child(2)')
                ->pause(9000)
                ->click('#submit_btn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Created successfully!');

        });
    }

    public function test_for_multiple_role_select_user_create_bulk_sms(){
        $this->test_for_visit_index_page();
        $this->browse(function (Browser $browser) {
            $browser->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(2) > div > label')
                ->pause(1000)
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div > ul > li:nth-child(4)')
                ->pause(1000)
                ->click('#multiple_role_div > div:nth-child(3) > label')
                ->pause(1000)
                ->click('#multiple_role_div > div:nth-child(4) > label')
                ->pause(1000)
                ->click('#submit_btn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Created successfully!');

        });
    }

    public function test_for_validate_create_form(){
        $this->test_for_visit_index_page();
        $this->browse(function (Browser $browser) {
            $browser->type('#title', '')
                ->type('#message', 'test sms from printgaraun')
                ->type('#publish_date', '')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(2) > div > label')
                ->pause(1000)
                ->click('#submit_btn')
                ->waitForTextIn('#error_title', 'The title field is required.', 25)
                ->assertSeeIn('#error_title', 'The title field is required.')
                ->assertSeeIn('#error_message', 'The message field is required.')
                ->assertSeeIn('#error_publish_date', 'The publish date field is required.')
                ->assertSeeIn('#error_send_to', 'The send to field is required.')
                ->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(2) > div > label')
                ->pause(1000)
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div > ul > li:nth-child(3)')
                ->pause(1000)
                ->click('#submit_btn')
                ->pause(1000)
                ->waitForTextIn('#error_role', 'The role field is required.', 25)
                ->assertSeeIn('#error_role', 'The role field is required.')
                ->assertSeeIn('#error_role_user', 'The role user field is required.')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div')
                ->click('#add_form > div > div:nth-child(1) > div:nth-child(4) > div > div > ul > li:nth-child(4)')
                ->pause(1000)
                ->click('#multiple_role_div > div:nth-child(3) > label')
                ->pause(1000)
                ->click('#submit_btn')
                ->pause(1000)
                ->waitForTextIn('#error_role_list', 'The role list field is required.', 25)
                ->assertSeeIn('#error_role_list', 'The role list field is required.');
        });
    }

    public function test_for_all_user_edit_bulk_sms(){
        $this->test_for_all_user_create_bulk_sms();
        $this->browse(function (Browser $browser) {
            $browser->visit('/marketing/bulk-sms')
                ->pause(10000)
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > button')
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > div > a.dropdown-item.edit_sms')
                ->waitForText('Update Bulk SMS', 25)
                ->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun edit')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#edit_form > div > div:nth-child(1) > div:nth-child(3) > div > label')
                ->pause(1000)
                ->click('#edit_form > div > div:nth-child(1) > div:nth-child(5) > div > div')
                ->click('#edit_form > div > div:nth-child(1) > div:nth-child(5) > div > div > ul > li:nth-child(3)')
                ->pause(1000)
                ->click('#select_role_div > div > div')
                ->click('#select_role_div > div > div > ul > li:nth-child(3)')
                ->pause(10000)
                ->click('#submit_btn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');

        });
    }

    public function test_for_rolewise_edit_bulk_sms(){
        $this->test_for_role_wise_create_bulk_sms();
        $this->browse(function (Browser $browser) {
            $browser->visit('/marketing/bulk-sms')
                ->pause(10000)
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > button')
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > div > a.dropdown-item.edit_sms')
                ->waitForText('Update Bulk SMS', 25)
                ->type('#title', $this->faker->title)
                ->type('#message', 'test sms from printgaraun edit')
                ->type('#publish_date', date('m/d/Y'))
                ->click('#edit_form > div > div:nth-child(1) > div:nth-child(3) > div > label')
                ->pause(1000)

                ->click('#select_role_div > div > div')
                ->click('#select_role_div > div > div > ul > li:nth-child(3)')
                ->pause(10000)
                ->click('#submit_btn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');

        });
    }

    public function test_for_delete_bulk_sms(){
        $this->test_for_role_wise_create_bulk_sms();
        $this->browse(function (Browser $browser) {
            $browser->visit('/marketing/bulk-sms')
                ->pause(10000)
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > button')
                ->click('#bulkSmsTable > tbody > tr > td:nth-child(8) > div > div > a.dropdown-item.delete_sms')
                ->whenAvailable('#item_delete_form', function($modal){
                    $modal->click('#dataDeleteBtn');
                })
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Deleted successfully!');
        });    
    }

    
    
}

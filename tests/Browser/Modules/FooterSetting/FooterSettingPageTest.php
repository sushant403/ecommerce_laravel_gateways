<?php

namespace Tests\Browser\Modules\FooterSetting;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Modules\FooterSetting\Entities\FooterWidget;
use Tests\DuskTestCase;

class FooterSettingPageTest extends DuskTestCase
{

    public function setUp(): void
    {
        parent::setUp();


    }

    public function tearDown(): void
    {
        $pages = FooterWidget::pluck('id');
        FooterWidget::destroy($pages);

        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_for_footer_setting_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/footer/footer-setting')
                ->assertSee('COPYRIGHT TEXT');
        });
    }

    public function test_for_update_copyright(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->type('#copyright_form > div > div > div:nth-child(1) > div > div > div > div.note-editing-area > div.note-editable', 'Copyright © 2019. All rights reserved to PrintGaraun')
                ->click('#copyrightBtn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');
        });
    }

    public function test_for_update_about_text(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->click('#main-content > section > div.container-fluid.p-0 > div > div > div:nth-child(1) > div > div > div > ul > li:nth-child(2)')
                ->waitFor('#about_title', 1)
                ->type('#about_title', 'About edit')
                ->click('#aboutSectionBtn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!')
                ->type('#about_description', 'lorem ipsum dolar emmet')
                ->click('#aboutDescriptionBtn')
                ->pause(8000)
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');
        });
        
    }

    public function test_for_update_company_title(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->click('#company_tab')
                ->waitFor('#companyForm > div > div > div:nth-child(1) > div > div > input',25)
                ->type('#companyForm > div > div > div:nth-child(1) > div > div > input', 'Company edit')
                ->click('#companyBtn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');
        });
    }

    public function test_for_add_new_page_company(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->click('#company_tab')
                ->waitFor('#companyForm > div > div > div:nth-child(1) > div > div > input',2)
                ->click('#add_new_page_btn')
                ->pause(2000)
                ->whenAvailable('#widget_create_form', function($modal){
                    $modal->type('#name', 'test page 1')
                        ->click('div > div > div:nth-child(2) > div > div')
                        ->click('div > div > div:nth-child(2) > div > div > ul > li:nth-child(4)')
                        ->click('#widget_create_btn');
                })
                ->assertPathIs('/footer/footer-setting')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Page Created Successfully.');
        });
    }

    public function test_for_edit_widget(){
        $this->test_for_add_new_page_company();
        $this->browse(function (Browser $browser) {
            $browser->click('#company_tab')
                ->waitFor('#companyForm > div > div > div:nth-child(1) > div > div > input',1)
                ->click('#DataTables_Table_0 > tbody > tr > td:nth-child(4) > div')
                ->click('#DataTables_Table_0 > tbody > tr > td:nth-child(4) > div > div > a.dropdown-item.edit_page')
                ->whenAvailable('#widget_edit_form', function($modal){
                    $modal->type('#widget_name', 'test page 1 edit')
                        ->click('div > div > div:nth-child(2) > div > div')
                        ->click('div > div > div:nth-child(2) > div > div > ul > li:nth-child(3)')
                        ->click('div > div > div.col-lg-12.text-center.mt-40 > button.primary-btn.fix-gr-bg.tooltip-wrapper');
                })
                ->assertPathIs('/footer/footer-setting')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Page Updated Successfully.');

        });
    }

    public function test_for_delete_widget(){
        $this->test_for_add_new_page_company();
        $this->browse(function (Browser $browser) {
            $browser->click('#company_tab')
                ->waitFor('#companyForm > div > div > div:nth-child(1) > div > div > input',1)
                ->click('#DataTables_Table_0 > tbody > tr > td:nth-child(4) > div')
                ->click('#DataTables_Table_0 > tbody > tr > td:nth-child(4) > div > div > a.dropdown-item.delete_page')
                ->whenAvailable('#deleteBtn', function($modal){
                    $modal->click('#deleteBtn');
                })
                ->assertPathIs('/footer/footer-setting')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Deleted successfully!');

        });

    }

    public function test_for_update_my_account_section(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->click('#main-content > section > div.container-fluid.p-0 > div > div > div:nth-child(1) > div > div > div > ul > li:nth-child(4)')
                ->waitFor('#accountForm > div > div > div:nth-child(1) > div > div > input',25)
                ->type('#accountForm > div > div > div:nth-child(1) > div > div > input', 'My Account edit')
                ->click('#accountBtn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');
        });
    }

    public function test_for_update_services_section(){
        $this->test_for_footer_setting_index();
        $this->browse(function (Browser $browser) {
            $browser->click('#main-content > section > div.container-fluid.p-0 > div > div > div:nth-child(1) > div > div > div > ul > li:nth-child(5)')
                ->waitFor('#serviceForm > div > div > div:nth-child(1) > div > div > input',25)
                ->type('#serviceForm > div > div > div:nth-child(1) > div > div > input', 'Services edit')
                ->click('#serviceBtn')
                ->waitFor('.toast-message',25)
                ->assertSeeIn('.toast-message', 'Updated successfully!');
        });
    }

}

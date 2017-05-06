<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('perform invalid login test');
$I->amOnPage('/');
$I->fillField('_username','parvez.mist@gmail.com');
$I->fillField('_password','sddd#');
$I->click(['class' => 'login-btn--submit']);
$I->seeInCurrentUrl('/login');

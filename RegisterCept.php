<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Perform registration with already registered email');
$I->amOnPage('/');
$I->click(['class' => 'js_tlgSignup']);
$I->fillField('sEmail','parvez.mist@gmail.com');
$I->fillField('sPassword','1234556A#');
$I->click(['class' => 'login-btn--submit']);
$I->seeElement('.alert--error');

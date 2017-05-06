<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Search is functioning properly');
$I->amOnPage('/');
$I->fillField('sQuery','Hamburg');
$I->click(['class'=> 'horus-btn-search']);
$I->seeInField('sQuery', 'Hamburg');
$I->seeElement('.available-number');

<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('view deal link is taking user to external deal site');
$I->amOnPage('/');
$I->fillField('sQuery','Hamburg');
$I->click(['class'=> 'horus-btn-search']);
$I->click(['class'=> 'btn']);
$I->dontSeeInCurrentUrl('trivago');
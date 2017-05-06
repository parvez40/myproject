<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify that I am in homepage');
$I->amOnPage('/');
$I->see('home');


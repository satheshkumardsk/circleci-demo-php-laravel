<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('open index page of site');
$I->amOnPage('/');
$I->see('Hello circleci', 'h1');

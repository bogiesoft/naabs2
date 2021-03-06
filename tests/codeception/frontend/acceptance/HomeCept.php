<?php
use tests\codeception\frontend\AcceptanceTester;

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Naabs 2');
$I->seeLink('About');
$I->click('About');
$I->see('This is the About page.');

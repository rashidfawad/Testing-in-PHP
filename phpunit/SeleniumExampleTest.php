<?php
/**
 * Created by PhpStorm.
 * User: Rashid
 * Date: 08/06/2015
 * Time: 04:52
 */

class SeleniumExampleTest extends PHPUnit_Extensions_SeleniumTestCase {
	protected function setUp() {
		$captureScreenshotOnFailure = TRUE;
		$screenshotPath = 'c:/wamp/www/meetup/phpunit';
		$screenshotUrl = 'http://localhost/screenshots';
		
		$this->setBrowser('*safari');
		$this->setBrowserUrl('http://www.rashidkhan.info');
	}

	public function testTitle() {
		$this->open('http://www.rashidkhan.info');
		$this->assertTitle('Rashid Khan');
		return;
	}
} 
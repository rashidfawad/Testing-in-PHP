<?php
/**
 * Created by PhpStorm.
 * User: Rashid
 * Date: 29/03/2015
 * Time: 17:26
 */

class ProcessTest extends PHPUnit_Extensions_Database_TestCase {
	public function setUp() {
		//perform some initial steps.
		if(!extension_loaded('mysqlnd_memcache')) {
			//$this->markTestIncomplete('Test cannot be performed!');
			//$this->markTestSkipped('This is a Skipped Test');
		}

	}
	public function tearDown() {
		//perform last minute processing.
	}
	public function testSomething() {
		$this->assertTrue(true);
		$arr = array("location" => "Stockholm", "meetup" => "PHP", "Year" => 2015);
		$this->assertArrayHasKey("location", $arr, "Key doesn't exists");
	}

	public function getConnection() {

	}
	public function getDataSet() {

	}
}

class otherTest extends PHPUnit_Extensions_Database_TestCase {
	public function getConnection() {

	}
	public function getDataSet() {

	}
	public function testSomething() {
		$this->assertEquals(1, 1);
	}

}

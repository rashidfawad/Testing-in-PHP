<?php

require_once __DIR__ . '/../simpletest/autorun.php';
require_once __DIR__ . '/../simpletest/web_tester.php';

class ContactFormTest extends WebTestCase {

	//write tests here.
	function testIfContactFormExists() {
		$this->get('http://localhost/meetup/SimpleTest/contactForm.php');
		$this->assertResponse(200);
	}

	public function testFormSubmission() {
		$this->get('http://localhost/meetup/SimpleTest/contactForm.php');
		$this->assertResponse(200);

		$this->click('Home');
		$this->assertTitle('Contact Form for SimpleTest');
		$this->assertText('Contact Form');

		$this->setField('name', "Rashid Khan");
		$this->setField("email", "rashidkhan@rashidkhan.info");
		$this->setField("message", "Testing the form functionality");
		$this->assertField("name", "Rashid Khan");
		$this->clickSubmit("Send email");
		//$this->assertImage("image");
		$this->assertText('Thank youss');


		$this->assertResponse(200);

	}

}
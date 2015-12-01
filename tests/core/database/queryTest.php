<?php

namespace Core\Database;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-12-01 at 23:02:20.
 */
class QueryTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Query
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Query;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * Generated from @assert ('user') [==] "user".
	 *
	 * @covers Core\Database\Query::tableWithPrefix
	 */
	public function testTableWithPrefix()
	{

		$this->assertEquals(
		"user", $this->object->tableWithPrefix('user')
		);
	}

	/**
	 * @covers Core\Database\Query::getSetting
	 * @todo   Implement testGetSetting().
	 */
	public function testGetSetting()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\Query::text
	 * @todo   Implement testText().
	 */
	public function testText()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}
}
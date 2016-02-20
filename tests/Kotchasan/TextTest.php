<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-02-19 at 08:12:36.
 */
class TextTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Text
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Text;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * Generated from @assert ("SELECT * FROM table WHERE id=:id AND lang IN (:lang, '')", array(':id' => 1, array(':lang' => 'th'))) [==] "SELECT * FROM table WHERE id=1 AND lang IN (th, '')".
	 *
	 * @covers Kotchasan\Text::replace
	 */
	public function testReplace()
	{

		$this->assertEquals(
		"SELECT * FROM table WHERE id=1 AND lang IN (th, '')", \Kotchasan\Text::replace("SELECT * FROM table WHERE id=:id AND lang IN (:lang, '')", array(':id' => 1, array(':lang' => 'th')))
		);
	}

	/**
	 * Generated from @assert ('&"'."'<>{}&amp;&#38;") [==] "&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;".
	 *
	 * @covers Kotchasan\Text::toEditor
	 */
	public function testToEditor()
	{

		$this->assertEquals(
		"&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;", \Kotchasan\Text::toEditor('&"'."'<>{}&amp;&#38;")
		);
	}

	/**
	 * @covers Kotchasan\Text::cut
	 * @todo   Implement testCut().
	 */
	public function testCut()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Kotchasan\Text::formatFileSize
	 * @todo   Implement testFormatFileSize().
	 */
	public function testFormatFileSize()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Kotchasan\Text::rndname
	 * @todo   Implement testRndname().
	 */
	public function testRndname()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Kotchasan\Text::highlighter
	 * @todo   Implement testHighlighter().
	 */
	public function testHighlighter()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}
}
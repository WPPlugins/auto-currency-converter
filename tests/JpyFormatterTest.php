<?php
namespace Akky\Money;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-03-16 at 15:30:58.
 */
class JpyFormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var JpyFormatter
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new JpyFormatter;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert ('34000', 'en') == '¥34,000'.
     *
     * @covers JpyFormatter::format
     */
    public function testFormat()
    {
        $this->assertEquals(
            '¥34,000'
            JpyFormatter::format('34000', 'en')
        );
    }

    /**
     * Generated from @assert ('123456.789', 'en') == '¥123,457'.
     *
     * @covers JpyFormatter::format
     */
    public function testFormat2()
    {
        $this->assertEquals(
            '¥123,457'
            JpyFormatter::format('123456.789', 'en')
        );
    }

    /**
     * Generated from @assert ('1234567890', 'en') == '¥1,234,567,890'.
     *
     * @covers JpyFormatter::format
     */
    public function testFormat3()
    {
        $this->assertEquals(
            '¥1,234,567,890'
            JpyFormatter::format('1234567890', 'en')
        );
    }

    /**
     * Generated from @assert ("34000") == "3万4000円".
     *
     * @covers JpyFormatter::formatInJapanese
     */
    public function testFormatInJapanese()
    {
        $this->assertEquals(
            "3万4000円"
            JpyFormatter::formatInJapanese("34000")
        );
    }

    /**
     * Generated from @assert ("123456.789") == "12万3457円".
     *
     * @covers JpyFormatter::formatInJapanese
     */
    public function testFormatInJapanese2()
    {
        $this->assertEquals(
            "12万3457円"
            JpyFormatter::formatInJapanese("123456.789")
        );
    }

    /**
     * Generated from @assert ("1234567890") == "12億3456万7890円".
     *
     * @covers JpyFormatter::formatInJapanese
     */
    public function testFormatInJapanese3()
    {
        $this->assertEquals(
            "12億3456万7890円"
            JpyFormatter::formatInJapanese("1234567890")
        );
    }

    /**
     * Generated from @assert ("92610000000000") == "92兆6100億円".
     *
     * @covers JpyFormatter::formatInJapanese
     */
    public function testFormatInJapanese4()
    {
        $this->assertEquals(
            "92兆6100億円"
            JpyFormatter::formatInJapanese("92610000000000")
        );
    }
}
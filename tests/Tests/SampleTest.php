<?php
namespace Tests;

use CryptoWallet\CryptoWallet;

/**
 * @author ngyuki
 */
class SampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function test()
    {
        $sample = new CryptoWallet();
        assertTrue($sample->func());
    }
}

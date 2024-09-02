<?php declare(strict_types= 1);

namespace Tests\Shared;

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\Shared\Utility;

class UtilityTest extends TestCase {

    public function test_sortedCharacters_Should_ReturnSortedString_When_GivenAWordOfAlphabeticCharacters() {
        $word = 'programming';

        $resultingString = Utility::sortCharacters($word);

        $firstChar = substr($resultingString,0,1);
        $lastChar = substr($resultingString,-1);
        $result = $firstChar == 'a' && $lastChar == 'r';

        $this->assertTrue($result);
    }

    public function test_sortedCharacters_Should_ReturnNull_When_GivenAWordWithNonAlphabeticCharacters() {
        $word = 'programm1ng';

        $result = Utility::sortCharacters($word);
        $this->assertEquals('', $result);
    }

}

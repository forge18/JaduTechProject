<?php declare(strict_types= 1);

namespace Tests;

require './vendor/autoload.php';

include_once './src/Checker.php';

use PHPUnit\Framework\TestCase;
use Src\Checker;

class CheckerTest extends TestCase {

    public function test_isAnagram_Should_ReturnTrue_When_WordIsAnagramOfComparison() {
        $word = 'astronomer';
        $comparison = 'moon starer';

        $result = Checker::isAnagram($word,$comparison);
        $this->assertTrue($result);
    }

    public function test_isAnagram_Should_ReturnFalse_When_WordIsNotAnagramOfComparison() {
        $word = 'astronomer';
        $comparison = 'moon looker';

        $result = Checker::isAnagram($word,$comparison);
        $this->assertFalse($result);
    }

    public function test_isAnagram_Should_ReturnFalse_When_WordHasIllegalCharacters() {
        $word = 'astronomer';
        $comparison = 'moon starer!';

        $result = Checker::isAnagram($word,$comparison);
        $this->assertFalse($result);
    }

    public function test_isPalindrome_Should_ReturnTrue_When_WordIsPalindrome() {
        $word = 'anna';

        $result = Checker::isPalindrome($word);
        $this->assertTrue($result);
    }

    public function test_isPalindrome_Should_ReturnFalse_When_WordIsNotPalindrome() {
        $word = 'bark';

        $result = Checker::isPalindrome($word);
        $this->assertFalse($result);
    }

    public function test_isPangram_Should_ReturnTrue_When_PhraseIsPangram() {
        $phrase = 'The quick brown fox jumps over the lazy dog';

        $result = Checker::isPangram($phrase);
        $this->assertTrue($result);
    }

    public function test_isPangram_Should_ReturnFalse_When_PhraseIsNotPangram() {
        $phrase = 'The British Broadcasting Corporation (BBC) is a British public service broadcaster.';

        $result = Checker::isPangram($phrase);
        $this->assertFalse($result);
    }

}
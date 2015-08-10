<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_exceptDesignatedWords()
        {
            //Arrange
            $test = new TitleCaseGenerator;
            $input = "rock from the moon";


            //Act
            $result = $test->makeTitleCase($input);

            //Assert
            $this->assertEquals("Rock from the Moon", $result);
        }

        function test_makeTitleCase_firstWordTitle()
        {
            //Arrange
            $test = new TitleCaseGenerator;
            $input = "from dusk till dawn";

            //Act
            $result = $test->makeTitleCase($input);

            //Assert
            $this->assertEquals("From Dusk till Dawn", $result);
        }

        function test_makeTitleCase_handleNonWords()
        {
            //Arrange
            $test = new TitleCaseGenerator;
            $input = "fahrenheit 451!";

            //Act
            $result = $test->makeTitleCase($input);

            //Assert
            $this->assertEquals("Fahrenheit 451!", $result);
        }

        function test_makeTitleCase_handleUpper()
        {

            //Arrange
            $test = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            //Act
            $result = $test->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);

        }

        function test_makeTitleCase_handleMixed()
        {

            //Arrange
            $test = new TitleCaseGenerator;
            $input = "BeOWuLF On ThE RoCkS";

            //Act
            $result = $test->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);

        }
    }
?>

<?php

  require_once "src/RockPaperScissors.php";

  class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
  {

      function test_rock_rock()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Rock";
          $second_input = "Rock";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Draw", $result);
      }

      function test_paper_paper()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Paper";
          $second_input = "Paper";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Draw", $result);
      }

      function test_scissors_scissors()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Scissors";
          $second_input = "Scissors";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Draw", $result);
      }

      function test_rock_scissors()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Rock";
          $second_input = "Scissors";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Rock", $result);
      }

      function test_rock_paper()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Rock";
          $second_input = "Paper";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Paper", $result);
      }

      function test_paper_rock()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Paper";
          $second_input = "Rock";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Paper", $result);
      }

      function test_paper_scissors()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Paper";
          $second_input = "Scissors";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Scissors", $result);
      }

      function test_scissors_paper()
      {
          //Arrange
          $test_RockPaperScissors = new RockPaperScissors;
          $first_input = "Scissors";
          $second_input = "Paper";

          //App
          $result = $test_RockPaperScissors->playGame($first_input, $second_input);

          //Assert
          $this->assertEquals("Player2", $result);
      }

    }




 ?>

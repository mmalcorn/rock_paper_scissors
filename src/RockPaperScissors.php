<?php

    class RockPaperScissors
    {
      // private $player1;
      // private $player2;
      //
      // function __construct($player1, $player){
      //   $this->player1 = $player1;
      //   $this->player2 = $player2;
      // }

        function playGame($first_input, $second_input)
        {
            $resultArray = array();
            // Boooo, play till there's a winner!
            if ($first_input === $second_input)
            {
                // array_push($_SESSION["rock_paper_scissors"], "Draw");
                array_push($resultArray, "Draw");


            }

            // Rock v. Scissors = Rock Baby!!
            else if (($first_input === "Rock" || $second_input === "Rock") && ($first_input === "Scissors" || $second_input === "Scissors"))
            {
                if  ($first_input === "Rock") {
                    array_push($resultArray, "Player1");
                }
                else if ($second_input === "Rock") {
                    array_push($resultArray, "Player2");
                }
                // array_push($_SESSION["rock_paper_scissors"], "Rock");
                // array_push($resultArray, "Rock");

            }

            // Rock v. Paper = Paper against all odds!!
            else if (($first_input === "Rock" || $second_input === "Rock") && ($first_input === "Paper" || $second_input === "Paper"))
            {
                if  ($first_input === "Paper") {
                    array_push($resultArray, "Player1");
                }
                else if ($second_input === "Paper") {
                    array_push($resultArray, "Player2");
                }
                // array_push($_SESSION["rock_paper_scissors"], "Paper");
                  // array_push($resultArray, "Paper");
            }

            // Paper v. Scissors = Scissors
            else if (($first_input === "Scissors" || $second_input === "Scissors") && ($first_input === "Paper" || $second_input === "Paper") )
            {
                if  ($first_input === "Scissors") {
                    array_push($resultArray, "Player1");
                }
                else if ($second_input === "Scissors") {
                    array_push($resultArray, "Player2");
                }
                // array_push($_SESSION["rock_paper_scissors"], "Scissors");
                  // array_push($resultArray, "Scissors");
            }

            return $resultArray;


        }


        // function save(){
        //   array_push($_SESSION["rock_paper_scissors"], $this);
        // }

    }

?>

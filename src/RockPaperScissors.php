<?php

    class RockPaperScissors
    {
        function playGame($first_input, $second_input)
        {

            // Boooo, play till there's a winner!
            if ($first_input === $second_input)
            {
                return "Draw";
            }

            // Rock v. Scissors = Rock Baby!!
            else if (($first_input === "Rock" || $second_input === "Rock") && ($first_input === "Scissors" || $second_input === "Scissors"))
            {
                return "Rock";
            }

            // Rock v. Paper = Paper against all odds!!
            else if (($first_input === "Rock" || $second_input === "Rock") && ($first_input === "Paper" || $second_input === "Paper"))
            {
                return "Paper";
            }

            // Paper v. Scissors = Scissors
            else if (($first_input === "Scissors" || $second_input === "Scissors") && ($first_input === "Paper" || $second_input === "Paper") )
            {
                return "Scissors";
            }


        }

    }

?>

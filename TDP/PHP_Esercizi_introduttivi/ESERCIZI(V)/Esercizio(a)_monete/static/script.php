<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];

        calc_monete($input);
    }

    function calc_monete ($input) {

        while(200 <= $input) {
            $input -= 200;
            echo "2euro ";
        }

        while(100 <= $input) {
            $input -= 100;
            echo "1euro ";
        }

        while(50 <= $input) {
            $input -= 50;
            echo "0.50euro ";
        }

        while(20 <= $input) {
            $input -= 20;
            echo "0.20euro ";
        }

        while(10 <= $input) {
            $input -= 10;
            echo "0.10euro ";
        }

        while(2 <= $input) {
            $input -= 2;
            echo "0.02euro ";
        }

        while(1 <= $input) {
            $input -= 1;
            echo "0.01euro ";
        }
    }
?>
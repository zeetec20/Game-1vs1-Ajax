<?php
    include('./connnection');
    $dataSelectionPlayer1 = mysqli_query($conn, "SELECT player1 FROM game WHERE round = $round");
    $selectionPlayer1 = mysqli_fetch_row($dataSelectionPlayer1);

    if ($selectionPlayer1 == 0) {
        $random = rand(1,3);
        mysqli_query($conn, "UPDATE game SET player1 = $random WHERE round = $round");
    }


    $dataSelectionPlayer2 = mysqli_query($conn, "SELECT player2 FROM game WHERE round = $round");
    $selectionPlayer2 = mysqli_fetch_row($dataSelectionPlayer2);

    if ($selectionPlayer2 == 0) {
        $random = rand(1,3);
        mysqli_query($conn, "UPDATE game SET player2 = $random WHERE round = $round");
    }
    

    $dataSelectionPlayer1 = mysqli_query($conn, "SELECT player1 FROM game WHERE round = $round");
    $selectionPlayer1 = mysqli_fetch_row($dataSelectionPlayer1);
    $dataSelectionPlayer2 = mysqli_query($conn, "SELECT player2 FROM game WHERE round = $round");
    $selectionPlayer2 = mysqli_fetch_row($dataSelectionPlayer2);

    if ($selectionPlayer1 != 0 && $selectionPlayer2 != 0 ) {
        // Menentukan pemenang dan update data winner
        if ($selectionPlayer1 == 1 && $selectionPlayer2 == 1) {
            $winner = "DRAW";
            mysqli_query("UPDATE game SET winner = 3 WHERE round = $round");
        }

        if ($selectionPlayer1 == 1 && $selectionPlayer2 == 2) {
            $winner = "Player 1";
            mysqli_query("UPDATE game SET winner = 1 WHERE round = $round");
        }

        if ($selectionPlayer1 == 1 && $selectionPlayer2 == 3) {
            $winner = "Player 2";
            mysqli_query("UPDATE game SET winner = 2 WHERE round = $round");
        }

        if ($selectionPlayer1 == 2 && $selectionPlayer2 == 1) {
            $winner = "Player 2";
            mysqli_query("UPDATE game SET winner = 2 WHERE round = $round");
        }

        if ($selectionPlayer1 == 2 && $selectionPlayer2 == 2) {
            $winner = "DRAW";
            mysqli_query("UPDATE game SET winner = 3 WHERE round = $round");
        }

        if ($selectionPlayer1 == 2 && $selectionPlayer2 == 3) {
            $winner = "Player 1";
            mysqli_query("UPDATE game SET winner = 1 WHERE round = $round");
        }

        if ($selectionPlayer1 == 3 && $selectionPlayer2 == 1) {
            $winner = "Player 1";
            mysqli_query("UPDATE game SET winner = 1 WHERE round = $round");
        }

        if ($selectionPlayer1 == 3 && $selectionPlayer2 == 2) {
            $winner = "Player 2";
            mysqli_query("UPDATE game SET winner = 2 WHERE round = $round");
        }

        if ($selectionPlayer1 == 3 && $selectionPlayer2 == 3) {
            $winner = "DRAW";
            mysqli_query("UPDATE game SET winner = 3 WHERE round = $round");
        }

    } else {
        # code...
    }
    
?>
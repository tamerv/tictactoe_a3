<?php
class TicTacToeEngine {
  private $board;
  private $cells;
  private $turn;

  public function __construct() {
    $this->board = '<script>document.getElementById("board");</script>';
    $this->cells = '<script>board.getElementsByTagName("td");</script>';
    $this->turn = "X";

    for ($i = 0; $i < count($this->cells); $i++) {
      $this->cells[$i]->addEventListener("click", function() {
        if ($this->cells[$i]->textContent === "") {
          $this->cells[$i]->textContent = $this->turn;
          $this->switchTurn();
        }
      });
    }
  }

  private function switchTurn() {
    if ($this->turn === "X") {
      $this->turn = "O";
    } else {
      $this->turn = "X";
    }
  }
}
?>

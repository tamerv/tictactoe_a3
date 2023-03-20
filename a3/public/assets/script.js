const board = document.getElementById("board");
const cells = board.getElementsByTagName("td");
let turn = "X";

for (let i = 0; i < cells.length; i++) {
  cells[i].addEventListener("click", function() {
    if (this.textContent === "") {
      this.textContent = turn;
      switchTurn();
    }
  });
}

function switchTurn() {
  if (turn === "X") {
    turn = "O";
  } else {
    turn = "X";
  }
}

function createReservationTable() {
    let table = document.getElementById("reservationTable");

    for (let i = 13; i <= 20; i++) {
        let row = table.insertRow();
        let timeCell = row.insertCell(0);

        timeCell.addEventListener("click", function () {
            handleTimeClick(timeCell);
        });

        let time = i + ":00";
        timeCell.textContent = time;
    }
}

function handleTimeClick(cell) {
    let allCells = document.querySelectorAll("#reservationTable td");

    allCells.forEach(function (otherCell) {
        unhighlightTimeCell(otherCell);
    });

    cell.style.backgroundColor = 'darksalmon';
}

function unhighlightTimeCell(cell) {
    cell.style.backgroundColor = '';
}

document.addEventListener("click", function (event) {
    let targetElement = event.target;

    if (!table.contains(targetElement)) {
        let allCells = document.querySelectorAll("#reservationTable td");
        allCells.forEach(function (cell) {
            unhighlightCell(cell);
        });
    }
});

createReservationTable();
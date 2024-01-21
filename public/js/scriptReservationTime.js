class ReservationTable {
    constructor() {
        this.reservationTable = document.getElementById("reservationTable");
        this.resTimeInput = document.getElementById('res_time');
        this.addEventListeners();
    }

    initializeTable() {
        for (let i = 13; i <= 20; i++) {
            let row = this.reservationTable.insertRow();
            let timeCell = row.insertCell(0);
            timeCell.style.backgroundColor = '#DDBDB7';

            timeCell.addEventListener("click", () => this.handleTimeClick(timeCell));

            timeCell.textContent = i + ":00";
        }
    }

    handleTimeClick(cell) {
        let allCells = document.querySelectorAll("#reservationTable td");

        allCells.forEach(function (otherCell) {
            this.unhighlightCell(otherCell);
        }, this);

        cell.style.backgroundColor = 'darksalmon';
        this.resTimeInput.value = cell.textContent;
    }

    unhighlightCell(cell) {
        cell.style.backgroundColor = '#DDBDB7';
    }

    addEventListeners() {
        document.addEventListener("click", (event) => {
            let targetElement = event.target;

            if (!this.reservationTable.contains(targetElement)) {
                let allCells = document.querySelectorAll("#reservationTable td");
                allCells.forEach((cell) => this.unhighlightCell(cell));
            }
        });
    }
}

const reservationTable = new ReservationTable();
reservationTable.initializeTable();

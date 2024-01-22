class ReservationTable {
    constructor() {
        this.reservationArray = [];
        this.reservationTable = document.getElementById("reservationTable");
        this.resTimeInput = document.getElementById('res_time');
        this.selectedCell = null;
        this.addEventListeners();
    }

    initializeTable() {
        const reservedTimes = this.reservationArray.map(reservation => reservation.res_time);
        for (let i = 13; i <= 20; i++) {
            let row = this.reservationTable.insertRow();
            let timeCell = row.insertCell(0);
            timeCell.style.backgroundColor = reservedTimes.includes(`${i}:00`) ? 'salmon' : '#DDBDB7';

            timeCell.addEventListener("click", () => this.handleTimeClick(timeCell));

            timeCell.textContent = i + ":00";
        }
    }

    handleTimeClick(cell) {
        if (cell.style.backgroundColor === 'salmon') {
            return;
        }

        if (this.selectedCell) {
            this.unhighlightCell(this.selectedCell);
        }
        this.highlightCell(cell);

        this.selectedCell = cell;

        this.resTimeInput.value = cell.textContent;
    }

    highlightCell(cell) {
        cell.style.backgroundColor = 'darksalmon';

        if (this.lastClickedCell && this.lastClickedCell !== cell) {
            this.unhighlightCell(this.lastClickedCell);
        }

        this.lastClickedCell = cell;
    }

    unhighlightCell(cell) {
       // cell.style.backgroundColor = this.reservationArray.map(reservation => reservation.res_time).includes(cell.textContent) ? 'pink' : '#DDBDB7';
        cell.style.backgroundColor = '#DDBDB7';
    }

    addEventListeners() {
        document.addEventListener("click", (event) => {
            let targetElement = event.target;

            if (!this.reservationTable.contains(targetElement)) {
                let allCells = document.querySelectorAll("#reservationTable td");
                allCells.forEach((cell) => this.unhighlightCell(cell));
                this.selectedCell = null;
            }
        });
    }

    checkReservationTimes() {
        const tableRows = this.reservationTable.querySelectorAll("tr");
       // const reservedTimes = Array.from(this.reservationArray.map(reservation => reservation.res_time));

        tableRows.forEach((row, index) => {
            if (index > 0) {
                const timeCell = row.cells[0];
                const timeValue = timeCell.textContent.trim();

                if (this.reservationArray.map(reservation => reservation.res_time).includes(timeValue)) {
                    timeCell.style.backgroundColor = 'salmon';
                }
            }
        });
    }

    updateReservationArray(newArray) {
        this.reservationArray = newArray;
        this.checkReservationTimes();
    }
}
const reservationTable = new ReservationTable();

reservationTable.initializeTable();
reservationTable.checkReservationTimes();



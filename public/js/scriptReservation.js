class ReservationCalendar {
    constructor() {
        this.currentYear = null;
        this.currentMonth = null;
        this.lastClickedCell = null;
        this.resDateInput = document.getElementById('res_date');
        this.months = ['Január', 'Február', 'Marec', 'April', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December'];
    }

    highlightCell(cell) {
        cell.style.backgroundColor = 'darksalmon';

        if (this.lastClickedCell && this.lastClickedCell !== cell) {
            this.unhighlightCell(this.lastClickedCell);
        }

        this.lastClickedCell = cell;

        const year = this.currentYear;
        const month = this.currentMonth + 1;
        const day = cell.textContent;
        this.resDateInput.value = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;

        this.displaySelectedDate(day, month, year);
    }

    unhighlightCell(cell) {
        cell.style.backgroundColor = '#DDBDB7';
    }

    displaySelectedDay(day) {
        const selectedDayElement = document.getElementById('selectedDay');
        selectedDayElement.textContent = `Dostupné miesta dňa: ${day}`;
    }

    displaySelectedYear(year) {
        const selectedYearElement = document.getElementById('selectedYear');
        selectedYearElement.textContent = `Dostupné miesta roku: ${year}`;
    }

    displaySelectedMonth(month) {
        const selectedMonthElement = document.getElementById('selectedMonth');
        selectedMonthElement.textContent = `Dostupné miesta roku: ${month}`;
    }

    displaySelectedDate(day, month, year) {
        const selectedDateElement = document.getElementById('selectedDate');
        selectedDateElement.textContent = `Dostupné miesta datumu:${year}-${month}-${day}`;
    }

    generateCalendar(year, month) {
        const container = document.getElementById('calendar-container');
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDay = new Date(year, month, 1).getDay();

        const table = document.createElement('table');
        container.innerHTML = '';
        container.appendChild(table);

        const headerRow = table.insertRow();
        const daysOfWeek = ['Ne', 'Po', 'Ut', 'St', 'št', 'Pia', 'So'];

        for (let day of daysOfWeek) {
            const th = document.createElement('th');
            th.textContent = day;
            headerRow.appendChild(th);
        }

        let dayCounter = 1;
        for (let i = 0; i < 6; i++) {
            const row = table.insertRow();

            for (let j = 0; j < 7; j++) {
                const cell = row.insertCell();

                if (i === 0 && j < firstDay) {
                    continue;
                }

                if (dayCounter > daysInMonth) {
                    break;
                }

                cell.textContent = dayCounter;

                if (i === 0 && j < firstDay) {
                    cell.style.backgroundColor = 'darksalmon';
                } else {
                    cell.style.backgroundColor = '#DDBDB7';
                    cell.addEventListener('click', () => this.highlightCell(cell));
                }

                dayCounter++;
            }
        }

        document.getElementById('currentMonthYear').textContent = `${this.months[month]} ${year}`;
    }

    nextMonth() {
        this.currentMonth++;
        if (this.currentMonth > 11) {
            this.currentMonth = 0;
            this.currentYear++;
        }
        this.generateCalendar(this.currentYear, this.currentMonth);
    }

    prevMonth() {
        this.currentMonth--;
        if (this.currentMonth < 0) {
            this.currentMonth = 11;
            this.currentYear--;
        }
        this.generateCalendar(this.currentYear, this.currentMonth);
    }

    initializeCalendar() {
        const currentDate = new Date();
        this.currentYear = currentDate.getFullYear();
        this.currentMonth = currentDate.getMonth();
        this.generateCalendar(this.currentYear, this.currentMonth);
    }
}

const reservationCalendar = new ReservationCalendar();
reservationCalendar.initializeCalendar();
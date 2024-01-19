let currentYear, currentMonth;
let lastClickedCell = null;
function highlightCell(cell) {
    cell.style.backgroundColor = 'darksalmon';

    if (lastClickedCell && lastClickedCell !== cell) {
        unhighlightCell(lastClickedCell);
    }

    lastClickedCell = cell;

    const year = currentYear;
    const month = currentMonth + 1;
    const day = cell.textContent;
    const formattedDate = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
    resDateInput.value = formattedDate;

 //   displaySelectedYear(year);
 //   displaySelectedDay(day);
 //   displaySelectedMonth(month);
 //   displaySelectedDate(day, month, year);
}

const resDateInput = document.getElementById('res_date');

resDateInput.addEventListener('input', function () {
    const selectedDate = new Date(this.value);
    const day = selectedDate.getDate();
    const month = selectedDate.getMonth() + 1;
    const year = selectedDate.getFullYear();

    displaySelectedDate(day, month, year);
});

function unhighlightCell(cell) {
    cell.style.backgroundColor = '#DDBDB7';
}


function displaySelectedDay(day) {
    const selectedDayElement = document.getElementById('selectedDay');
    selectedDayElement.textContent = `Dostupné miesta dňa: ${day}`;
}

function displaySelectedYear(year) {
    const selectedYearElement = document.getElementById('selectedYear');
    selectedYearElement.textContent = `Dostupné miesta roku: ${year}`;
}

function displaySelectedMonth(month) {
    const selectedMonthElement = document.getElementById('selectedMonth');
    selectedMonthElement.textContent = `Dostupné miesta roku: ${month}`;
}

function displaySelectedDate(day, month, year) {
    const selectedDateElement = document.getElementById('selectedDate');
    selectedDateElement.textContent = `Dostupné miesta datumu:${year}-${month}-${day}`;
}



function generateCalendar(year, month) {
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
                cell.style.backgroundColor = 'darksalmon'; // Farba pre dni pred prvým dňom mesiaca
            } else {
                cell.style.backgroundColor = '#DDBDB7'; // Farba pre dni v mesiaci
                cell.addEventListener('click', function () {
                    highlightCell(this);
                });
            }

            dayCounter++;
        }
    }

    document.getElementById('currentMonthYear').textContent = `${months[month]} ${year}`;
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    generateCalendar(currentYear, currentMonth);
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    generateCalendar(currentYear, currentMonth);
}

const currentDate = new Date();
currentYear = currentDate.getFullYear();
currentMonth = currentDate.getMonth();
const months = ['Január', 'Február', 'Marec', 'April', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December'];
generateCalendar(currentYear, currentMonth);
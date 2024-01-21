const searchButton = document.getElementById('searchButton');

const searchInput = document.getElementById('searchHolder');
//const searchValue = searchInput.value.trim();

let searchValue;

function searchDatabase() {
   // const searchDate = this.resDateInput.value;
    if (searchValue !== '') {
        const form = document.getElementById('searchForm');
       // const url = form.getAttribute('data-url');

        fetch(`http://localhost/?c=Reservation&a=search`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        })
            .then(response => response.json())
            .then(data => {
                console.log('Výsledky vyhľadávania:', data);
            })
            .catch(error => {
                console.error('Chyba pri vyhľadávaní:', error);
            });
    }
}

searchButton.addEventListener('click', function() {
    searchValue = searchInput.value.trim();
    console.log('Hodnota vyhľadávania:', searchValue);

    // Tu môžete pokračovať v spracovaní hodnoty vyhľadávania
    // napr. odoslanie požiadavky na server alebo iné operácie.
});

document.getElementById('searchButton').onclick = searchDatabase;
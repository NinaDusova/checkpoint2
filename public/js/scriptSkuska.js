//const searchButton = document.getElementById('searchButton');

//const searchInput = document.getElementById('searchHolder');
//const searchInput = document.getElementById('res_date');

let finalValue = null;

let searchValue;

function searchDatabase() {
    const searchInput = document.getElementById('res_date');
    searchValue = searchInput.value.split();
    //console.log('Hodnota vyhľadávania:', searchValue);

    if (searchValue !== '') {
        const form = document.getElementById('searchHolder');

        // Pridajte searchValue do URL ako query parameter
        const url = new URL('http://localhost/');
        url.searchParams.append('c', 'Reservation');
        url.searchParams.append('a', 'search');
        url.searchParams.append('search', searchValue);

        fetch(url.toString(), {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        })
            .then(response => response.json())
            .then(data => {
                //console.log('Výsledky vyhľadávania:', data);
                finalValue = data;
                reservationTable.updateReservationArray(finalValue);
            })
            .catch(error => {
               // console.error('Chyba pri vyhľadávaní:', error);
                return error.text();
            })
    }
}
/*searchButton.addEventListener('click', function() {
    searchValue = searchInput.value.split();
    console.log('Hodnota vyhľadávania:', searchValue);
});*/

//document.getElementById('searchButton').onclick = searchDatabase;
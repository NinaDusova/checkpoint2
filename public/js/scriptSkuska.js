const searchButton = document.getElementById('searchButton');

const searchInput = document.getElementById('searchHolder');

let searchValue;

/*function searchDatabase() {
    if (searchValue !== '') {
        const form = document.getElementById('searchHolder');

        fetch(`http://localhost/?c=Reservation&a=search`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ res_date: searchValue }),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Výsledky vyhľadávania:', data);
            })
            .catch(error => {
                console.error('Chyba pri vyhľadávaní:', error);
                return error.text(); // Add this line to get the response text
            })
            .then(errorMessage => {
                console.error('Error message:', errorMessage);
            });
    }
}*/

function searchDatabase() {
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
                console.log('Výsledky vyhľadávania:', data);
            })
            .catch(error => {
                console.error('Chyba pri vyhľadávaní:', error);
                return error.text();
            })
            .then(errorMessage => {
                console.error('Error message:', errorMessage);
            });
    }
}


searchButton.addEventListener('click', function() {
    searchValue = searchInput.value.split();
    console.log('Hodnota vyhľadávania:', searchValue);
});

document.getElementById('searchButton').onclick = searchDatabase;
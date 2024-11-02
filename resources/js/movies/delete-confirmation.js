const deleteMovies = document.querySelectorAll("form.env-destroyer");

deleteMovies.forEach((singleMovie) =>{
    singleMovie.addEventListener("submit", function (e) {
        e.preventDefault();

        const userChoice = window.confirm(`Confermi la rimozione del Film "${this.getAttribute("custom-data-name")}"?`)

        if ( userChoice === true ) {
            this.submit();
        }
    })
})

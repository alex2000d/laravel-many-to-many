import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// recupero tutti i miei bottoni
const buttons = document.querySelectorAll('delete-project')

// ciclo i miei bottoni
buttons.forEach((button) => {
    // gli dico di restare in attesa dell'evento click
    button.addEventListener('click', function (e) {
        // al click la form non deve inviare niente quindi andiamo ad utilizzare il preventdefoult
        e.preventDefault();
        //  recupero la modale tramite il suo id
        const modal = document.getElementById('DeleteProjectModal');
        // lo passo al costruttore della classe model per creare una nuova istanza
        const bootstrap_modal = new bootstrap.Modal(modal);

        // mostro la modale a video
        bootstrap_modal.show();
        // recupero il pulsante con la classe confirm-delete e gli dico di restare in attesa del click
        document.querySelector('.confirm-delete'), addEventListener('click', function () {
            // se cliccato sottomette la form
            button.parentElement.submit();
        })
    });
});
// creo la logica del delete in un file a parte, diverso da app.js. dovrò lanciare di nuovo run dev e run watch per collegare e far creare in public la cartella 
// prima però devo aggiungere il percorso in webpack

// per prima cosa mi creo una variabile che mi seleziona tutti i tasti delete
// sono form quindi uso un querySelectorAll che mi restituisce un array.
const deleteBtn = document.querySelectorAll('.delete-form');

// ottenuto l'array lo ciclo per assegnare a tutti gli elementi l'evento
deleteBtn.forEach(element => {
    // istanzio variabile che al click mi salva il titolo del comic clickato
    // per passarmi dati tra laravel e js devo usare l'attributo data-name nel form
    const title = element.getAttribute('data-name');
    // aggiungo l'evento ma non al click, al submit
    element.addEventListener('submit', (e)=>{
        // con prevent Default evito che al click del submit btn non ricarichi la pagina
        e.preventDefault();
        // creo allert che mi chiedsa la conferma 
        const accept = confirm(`Are you sure? You want to delete: ${title} `)
        // se l'allert confirm  mi ritrona true allora faccio partire il submit. Cioè l'evento che si attiva quando clicco il btn in un form 
        if(accept) e.target.submit();
    })
});
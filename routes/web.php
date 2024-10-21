<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/home', function () {

    $title = "Questa è la mia homepage!";
    $pre = "Questa è una semplicissima homepage creata con Laravel";
    $home ="Home";
    $features = "caratteristiche";
    $portfolio = "portfolio";
    $others = "progetti";
    $descrizione = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
     Ex laborum ipsum quam id, facilis rerum officia velit numquam a amet officiis necessitatibus mollitia vel odit ad molestiae labore nostrum nihil!";
     $lista =[
        "Svegliarsi: Imposta una sveglia a un'ora regolare.",
        "Fare colazione: Prepara una colazione sana (es. frutta, cereali, tè/caffè).",
        "Attività fisica: Fai esercizi leggeri, come stretching o una breve passeggiata.",
        "Pianificazione della giornata: Rivedi la tua agenda e organizza gli obiettivi giornalieri.",
        "Rispondere alle email: Controlla e rispondi alle email urgenti.",
        "Attività prioritarie: Focalizzati sui compiti importanti o con scadenza ravvicinata.",
        "Pausa pranzo: Concediti una pausa pranzo di almeno 30 minuti.",
        "Aggiornamenti e riunioni: Partecipa a meeting e aggiorna il lavoro.",
        "Progresso sui progetti: Dedica tempo ai progetti più lunghi o complessi.",
        "Formazione continua: Segui un corso online o leggi articoli sul tuo campo di interesse.",
        "Revisioni e controllo: Verifica il lavoro svolto per eventuali correzioni.",
        "Attività sociali: Incontra amici o partecipa a eventi sociali.",
        "Cena: Prepara una cena equilibrata e rilassante.",
        "Relax: Guarda un film, leggi un libro o ascolta musica.",
        "Prepararsi per il giorno successivo: Prepara vestiti e materiali necessari per il giorno successivo.",
        "Bere acqua: Tieni traccia della tua idratazione durante la giornata.",
        "Attività fisica: Se non hai tempo la mattina, allenati nel pomeriggio/sera.",
        "Esprimere gratitudine: Scrivi o pensa a 3 cose per cui sei grato ogni giorno.",
        "Riposare: Fai una routine serale rilassante prima di andare a dormire."
     ];

    return view('home',
    [
        "titolo" => $title,
        "presentazione" => $pre,
        "home" => $home,
        "caratteristiche" =>$features,
        "portfolio" => $portfolio,
        "progetti" => $others,
        "descrizione" => $descrizione,
        "lista" => $lista,

    ]
);
});
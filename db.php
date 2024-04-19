<?php
require_once __DIR__ . './models/Production.php';
require_once __DIR__ . './models/Movie.php';
require_once __DIR__ . './models/TvSerie.php';
require_once __DIR__ . './models/Genre.php';

$production_list = [

  new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Inglese", 9, new Genre("Fantasy", "Un epico viaggio per distruggere un potente anello e salvare la Terra di Mezzo."), "$1 miliardo", 178),
  new Movie("Pulp Fiction", "Inglese", 10, new Genre("Crime", "Una serie di storie interconnesse che coinvolgono gangster, droga e violenza."), "$213 milioni", 154),
  new Movie("La Vita è Bella", "Italiano", 8, new Genre("Drama", "Un padre e suo figlio sopravvivono a un campo di concentramento nazista attraverso l'immaginazione e l'amore."), "$229 milioni", 116),
  new Movie("C'era una volta in America", "Inglese", 9, new Genre("Crime", "La storia di amicizia e tradimento tra gangster ebrei nell'America del XX secolo."), "$139 milioni", 229),
  new Movie("Il Padrino", "Inglese", 10, new Genre("Crime", "La saga di una famiglia mafiosa italo-americana, con intrighi, vendette e potere."), "$245 milioni", 175),
  new Movie("Il Buono, il Brutto, il Cattivo", "Italiano", 9, new Genre("Western", "Tre pistoleri cercano un tesoro nascosto durante la Guerra Civile americana."), "$25 milioni", 178),
  new Movie("Schindler's List", "Inglese", 9, new Genre("Biografico", "La storia vera di Oskar Schindler, che ha salvato ebrei durante l'Olocausto."), "$321 milioni", 195),
  new Movie("Forrest Gump", "Inglese", 8, new Genre("Drama", "La vita straordinaria di Forrest Gump, un uomo con un QI basso ma un grande cuore."), "$678 milioni", 142),
  new Movie("Fight Club", "Inglese", 9, new Genre("Drama", "Un uomo si unisce a un club segreto di combattimenti per sfogare la sua frustrazione esistenziale."), "$100 milioni", 139),
  new Movie("Il Favoloso Mondo di Amélie", "Francese", 10, new Genre("Commedia", "Una giovane donna parigina cerca di migliorare la vita degli altri attraverso piccoli gesti gentili."), "$174 milioni", 122),
  new Movie("Dune", "Inglese", 7, new Genre("Sci-Fi", "Un viaggio epico su un pianeta desertico in cui si svolge una battaglia per il controllo di una preziosa sostanza chiamata spezia."), "$400 milioni", 155),
  new Movie("Giù al Nord", "Francese", 7, new Genre("Commedia", "Un uomo del sud della Francia si trasferisce nel nord e si trova a confrontarsi con le differenze culturali e il clima rigido."), "$78 milioni", 106)

];

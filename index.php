<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

    class Movie {

        public $title;
        public $originalTitle;
        public $year;
        public $plot;
        public $rating;

        function __construct($_rating) {
            $this->rating = round($_rating / 2, 1);
        }

        public function isRecommended($reccomandation) {
            if($rating > 2.5) {
                $this->reccomandation = "Consigliato";
            } elseif($rating = 2.5) {
                $this->reccomandation = "Non proprio consigliato";
            } else ($rating < 2.5) {
                $this->reccomandation = "Non consigliato";
            }
        }
    }

    $movie1 = new Movie(9.3);
    $movie1->title = "Le ali della libertà";
    $movie1->originalTitle = "The Shawshank Redemption";
    $movie1->year = 1994;
    $movie1->plot = "Andy Dufresne viene condannato, benché innocente, a due ergastoli e al carcere duro. In prigione stringe amicizia con Red, sperimenta la brutalità della vita dietro le sbarre, si adatta, e vive 19 anni sognando la libertà.";
    var_dump($movie1);

    $movie2 = new Movie(9.2);
    $movie2->title = "Il Padrino";
    $movie2->originalTitle = "The Godfather";
    $movie2->year = 1972;
    $movie2->plot = "La vita di Vito Corleone, impegnato nel difficile compito di tenere la famiglia unita e l'impero mafioso compatto.";
    var_dump($movie2);

    $movie3 = new Movie(9);
    $movie3->title = "Il cavaliere oscuro";
    $movie3->originalTitle = "The Dark Knight";
    $movie3->year = 2008;
    $movie3->plot = "Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell'anarchia.";
    var_dump($movie3);

    $movie4 = new Movie(8.9);
    $movie4->title = "Pulp Fiction";
    $movie4->originalTitle = "Pulp Fiction";
    $movie4->year = 1994;
    $movie4->plot = "Un killer si innamora della moglie del suo capo, un pugile rinnega la sua promessa e una coppia tenta una rapina che va rapidamente fuori controllo.";
    var_dump($movie4);

    $movie5 = new Movie(1.9);
    $movie5->title = "Disaster Movie";
    $movie5->originalTitle = "Disaster Movie";
    $movie5->year = 2008;
    $movie5->plot = "Il film è la parodia dei classici del genere catastrofico degli ultimi anni, a partire dal The Day after Tomorrow per arrivare fino al più recente Hancock.";
    var_dump($movie5);

    $movie6 = new Movie(3.7);
    $movie6->title = "The Room";
    $movie6->originalTitle = "The Room";
    $movie6->year = 2003;
    $movie6->plot = "La storia ruota attorno al triangolo amoroso tra il protagonista Johnny (Tommy Wiseau), Lisa, sua fidanzata e futura moglie, e Mark, il suo migliore amico.";
    var_dump($movie6);
<?php

    class Movie {

        public $title;

        public $genre;

        public $time;

        public $description = "";

        public function getInfoMovie(){
            
            return 'Film: ' . $this->title . '| Genere: ' . $this->genre . '| Durata: ' . $this->time;

        }

        function __construct($_title, $_genre, $_time){

            $this->title = $_title;
            $this->genre = $_genre;
            $this->time = $_time;

        }

    }


    $avengers = new Movie("Avengers", "Azione", 2.5);
    $spiderManNWH = new Movie("Spider-Man No Way Home", "Azione", 2.5);
    
?>

<div>

    <?php echo $avengers->getInfoMovie(); ?>

    <br>

    <?php echo $spiderManNWH->getInfoMovie(); ?>

</div>


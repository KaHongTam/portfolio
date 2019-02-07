<?php
    class Card {
        private $cardName;
        private $cardImg;
        private $cardDesc;
        private $cardId;

        public function __construct($name, $img, $desc, $id) {
            $this->cardName = $name;
            $this->cardImg = $img;
            $this->cardDesc = $desc;
            $this->cardId = $id;
        }

        public function printCard() {
            echo    '<div class="card">
                    <h2> #' . $this->cardId . ' | ' .  $this->cardName . '</h2>
                    <img src="' . $this->cardImg . '" width="400px" height="300px">
                    <p>' . $this->cardDesc . '</p>
                    </div>';
        }

        function __toString() {
            return 'Number ' . $this->cardId . ' and the name is ' . $this->cardName . 
                    ' with this image: <br><img src="' . $this->cardImg . '"width="400px" height="300px"><br> Description: <br>
                    <p>' . $this->cardDesc . '</p>';
        }
    }
?>
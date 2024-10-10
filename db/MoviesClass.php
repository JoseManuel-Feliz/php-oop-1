<?php
class movie
{
    public string $title;
    public int $date;
    public string $poster;
    public string $plot;
    public int $vote;
    public string $critic;
    public string $genre;

    public function setCritc()
    {
        switch ($this->vote) {
            case 6:
                $this->critic = 'Good';
                break;
            case 7:
                $this->critic = 'Very Good';
                break;
            case 8:
                $this->critic = 'Great';
                break;
            case 9:
                $this->critic = 'Exceptional';
                break;
            case 10:
                $this->critic = 'Favorite';
                break;

            default:
                $this->critic = 'Disappointing';
                break;
        }
    }
    public function getCritic()
    {
        return $this->critic;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    function __construct($title, $date, $poster, $plot, $vote, $genre)
    {
        $this->title = $title;
        $this->date = $date;
        $this->poster = $poster;
        $this->plot = $plot;
        $this->vote = $vote;
        $this->genre = $genre;
    }
};



//INSTANCE ATTRIBUTES
$movie1 = new movie(
    "The matrix",
    1999,
    "https://upload.wikimedia.org/wikipedia/en/c/c1/The_Matrix_Poster.jpg",
    "When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.",
    9,
    "Action",

);


//INSTANCE ATTRIBUTES
$movie2 = new movie(
    "Scary Movie",
    2000,
    "https://upload.wikimedia.org/wikipedia/en/2/29/Movie_poster_for_%22Scary_Movie%22.jpg",
    "A year after disposing of the body of a man they accidentally killed, a group of dumb teenagers are stalked by a bumbling serial killer.",
    6,
    "Comedy",
);


//INSTANCE ATTRIBUTES
$movie3 = new movie(
    "I Am Legend",
    2007,
    "https://upload.wikimedia.org/wikipedia/en/d/df/I_am_legend_teaser.jpg",
    "Years after a plague kills most of humanity and transforms the rest into monsters, the sole survivor in New York City struggles valiantly to find a cure.",
    7,
    "Survival",
);


//INSTANCE ATTRIBUTES
$movie4 = new movie(
    "Jumanji",
    1995,
    "https://upload.wikimedia.org/wikipedia/en/b/b6/Jumanji_poster.jpg",
    "When two kids find and play a magical board game, they release a man trapped in it for decades - and a host of dangers that can only be stopped by finishing the game.",
    7,
    "Adventure",
);


//INSTANCE ATTRIBUTES
$movie5 = new movie(
    "Raiders of the Lost Ark",
    1981,
    "https://upload.wikimedia.org/wikipedia/en/a/a6/Raiders_of_the_Lost_Ark_Theatrical_Poster.jpg",
    "In 1936, archaeologists and adventurers of the U.S. government hired Indiana Jones to find the Ark of the Covenant before the Nazis could obtain its extraordinary powers.",
    8,
    "Adventure",
);


// SET INSTANCE METHOD
$movie1->setCritc();

// SET INSTANCE METHOD
$movie2->setCritc();

// SET INSTANCE METHOD
$movie3->setCritc();

// SET INSTANCE METHOD
$movie4->setCritc();

// SET INSTANCE METHOD
$movie5->setCritc();

var_dump($movie1);

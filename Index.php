<?php

namespace Alpha\Poo;

use Alpha\Poo\Card;
use Alpha\Poo\ListCard;

include 'vendor/autoload.php';


class Index
{

    public function createCard()
    {
        $card = new Card();
        $listCard = new ListCard();

        // Input pour les nombres de l'utilisateur.
        $nbr = (int)readline('Saisissez le nombre de carte svp !: ');

        // Vérifier si le nombre est enetier.
        if ($nbr <= 0) {
            echo "Invalid number of cards. Please enter a positive integer." . PHP_EOL;
            $nbr = (int)readline('Entrez un nombre valide de 1 à ....100: ');

            $sumOfCard = $nbr > 1 ? "cards" : "card"; // Determine plural or singular
            echo "You are about to create $nbr $sumOfCard." . PHP_EOL;
            echo "Press enter to continue...";
            readline(); // Mettre en attente pour qu' afin  l'utilisateur tape sur entrer.
        }

        // Je fais une boucle sur le nombre de carte pour repéter le process.
        for ($i = 1; $i <= $nbr; $i++) {
            echo "______________________________________________________" . "\n" . "\n";
            echo "___Input user_________________________________________" . "\n" . "\n";
            $question = readline("Please enter the question for card $i: ");
            $answer = readline("Please enter the answer for card  {$i}: ");
            // Je vérifie si la valeur n'est pas vide et je les ajoute.
            if (!empty($question && $answer)) {
                $card = new Card(); // J'instancie ma card pour avoir les mutateurs ou accesseur.
                $card->setQuestion($question); // pour modifier la valeur
                $card->setAnswer($answer); // Pour modifier la valeur de la réponse.
                $listCard->printCardsInfo($question, $answer); // je passe mes variables qui en paramètre qui sont les valeurs de l'input.
            } else {
                echo "Stp saisie la question et la réponse pour la carte  $i." . PHP_EOL;
            }
        }
    }
}

// J'instancie ma class Index pour créer des carte et affiicher.
$newIndex = new Index();
// J'appel ma function create Card.ufm
$newIndex->createCard();

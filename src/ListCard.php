<?php

namespace Alpha\Poo;

class ListCard
{
    // Je crée une attribute ou propriété  list card qui est un tableau vide;
    private array $listCars = [];


    // Je crée ma function printCardInfo qui prend deux paramètres;
    public function printCardsInfo(string $question, string $answer)
    {
        // Je vérifie si les sont 
        if ($question && $answer) {
            // Je crée un tableau associatif qui contient les informations  de la card.
            $card = ["question" => $question, "answer" => $answer];
            // Je push le tableau associatif dans le tableau listCars.
            // array_push($this->listCars, $card);
            $this->listCars[] = $card;
            // Je  compte le nombre d'élement dans le tableau 
            $lengthCard = count($this->listCars);
            // Ici je vérifie si le nombre d'element est supérieur à  zéro.
            if ($lengthCard > 0) {

                foreach ($this->listCars as $key => $infoCard) {
                    $index = $key + 0;
                    // Je transform les index en lettre alphabetique.
                    $alphabet = range('A', 'Z'); // Afficher le tableau 
                    for ($i = 0; $i < count($alphabet); $i++) {
                        if ($index === $i) {
                            $smallLetter = strtolower($alphabet[$i]);

                            echo "\n";
                            echo "\n";
                            $UpperCase = strtoupper($alphabet[$i]);
                            echo "__________Infos card:  $UpperCase _________" . "\n" . "\n";
                            echo "Question  $smallLetter : "  . $infoCard['question'] . "\n";
                            echo " Answer   $smallLetter : " . $infoCard['answer'] . "\n\n";
                        }
                    }

                    // Pour afficher les cartes selon l'ordre alphabetique 


                    // return $this->listCars;
                }
            }
        }
    }
}

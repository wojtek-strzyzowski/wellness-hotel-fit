<?php

/*
    Hauptliste aller Fragen mit Auswertungsintervallen und
    Gesundheits-Punkten.

    Damit lässt sich ein Maximum von 33 Punkten erreichen.
*/
$questions = array(
    array(
        // Schlüssel, Identifikator der Frage
        "id" => "question-0",
        // Fragetyp
        "type"          => "range",
        // Intervall für gesunde Antwort
        "healthy-range" => array(7, 10),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-1",
        "type"          => "radio",
        "healthy-value" => "Ja", // Gesunde Antwort
        "healthy-range" => array(1, 1), // Optional
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-2",
        "type"          => "range",
        "healthy-range" => array(7, 10),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-3",
        "type"          => "checkbox",
        "healthy-range" => array(1, 5),
        "healthy-points"=> 6
    ),
    array(
        "id" => "question-4",
        "type"          => "range",
        "healthy-range" => array(7, 10),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-5",
        "type"          => "number",
        "healthy-range" => array(2, 3),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-6",
        "type"          => "number",
        "healthy-range" => array(2, 3),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-7",
        "type"          => "number",
        "healthy-range" => array(1, 3),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-8",
        "type"          => "number",
        "healthy-range" => array(1, 3),
        "healthy-points"=> 3
    ),
    array(
        "id" => "question-9",
        "type"          => "number",
        "healthy-range" => array(0, 1),
        "healthy-points"=> 3
    )
);

// $questions noch als globale Konstante "QUESTIONS".
define("QUESTIONS", $questions);

?>

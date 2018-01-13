<?php
require 'db.php';

function get_films() {
    $conn = get_db();
    $sql = "SELECT * FROM film";
    $films = $conn->query($sql);
    close_db($conn);
    return $films;
}

function get_film_by_id($id) {
    //XXX SELECT d'un film
}

function set_film($id, $values) {
    //XXX UPDATE d'un film
}

function add_film($values) {
    //XXX INSERT d'un film
}

function delete_film_by_id($id) {
    //XXX DELETE d'un film
}

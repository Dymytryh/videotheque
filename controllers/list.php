<?php
require_once 'models/films.php';
$films = get_films();
require 'views/list.php';

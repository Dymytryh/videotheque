<?php
// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/videotheque/index.php' === $uri) {
    require 'controllers/list.php';
} elseif ('/videotheque/index.php/edit' === $uri && isset($_GET['id'])) {
    require 'controllers/edit.php';
} elseif ('/videotheque/index.php/edit' === $uri && isset($_POST['submit'])) {
    require 'controllers/edit.php';
} elseif ('/videotheque/index.php/add' === $uri) {
    require 'controllers/add.php';
} elseif ('/videotheque/index.php/show' === $uri && isset($_GET['id'])) {
    require 'controllers/show.php';
} elseif ('/videotheque/index.php/preview' === $uri) {
    require 'controllers/preview.php';
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'mvc',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'Mon Projet',
        'projectBaseUrl' => 'http://localhost/MVC-final'
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '\\..\\';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR.'public\upload\\';
const COVER = CONFIG['app']['projectBaseUrl'].'/public/upload/';

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  => ['AppController', 'index'],
    '/'                  => ['AppController', 'index'],
    '/book/add'          => [ 'BookController', 'addBook'],
    '/genre/add'          => [ 'BookController', 'addGenre'],
    '/book/delete'          => [ 'BookController', 'deleteBook'],
    '/genre/delete'          => [ 'BookController', 'deleteGenre'],
    '/book/list'          => [ 'BookController', 'listBook'],
    '/genre/list'          => [ 'BookController', 'listGenre'],



];

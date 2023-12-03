<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Accueil::index');

$routes->get('contact', 'Contact::index');
$routes->post('contact', 'Contact::send');

$routes->get('formations', 'Formations::index');

$routes->get('experiences', 'Experiences::index');

$routes->get('projets', 'Projets::index');

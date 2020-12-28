<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="http://localhost:8765/anmelden">Anmelden</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="http://localhost:8765/restaurantliste">Restaurant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8765/Startseite">Home</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container">
  <h2>Restaurant Casa Bian</h2>
  <p>Adresse: Wiesenweg 13, 14776 Brandenburg an der Havel</p>
	<p>Telefonnummer: 03381 7941166</p>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Suppen
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
                
  <table class="table table-hover">
  
    <tbody>
      <tr>
        <td>Tomatensuppe</td>
        <td>5,8 Euro</td>
      </tr>
      <tr>
        <td>Knoblauchsuppe</td>
        <td>5,8 Euro</td>
      </tr>
      <tr>
        <td>Fischsuppe</td>
        <td>11,3 Euro</td>
      </tr>
    </tbody>
  </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Pizza
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <table class="table table-hover">
  
    <tbody>
      <tr>
        <td>Pizza Margherita</td>
        <td>9,5 Euro</td>
      </tr>
      <tr>
        <td>Pizza Salami</td>
        <td>12,5 Euro</td>
      </tr>
      <tr>
        <td>Pizza Spinaci</td>
        <td>10,5 Euro</td>
      </tr>
    </tbody>
  </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
           Pasta / Nudelgerichte
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
              <table class="table table-hover">
  
    <tbody>
      <tr>
        <td>Spaghetti Aglio Olio e Peperoncino</td>
        <td>9,5 Euro</td>
      </tr>
      <tr>
        <td>Spaghetti alla Carbonara</td>
        <td>9,5 Euro</td>
      </tr>
      <tr>
        <td>Spaghetti Bolognese</td>
        <td>10,5 Euro</td>
      </tr>
    </tbody>
  </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
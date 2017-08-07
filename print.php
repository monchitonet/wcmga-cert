<?php
/*
* Print file
*/
include ('header.php');
$name = $_POST['name']; ?>
<body>
  <style>
  @page {
    size: 8.5in 11in;
    margin: .5in;
    font-family: 'Montserrat', sans-serif;
  }
  </style>
<img src="assets/img/certificado-bkg.png" id="bgimg">
<h1 class="title">Certificado de Participaci&oacute;n</h1>
<p class="text">Por este medio certificamos que:</p>
<h1 class="name"><?php print $name ?></h1>
<p class="text">particip&oacute; activamente en el WordCamp Managua 2017, celebrado del 26 al 27 de mayo 2017 en la Universidad Centroamericana (UCA), de la ciudad de Managua, Nicaragua.</p>
<p class="text fecha">Dado en la ciudad de Managua, a los 17 d&iacute;as del mes de mayo del 2017</p>

<div class="firma-wrap">
  <div class="firma left">
    <ul>
      <li><img src="assets/img/firma-sal.png" id="firmaimg"></li>
      <li><hr/></li>
      <li>Salvador Aguilar</li>
      <li>Co-organizador</li>
    </ul>
  </div>
  <div class="firma right">
    <ul>
      <li><img src="assets/img/firma-daniel.png" id="firmaimg"></li>
      <li><hr/></li>
      <li>Daniel Gordon</li>
      <li>Co-organizador</li>
    </ul>
  </div>
</div>

</body>
</html>

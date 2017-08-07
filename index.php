<?php
/*  Copyright 2017  Monchito.net  (email : hola@monchito.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include ('header.php');
?>
<body id="bkindex">
<div id="flex">
  <div id="wrap">
      <h1>Reclama tu certificado de participación!</h1>
      <form method="post" action="certificado.php">
        <fieldset>
            <legend>Introduce tu nombre tal y como quieres que aparezca en el certificado.</legend>
            <div class="col">
                <p>
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" value="" autofocus />
                </p>
            </div>
            <button type="submit">Enviar</button>
        </fieldset>
      </form>
  </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/static/css/crearpersonaje.css" rel="stylesheet" type="text/css" />
    <title>Crear Personaje</title>
  </head>
  <body>
      <div>
          <header>
              CREAR PERSONAJE
          </header>
          <form action="index.html" method="post">
              Habilidad
              <select name="habilidad">
                  <option value="Seleccionar" selected="selected">Seleccionar</option>
                  <option value="Amasador">Amasador</option>
                  <option value="Horneador">Horneador</option>
                  <option value="Salsero">Salsero</option>
                  <option value="Vendedor">Vendedor</option>
              </select>
              <br> <br>
              <table>
                <tr>
                  <th>Personaje</th>
                  <th>Amasado</th>
                  <th>Preparac. salsa</th>
                  <th>Horneado</th>
                  <th>Venta (50 min.)</th>
                </tr>
                <tr>
                  <th>Amasador</th>
                  <td><b>1 seg</b></td>
                  <td>3 seg</td>
                  <td>4 seg</td>
                  <td>$30</td>
                </tr>
                <tr>
                  <th>Horneador</th>
                  <td>4 seg</td>
                  <td>4 seg</td>
                  <td><b>1 seg</b></td>
                  <td>$50</td>
                </tr>
                <tr>
                  <th>Salsero</th>
                  <td>3 seg</td>
                  <td><b>1 seg</b></td>
                  <td>3 seg</td>
                  <td>$40</td>
                </tr>
                <tr>
                  <th>Vendedor</th>
                  <td>5 seg</td>
                  <td>5 seg</td>
                  <td>5 seg</td>
                  <td><b>$100</b></td>
                </tr>
              </table>
              <br>
              <button type="submit" name="button">
                  Elegir
              </button>
          </form>
      </div>
  </body>
</html>
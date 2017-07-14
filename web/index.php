<?php
/**
 * Created by PhpStorm.
 * User: renorram
 * Date: 05/07/17
 * Time: 17:54
 */
include_once '../vendor/autoload.php';

$retriever = new \BCB\Retriever(['debug' => TRUE]);
$data = $retriever->getClassData('rates_administered_free')->getData();
?>
    <form action="./index.php" method="get">
        <label for="series">Series:</label>
        <select name="series" title="Series">
          <?php foreach ($data as $serie): ?>
              <option value="<?php print $serie['oid'] ?>"
                      <?php if (isset($_GET['series']) && $_GET['series'] == $serie['oid']): ?>selected<?php endif ?>><?php print $serie['nomeAbreviado'] ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Buscar">
    </form>
<?php
if (isset($_GET['series'])) :
  $xmlInfo = $retriever->searchLastSerieValue((int) $_GET['series']);
  $info = simplexml_load_string($xmlInfo);
  $serie = $info->SERIE;
  ?>
  <table>
      <thead><tr><th>NOME</th><th>CODIGO</th><th>PERIODICIDADE</th><th>UNIDADE</th><th>DATA</th><th>VALOR</th></tr></thead>
      <tbody>
      <tr>
          <td><?php print utf8_decode($serie->NOME) ?></td>
          <td><?php print $serie->CODIGO ?></td>
          <td><?php print $serie->PERIODICIDADE ?></td>
          <td><?php print $serie->UNIDADE ?></td>
          <td><?php print implode('/', (array) $serie->DATA) ?></td>
          <td><?php print $serie->VALOR ?></td>
      </tr>
      </tbody>
  </table>
<?php endif ?>
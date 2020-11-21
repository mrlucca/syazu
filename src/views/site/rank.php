<?php

    $u->conectar($ini["table"],	$ini["host"], $ini["user"], $ini["password"]);
    $dadosDeUsuarios = $u->pegarDadosDeUsuarios();  
    usort($dadosDeUsuarios, function ($a,$b) {
        return $a['pontuacao']<$b['pontuacao'];
    });

?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Posição</th>
      <th scope="col">Nome</th>
      <th scope="col">Nickname</th>
      <th scope="col">Pontos</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($dadosDeUsuarios as $key => $value): ?>
    <tr>
      <th scope="row"><?=  $key +1 ?></th>
      <td><?= mb_convert_case($value['nome'], MB_CASE_TITLE, "UTF-8") ?></td>
      <td><?= $value['nickname'] ?></td>
      <td><?= $value['pontuacao'] ?? 0 ?></td>
    </tr>
    <?php endforeach ?>


  </tbody>
</table>
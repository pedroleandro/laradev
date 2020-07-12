<h1>Listagem de Produtos</h1>

<p><a href="<?= url('/imoveis/novo') ?>">Cadastrar Novo Imóvel</a></p>

<?php

if (!empty($properties)) {

    echo "<table>";
    echo "<tr>
            <td>Título</td>
            <td>Valor de Aluguel</td>
            <td>Valor de Compra</td>
          </tr>";

    foreach ($properties as $property) {
        echo "<tr>
                <td>{$property->title}</td>
                <td>R$ " . number_format($property->rental_price, 2, ",", ".") . "</td>
                <td>R$ " . number_format($property->sale_price, 2, ",", ".") . "</td>
              </tr>";
//        var_dump($property);
    }

    echo "</table>";
}

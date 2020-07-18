@extends('property.master')

@section('content')

<h1>Página Single</h1>

<?php
if(!empty($properties)){
    foreach ($properties as $property){
        ?>
        <h2>Título do Imóvel: <?= $property->title?></h2>

        <p>Descrição: <?= $property->description?></p>
        <p>Valor de Locação: R$ <?= number_format($property->rental_price, 2, ",", ".")?></p>
        <p>Valor de Venda: R$ <?= number_format($property->sale_price, 2, ",", ".")?></p>
        <?php
    }
}
?>
@endsection



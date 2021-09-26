<form action="{{ route('imoveis.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Titulo do imóvel</label>
    <input type="text" name="title">

    <label for="">Preço de Locação</label>
    <input type="text" name="rental_price">

    <label for="">Imagem de destaque</label>
    <input type="file" name="cover">

    <button type="submit">Salvar imóvel</button>
</form>

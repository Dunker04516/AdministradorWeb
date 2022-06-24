<form action="{{ route('admin.guardar') }}" method="POST">
    @csrf
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    <label for="titulo">Url</label>
    <input type="text" name="url" id="url">
    <label for="imagen"></label>
    <input type="file" name="imagen" id="imagen">
    <input type="submit" value="Guardar informacion">
</form>

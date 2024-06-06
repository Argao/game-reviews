
@extends('site.layouts.basico')

@section('titulo', $titulo)
@section('nome', $nome)
@section('data', $data)

@section('conteudo')

    <main id="corpo">
        @include('site.layouts._partials.topo')
        <h1>Escolha seu jogo</h1>
        <form action="index.php" method="get" id="busca" autocomplete="on">
            Ordenar:
            <a href="#">Nome |</a>
            <a href="#">Produtora |</a>
            <a href="#">Nota Alta |</a>
            <a href="#">Nota Baixa | </a>
            <a href="#">Mostrar Todos |</a>
            <label for="c">Buscar:</label>
            <input type="text" name="c" id="c" seize="10" maxlength="40" value="" autocomplete="on">
            <input type="submit" value="Ok">
        </form>
        <table class="listagem">
            <tr>
                <td>Infelizmente não foi possível realizar a busca"</td>
            </tr>
        </table>
    </main>
    @include('site.layouts._partials.rodape')
@endsection

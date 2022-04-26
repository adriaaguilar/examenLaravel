<!DOCTYPE html>
<html lang = 'ca'>
    <head>
        <meta charset = 'utf-8'/>
        <title>Casals a Catalunya</title>
    </head>
    <body>
        @include('includes.header')
        <h3>Gestió de casals</h3>
        <a href = "formulari">Afegir</a>
        <table>
            <tr>
                <th>Nom</th>
                <th>Data de inici</th>
                <th>Data final</th>
                <th>Num Places</th>
                <th>Ciutat</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @php

                for ($i = 0; $i < count($_SESSION['casals']); $i++){
                    $id[$i] = $_SESSION['casals'][$i]->id;
                    $nom[$i] = $_SESSION['casals'][$i]->nom;
                    
                    for ($n = 0; $n < count($_SESSION['ciutats']); $n++){
                        if ($_SESSION['casals'][$i]->id_ciutat == $_SESSION['ciutats'][$n]->id){
                            $ciutat[$i] = $_SESSION['ciutats'][$n]->nom;
                        }
                    }
                }

            @endphp
            @for ($i = 0; $i < count($_SESSION['casals']); $i++)
                <tr>
                    <th>{{$nom[$i]}}</th>
                    <th>{{$_SESSION['casals'][$i]->data_inici}}</th>
                    <th>{{$_SESSION['casals'][$i]->data_final}}</th>
                    <th>{{$_SESSION['casals'][$i]->n_places}}</th>
                    <th>{{$ciutat[$i]}}</th>
                    <th><a href = "">Editar</a></th>
                    <th><a href = "">Eliminar</a></th>
            @endfor
        </table>
        @include('includes.footer')
    </body>
</html>
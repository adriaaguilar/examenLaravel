<!DOCTYPE html>
<html lang = 'ca'>
    <head>
        <meta charset = 'utf-8'/>
        <title>Formulari de registre</title>
    </head>
    <body>
        @include('includes.header')
        <h3>Ingresar un nou casal</h3>
        <form action="{{route('comprobarRegistre')}}" method='POST'>
        @csrf
            <table>
                <tr>
                    <th>Nom: </th>
                    <th><input type = 'text' name = 'nom' value= "{{old('nom')}}"/>{!! $errors ->first('nom', '<small>:message</small>')!!}</th>
                </tr>
                <tr>
                    <th>Data de Inici: </th>
                    <th><input type = 'date' name = 'data_inici' value= "{{old('data_inici')}}"/>{!! $errors ->first('data_inici', '<small>:message</small>')!!}</th>
                </tr>
                <tr>
                    <th>Data final: </th>
                    <th><input type = 'date' name = 'data_final' value= "{{old('data_final')}}"/>{!! $errors ->first('data_final', '<small>:message</small>')!!}</th>
                </tr>
                <tr>
                    <th>n_places: </th>
                    <th><input type = 'number' name = 'n_places' value= "{{old('n_places')}}"/>{!! $errors ->first('n_places', '<small>:message</small>')!!}</th>
                </tr>
                <tr>
                    <th>Ciutat: </th>
                    @php

                        for ($i = 0; $i < count($_SESSION['ciutats']); $i++) {
                            $id[$i] = $_SESSION['ciutats'][$i]->id;
                            $nombre[$i] = $_SESSION['ciutats'][$i]->nom;
                        }

                    @endphp
                    <th><select name = 'ciutat' value= "{{old('ciutat')}}">
                        @for ($i = 0; $i < count($_SESSION['ciutats']); $i++)
                            <option value = "{{$id[$i]}}">{{$nombre[$i]}}</option>
                        @endfor
                        </select>
                    </th>
                </tr>
            </table>
            <input type = 'submit' value = 'Registrar'/>
        </form>
        <a href = "taula">Tornar a la taula</a>
        @include('includes.footer')
    </body>
</html>
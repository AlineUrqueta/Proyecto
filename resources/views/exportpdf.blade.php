<!DOCTYPE html>
<html>
<head>
    <title>Propuestas</title>
</head>
<body>
    <h1>Listado de Propuestas</h1>
    <table>
        <thead>
            <tr>
                <th>Rut</th>
                <th>Fecha</th>
                <th>Documento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $propuesta)
                <tr>
                    <td>{{ $propuesta->estudiante_rut }}</td>
                    <td>{{ $propuesta->fecha }}</td>
                    <td>{{ $propuesta->documento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta </title>
<style>
th {
    font-weight: 800;
}
</style>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                {{-- <img src="{{ asset('laraveldaily.png') }}" alt="laravel daily" width="200" /> --}}
            </td>
            <td class="w-half">
                <h2>Consulta ID: {{ $consulta->id }}</h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <th>Motivo consulta:</th>
                <td>{{ $consulta->motivoConsulta->nombre }}</td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>{{ $consulta->estado }}</td>
            </tr>
            <tr>
                <td>Alumno:</td>
                <td>{{ $consulta->alumno?->name }}</td>
            </tr>
            <tr>
                <td>Título:</td>
                <td>{{ $consulta->titulo }}</td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td>{{ $consulta->mensaje }}</td>
            </tr>

        </table>
    </div>

    <

    <div class="footer margin-top">
        <div>Sistema atención de consultas</div>
    </div>
</body>
</html>
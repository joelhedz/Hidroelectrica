<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>HidroElectrica</title>
</head>

<body>
    <header>
        <x-header />
    </header>
    <div class="w-full flex">
        <x-navbar />
        <main class="w-5/6 px-16 border-r-orange-100">
            <h2 class="text-[1.8rem] m-4 text-center font-[600]">Empleados</h2>
            <br>
            <a class="bg-sky-600 text-white p-4 rounded-lg" href="/empleados/create">Registrar Empleado</a>
            <br>
            <br>
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Cargo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->Nombre }}</td>
                            <td>{{ $empleado->Apellido }}</td>
                            <td>{{ $empleado->Edad }}</td>
                            <td>{{$empleado->Telefono}}</td>
                            <td>{{ $empleado->Correo }}</td>
                            <td>{{ $empleado->id_cargo }}</td>
                            <td>Editar</td>
                            <th>
                                <form action="" method="POST">
                                    <button type="submit">Eliminar</button>
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>

</html>
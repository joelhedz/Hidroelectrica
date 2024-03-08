<body>
    @vite ('resources/css/app.css')
    <header>
        <x-header />
    </header>
    <div class="w-full flex">
        <x-navbar />
        <main class="w-5/6 px-16 border-r-orange-100">
            <h2 class="text-[1.8rem] m-4 text-center font-[600]">Cargos</h2>
            <br>
            <a class="bg-sky-600 text-white p-4 rounded-lg" href="/cargos/create">Registrar nuevo cargo</a>
            <br>
            <br>
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Crago</th>
                            <th>Descripcion</th>
                            <th>Salario</th>
                            <th>Departamento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cargos as $item)
                        <tr>
                            <td>{{ $item->Nombre }}</td>
                            <td>{{ $item->Descripcion }}</td>
                            <td>{{ $item->Salario }}</td>
                            <td>{{$item->Departamento}}</td>
                            <td><a href="#">Editar</a></td>
                            <th>
                                <form action="" method="POST">
                                    @csrf
                                    @method("Delete")
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
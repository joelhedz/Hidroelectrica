@vite ('resources/css/app.css')
<Header>
    <x-header />
</Header>

<body>
    <div class="flex">
        <x-navbar />

        <main class="w-5/6 px-16 border-r-orange-100">
            @php
            $action = isset($editar) ? true:false;
            $title = isset($editar) ? 'Editar Registro':'Ingresar Empleado';
            @endphp
            <h2 class="text-[1.8rem] m-4 text-center font-[600]">{{$title}}</h2>
            <br>
            <form action="/empledos" method="POST" class="mx-10">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    @if ($action)
                    @method('PUT')
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="id">Id</label>
                        <input type="text" name="txtid" id="id" value="" readonly />
                    </div>
                    @endif
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="nombre">Nombre</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtnombre" id="nombre" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="apellido">Apellido</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtapellido" id="apellido" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="edad">Edad</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtedad" id="edad" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="telefono">Telefono</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" maxlength="8" name="txttelefono" id="telefono" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="email">Correo</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="email" name="txtemail" id="email" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="cargo">Cargo</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtcargo" id="cargo" value="" />
                    </div>
                </div>

                <div class="justify-around mt-14 flex w-ful">
                    <button type="submit" class="bg-gray-100 p-4 w-60 transition-colors rounded-lg text-center font-[500] block hover:bg-teal-700 hover:text-white">Confirmar</button>
                    <a href="/empleados" class="bg-gray-100 p-4 w-60 transition-colors rounded-lg text-center font-[500] block hover:bg-red-400 ">Cancelar</a>
                </div>
            </form>
        </main>
    </div>


</body>
<body>
    @vite ('resources/css/app.css')
    <Header>
        <x-header />
    </Header>
    <div class="flex">
        <x-navbar />

        <main class="w-5/6 px-16 border-r-orange-100">
            @php
            $action = isset($editar) ? true:false;
            $title = isset($editar) ? 'Editar Cargo':'Ingresar nuevo Cargo';
            @endphp
            <h2 class="text-[1.8rem] m-4 text-center font-[600]">{{$title}}</h2>
            <br>
            <form action="/cargos" method="POST" class="mx-10">
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
                        <label class="block text-sm font-medium text-gray-700" for="nombre">Nombre del cargo</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtnombre" id="nombre" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="descripcion">Descripcion</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtdescripcion" id="descripcion" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="salario">Salario</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" name="txtsalario" id="salario" value="" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="departamento">Departamento</label>
                        <input class="border rounded-md p-1 w-10/12 mt-1" type="text" maxlength="8" name="txtdepartamento" id="departamento" value="" />
                    </div>

                </div>

                <div class="justify-around mt-14 flex w-ful">
                    <button type="submit" class="bg-gray-100 p-4 w-60 transition-colors rounded-lg text-center font-[500] block hover:bg-teal-700 hover:text-white">Confirmar</button>
                    <a href="/cargos" class="bg-gray-100 p-4 w-60 transition-colors rounded-lg text-center font-[500] block hover:bg-red-400 ">Cancelar</a>
                </div>
            </form>
        </main>
    </div>


</body>
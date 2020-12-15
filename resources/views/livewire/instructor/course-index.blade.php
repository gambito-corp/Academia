<div class="container py-8">
    <x-table-responsive>
        <div class="px-6 py-4">
            <input class="form-input w-full shadow-sm" placeholder="Ingrese el Nombre del Curso" wire:model="search" wire:keydown="limpiarPage">
        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Matriculados
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Calificacion
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Status
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse($course as $curso)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{Storage::url($curso->Imagen->url)}}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$curso->title}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$curso->Categoria->name}}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$curso->Estudiante->count()}}</div>
                        <div class="text-sm text-gray-500">Alumnos Matriculados</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900 flex items-center">
                            {{$curso->rating}}
                            <ul class="flex text-sm  ml-2">
                                <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 1?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 2?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 3?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 4?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 5?'yellow':'gray'}}-400"></i></li>
                            </ul>
                        </div>
                        <div class="text-sm text-gray-500">
                            Valoracion del Curso
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @switch($curso->status)
                            @case(App\Models\Course::BORRADOR)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Borrador
                            </span>
                            @break
                            @case(App\Models\Course::REVISION)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Revision
                            </span>
                            @break
                            @case(App\Models\Course::PUBLICADO)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Publicado
                            </span>
                            @break
                            @default
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                indefinido
                            </span>
                        @endswitch
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
            @empty
                <tr  class="px-6 py-4 whitespace-nowrap text-center">
                    No Hay Ningun Registro Coincidente
                </tr>
            @endforelse
            <!-- More rows... -->
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{$course->links()}}
        </div>
    </x-table-responsive>
</div>

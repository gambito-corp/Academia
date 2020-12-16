<div class="mt-8">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            @if($current->iframe != null)
            <div class="embed-responsive">
                {!! $current->iframe !!}
            </div>
            {{$current->name}}
            @isset($current->Descripcion)
            <div class="text-gray-600">
                {{$current->Descripcion->name}}
            </div>
            @endisset
            @elseif($current->iframe == null)
            @isset($current->Descripcion)
            <div class="text-gray-600">
                {{$current->Descripcion->name}}
            </div>
            @endisset
            <h1>Hola Mundo</h1>
            @else
            @endif
            
            <div class="flex items-center mt-4 cursor-pointer" wire:click="complete()">
                @if($current->complete)
                    <i class="fas fa-toggle-on text-2xl text-blue-600"></i>
                @else
                    <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                @endif
                <p class="text-sm ml-2">marcar esta unidad como culminada</p>
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    @if($this->previous)
                        <a wire:click="changeLesson({{$this->previous}})" class='cursor-pointer'>Tema Anterior</a>
                    @endif
                    @if($this->next)
                        <a wire:click="changeLesson({{$this->next}})" class='cursor-pointer ml-auto'>Siguiente Tema</a>
                    @endif
                </div>
            </div>
        </div>
        <div>
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>
                    <div class="flex item-center">
                        <figure>
                            <img class="w-12 h-12 object-cover rounded-full mr-4" src="{{$course->Profesor->profile_photo_url}}" alt="{{$course->Profesor->name}}">
                        </figure>
                        <div class="ml-4">
                            <p>{{$course->Profesor->name}}</p>
                            <p><a class="text-blue-500 text-sm" href="">{{'@'.Str::slug($course->Profesor->name, '')}}</a></p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mt-2">{{$this->advance}}% Completado del Curso/Diplomado</p>
                    <div class="w-full">
                        <div class="shadow w-full bg-gray-200 mt-2 rounded-lg">
                            <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white rounded-lg transition-all duration-500" style="width: {{$this->advance}}%">{{$this->advance}}%</div>
                        </div>
                    </div>
                    <ul>
                        @foreach($course->Secciones as $seccion)
                            <li class="text-gray-600 mb-4">
                                <a href="" class="font-bold text-base inline-block mb-2">{{$seccion->name}}</a>
                                <ul>
                                    @foreach($seccion->Lecciones as $leccion)
                                        <li class="flex">
                                            <div class="">
                                                @if($leccion->complete)
                                                    @if($current->id == $leccion->id)
                                                        <span class="inline-block w-4 h-4 border-2 border-yellow-300 rounded-full mr-2 mt-1"></span>
                                                    @else
                                                        <span class="inline-block w-4 h-4 bg-yellow-300 rounded-full mr-2 mt-1"></span>
                                                    @endif
                                                @else
                                                    @if($current->id == $leccion->id)
                                                        <span class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                                    @else
                                                        <span class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                                    @endif
                                                @endif
                                            </div>
                                            <a wire:click="changeLesson({{$leccion}})" class="cursor-pointer">{{$leccion->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

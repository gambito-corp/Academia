<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img src="{{Storage::url($course->Imagen->url)}}" alt="" class="h-60 w-full object-cover">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{$course->title}}</h1>
                <h2 class="text-xl mb-3">{{$course->subtitle}}</h2>
                <p class="mb-2"> <i class="fas fa-chart-line"></i> Nivel: {{$course->Nivel->name}}</p>
                <p class="mb-2"> <i class="fas fa-code"></i> Categoria: {{$course->Categoria->name}}</p>
                <p class="mb-2"> <i class="fas fa-users"></i> Matriculados: {{$course->estudiante_count}}</p>
                <p> <i class="far fa-star"></i> Calificacion: {{$course->rating}}</p>
            </div>
        </div>
    </section>
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-10">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">Lo Que Aprendereras</h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @forelse($course->Metas as $meta)
                            <li class="text-gray-700 text-base"><i class="fas fa-check mr-2 text-gray-600"></i> {{$meta->name}}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h1 class="font-bold text-3xl my-2">Temario</h1>
                @forelse($course->Secciones as $seccion)
                    <article class="mb-4 shadow"
                             @if($loop->first)
                             x-data="{open:true}"
                             @else
                             x-data="{open:false}"
                             @endif>
                        <header class="border border-gray-200 py-2 px-4 cursor-pointer bg-gray-200"  x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{$seccion->name}}</h1>
                        </header>
                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @forelse($seccion->Lecciones as $leccion)
                                    <li class="text-gray-700 text-base "><i class="fas fa-play-circle mr-2 text-gray-600"></i> {{$leccion->name}}</li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </article>
                @empty
                @endforelse
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Requisitos</h1>
                <ul class="list-disc list-inside grid grid-cols-1 gap-x-6 gap-y-2">
                    @forelse($course->Requerimientos as $requisito)
                        <li class="text-gray-700 text-base"> {{$requisito->name}}</li>
                    @empty
                    @endforelse
                </ul>
            </section>

            <section>
                <h1 class="font-bold text-3xl">Descripcion del Curso</h1>
                <div class="text-gray-700 text-base">
                    {!! $course->description !!}
                </div>
            </section>
        </div>
{{--ASIDE--}}
        <div class="order-1 lg:order-2">
            <section class="card">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full border shadow-lg" src="{{$course->Profesor->profile_photo_url}}" alt="{{$course->Profesor->name}}">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-lg">Prof. {{$course->Profesor->name}}</h1>
                            <a href="" class="text-blue-400 text-sm font-bold">{{'@'.Str::slug($course->Profesor->name, '')}}</a>
                        </div>
                    </div>
                    @can('enrolled', $course)
                        <a href="{{route('courses.status', $course)}}" class="btn btn-success btn-block mt-4">Continuar el Curso</a>
                    @else
                        <form action="{{route('courses.enrolled', $course)}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger btn-block mt-4" value="Matricularme"/>
                        </form>
                    @endcan
                </div>
            </section>
            <aside class="hidden lg:block">
                @forelse($similares as $similar)
                    <article class="flex my-6">
                        <img class="h-32 w-40 object-cover" src="{{Storage::url($similar->Imagen->url)}}" alt="">
                        <div class="ml-3">
                            <h1>
                                <a class="font-bold text-gray-500 mb-3" href="{{route('courses.show', $similar)}}">{{Str::limit($similar->title, 40)}}</a>
                            </h1>
                            <div class="flex  mb-2">
                                <img class="h-8 w-8 object-cover rounded-full border shadow-lg" src="{{$similar->Profesor->profile_photo_url}}" alt="{{$similar->Profesor->name}}">
                                <div class="ml-4">
                                    <h1 class="font-bold text-gray-500 text-sm">Prof. {{$similar->Profesor->name}}</h1>
                                    <a href="" class="text-blue-400 text-xs font-bold">{{'@'.Str::slug($similar->Profesor->name, '')}}</a>
                                </div>
                            </div>
                            <p class="text-gray-700 text-sm"><i class="fa fa-star mr-2 text-yellow-400"></i>{{$similar->rating}}</p>
                        </div>
                    </article>
                @empty
                @endforelse
            </aside>
        </div>
    </div>
</x-app-layout>

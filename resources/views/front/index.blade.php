<x-app-layout>

    <section style="background-image: url({{asset('img/home/portada.jpg')}})" class="bg-cover">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina tu area profesional con estudios multisectoriales</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque distinctio dolor
                    doloribus ducimus explicabo minus necessitatibus nesciunt optio perspiciatis provident,
                    quaerat quisquam reprehenderit repudiandae saepe totam voluptas voluptate! Illo?
                </p>
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                           type="search" name="search" placeholder="Search">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-center text-gray-600 text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/curso.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab ad aperiam assumenda atque consectetur culpa deleniti
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/curso.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab ad aperiam assumenda atque consectetur culpa deleniti
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/curso.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab ad aperiam assumenda atque consectetur culpa deleniti
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/curso.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab ad aperiam assumenda atque consectetur culpa deleniti
                </p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700">
        <h1 class="text-white text-center text-3xl py-12">¿No sabes Qué Curso Llevar?</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate error in iste </p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de Cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">
            ULTIMOS CURSOS
        </h1>
        <p class="text-center text-gray-500 text-sm-6">Ttrabajando duro para lo que sea</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @forelse($courses as $course)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img src="{{Storage::url($course->Imagen->url)}}" alt="" class="h-36 w-full object-cover">
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->Profesor->name}}</p>
                        <div class="flex">
                            <ul class="flex text-sm">
                                <li class="mr-1"><i class="fa fa-star text-{{$course->rating >= 1?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$course->rating >= 2?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$course->rating >= 3?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$course->rating >= 4?'yellow':'gray'}}-400"></i></li>
                                <li class="mr-1"><i class="fa fa-star text-{{$course->rating >= 5?'yellow':'gray'}}-400"></i></li>
                            </ul>

                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                ({{$course->estudiante_count}})
                            </p>
                        </div>
                        <a href="{{route('courses.show', $course)}}" class="block text-center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Mas Informacion
                        </a>
                    </div>
                </article>
            @empty
            @endforelse
        </div>
    </section>
</x-app-layout>

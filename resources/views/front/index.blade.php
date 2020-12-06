<x-app-layout>
    <x-header />
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
        <p class="text-center text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate error in iste </p>
        <div class="flex justify-center my-4">
            <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de Cursos
            </a>
        </div>
        <br>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">
            ULTIMOS CURSOS
        </h1>
        <p class="text-center text-gray-500 text-sm-6 mb-5">Ttrabajando duro para lo que sea</p>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @forelse($courses as $course)
                <x-cursos :curso="$course" />
            @empty
            @endforelse
        </div>
    </section>
</x-app-layout>

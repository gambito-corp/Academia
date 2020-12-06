<div>
    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/curso.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">{{$title}}</h1>
        </header>
        {{$slot}}
    </article>
</div>

<div>
    <article class="card">
        <img src="{{Storage::url($curso->Imagen->url)}}" alt="" class="h-36 w-full object-cover">
        <div class="card-body">
            <h1 class="card-title">{{Str::limit($curso->title, 40)}}</h1>
            <p class="text-gray-500 text-sm mb-2">Prof: {{$curso->Profesor->name}}</p>
            <div class="flex">
                <ul class="flex text-sm">
                    <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 1?'yellow':'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 2?'yellow':'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 3?'yellow':'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 4?'yellow':'gray'}}-400"></i></li>
                    <li class="mr-1"><i class="fa fa-star text-{{$curso->rating >= 5?'yellow':'gray'}}-400"></i></li>
                </ul>

                <p class="text-sm text-gray-500 ml-auto">
                    <i class="fas fa-users"></i>
                    ({{$curso->estudiante_count}})
                </p>
            </div>
            <a href="{{route('courses.show', $curso)}}" class="mt-4 btn btn-primary btn-block">
                Mas Informacion
            </a>
        </div>
    </article>
</div>

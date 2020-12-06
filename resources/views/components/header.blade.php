<div>
    {{--    TODO: modularizar el sistema de portada en componente para hacerlo reutilizable--}}
    <header style="background-image: url({{asset('img/home/portada.jpg')}})" class="bg-cover py-32">
        <div class="container">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina tu area profesional con estudios multisectoriales</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque distinctio dolor
                    doloribus ducimus explicabo minus necessitatibus nesciunt optio perspiciatis provident,
                    quaerat quisquam reprehenderit repudiandae saepe totam voluptas voluptate! Illo?
                </p>
                <livewire:search></livewire:search>
            </div>
        </div>
    </header>
</div>

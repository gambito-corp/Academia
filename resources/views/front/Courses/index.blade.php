<x-app-layout>

    <section style="background-image: url({{asset('img/home/portada.jpg')}})" class="bg-cover">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina tu area profesional con estudios multisectoriales</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque distinctio dolor
                    doloribus ducimus explicabo minus necessitatibus nesciunt optio perspiciatis provident,
                    quaerat quisquam reprehenderit repudiandae saepe totam voluptas voluptate! Illo?
                </p>
                <livewire:search></livewire:search>
            </div>
        </div>
    </section>
    <livewire:courses-index/>
</x-app-layout>

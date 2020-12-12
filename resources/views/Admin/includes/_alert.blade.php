@if (session()->has('mensaje'))
    <div>
        <div class="{{session('mensaje')? session('clase'): ''}}">
            <strong>¡{{session('clave')}}! </strong>{{ session('mensaje') }}
        </div>
    </div>
@endif

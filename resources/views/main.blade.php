<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._head')
</head>
<body>
    <section class="section">
        <div class="container is-fluid">
            <div class="columns is-multiline">
                <div class="column is-one-fifth noPrint">
                    <div class="has-text-centered m-b-30">
                        <a href="{{ route('dashboard') }}"><img src="{{ asset('/') }}cars.png" width="80%" /></a>
                    </div>
                    @include('partials._menu')
                </div>
                <div class="column is-four_fifths">
                    @include('partials._header')
                    @include('partials._messages')
                    @yield('content')
                </div>
                <div class="column is-12 noPrint">
                    @include('partials._footer')
                </div>
            </div>
        </div>
    </section>
    @include('partials._javascript')
    @yield('scripts')
</body>
</html>

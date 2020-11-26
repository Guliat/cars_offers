<aside class="menu">
    <p class="menu-label is-size-4">
        КЛИЕНТИ
    </p>
    <ul class="menu-list">
        <li>
            <ul>
                <li><a href="{{ route('customers.index') }}" class="{{Nav::isResource('customers')}}">КЛИЕНТИ</a></li>
                <li><a href="{{ route('companies.index') }}" class="{{Nav::isResource('companies')}}">ФИРМИ</a></li>
            </ul>
        </li>
    </ul>
    <p class="menu-label is-size-4">
        МАГАЗИНИ
    </p>
    <ul class="menu-list">
        <li>
            <ul>
                <li><a href="#" class=" ">СЕРВИЗ - БАЛИК</a></li>
                <li><a href="#" class=" ">АТЕЛИЕ - ВИСТА М</a></li>
                <li><a href="#" class=" ">НАСТРОЙКИ</a></li>
            </ul>
        </li>
    </ul>
    <p class="menu-label is-size-4">
        ДОКУМЕНТИ
    </p>
    <ul class="menu-list">
        <p class="menu-label is-size-5">
            ОФЕРТИ
        </p>
        <li>
            <ul>
                <li>
                    <a href="{{ route('offers.index') }}" class="{{ Nav::isRoute('offers.index') }} {{ Nav::isRoute('offers.create') }} {{ Nav::isRoute('offers.edit') }} {{ Nav::isRoute('offers.show') }}">ВСИЧКИ</a>
                </li>
                <li>
                    <a href="{{ route('offers_items.index') }}"
                    class="{{ Nav::isRoute('offers_items.index') }} {{ Nav::isRoute('offers_items.create') }} {{ Nav::isRoute('offers_items.edit') }} {{ Nav::isRoute('offers.items.sort.category') }}"
                    >ПРОДУКТИ</a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="menu-list">
        <p class="menu-label is-size-5">
            ФАКТУРИ
        </p>
        <li>
            <ul>
                <li>
                    <a href="#">ВСИЧКИ </a>
                </li>
                <li>
                    <a href="#">ПЛАТЕНИ</a>
                </li>
                <li>
                    <a href="#">НЕПЛАТЕНИ</a>
                </li>
            </ul>
        </li>
    </ul>
    {{-- <p class="menu-label is-size-4">
        АВТОСЕРВИЗ
    </p>
    <ul class="menu-list">
        <li>
            <ul>
                <li><a href="{{ route('automobiles_services.index') }}" class="{{Nav::isResource('autoservices')}}">УСЛУГИ</a></li>
                <li><a href="{{ route('automobiles.index') }}" class="{{Nav::isRoute('automobiles.index')}}">АВТОМОБИЛИ</a></li>
                <li><a href="{{ route('automobiles_brands.show', 1) }}" class="{{ Nav::isResource('automobiles_brands') }}{{ Nav::isResource('automobiles_models') }}">МАРКИ И МОДЕЛИ</a></li>
                <li><a href="{{ route('automobiles.settings') }}" class="{{Nav::isRoute('automobiles.settings')}}">НАСТРОЙКИ</a></li>
            </ul>
        </li>
    </ul> --}}
</aside>

<hr />
<nav class="level">
    <div class="level-left"></div>
    <div class="level-right">

        <div class="level-item has-text-centered">
            <div>
                <p class="is-size-6"> ЗА ВРЪЗКА С НАС </p>
                <p class="is-size-7"> {{ config('app.phone') }} </p>
                <p class="is-size-7"> {{ config('app.mail') }} </p>
            </div>
        </div>

        <div class="is-divider-vertical is-hidden-mobile"></div>
        <div class="is-divider is-hidden-desktop"></div>

        <div class="level-item has-text-centered">
            <div>
                <p>{{ config('app.name') }} @ {{date('Y')}}</p>
            </div>
        </div>

    </div>
</nav>

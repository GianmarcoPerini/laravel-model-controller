<header>

    <div class="header-box">
        <p><a class=" {{ request()->routeIs('land') ? 'active' : '' }} " href=" {{ route('land') }} ">Home</a></p>
        <p><a class=" {{ request()->routeIs('films') ? 'active' : '' }} " href=" {{ route('films') }} ">Films</a></p>
    </div>

</header>
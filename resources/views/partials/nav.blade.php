<nav class="navbar navbar-expand-lg navbar-light bg-light p-0 mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item @if($current === 'home') active @endif">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item @if($current === 'ranking') active @endif">
                <a class="nav-link" href="{{route('ranking')}}">Classifica <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if($current === 'calendar') active @endif">
                <a class="nav-link" href="{{route('calendar')}}">Calendario</a>
            </li>
            <li class="nav-item @if($current === 'statistics') active @endif">
                <a class="nav-link" href="{{route('statistics')}}">Statistiche</a>
            </li>
            <li class="nav-item @if($current === 'fixtures') active @endif">
                <a class="nav-link" href="{{route('fixtures')}}">Ultima giornata</a>
            </li>
            <li class="nav-item @if($current === 'next_match') active @endif">
                <a class="nav-link" href="{{route('next_match')}}">Prossima giornata</a>
            </li>
        </ul>
    </div>
</nav>
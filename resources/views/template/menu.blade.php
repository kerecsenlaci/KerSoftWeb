<li class="nav-item">
    <a class="nav-link" href="{{url('/news')}}">Hírek</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/gyik')}}">Gyakori kérdések</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/error_report')}}">Hiba bejelentés</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/system_expansion')}}">Rendszerbővítés</a>
</li>
@guest
<li class="nav-item">
    <a class="nav-link" href="{{url('/offer_request')}}">Ajánlatkérés / Új ügyfél</a>
</li>
@endguest
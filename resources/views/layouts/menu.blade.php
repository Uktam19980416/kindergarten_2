<li class="{{ Request::is('abouts*') ? 'active' : '' }}">
    <a href="{{ route('abouts.index') }}"><i class="fa fa-edit"></i><span>Yangiliklar</span></a>
</li>

<li class="{{ Request::is('teams*') ? 'active' : '' }}">
    <a href="{{ route('teams.index') }}"><i class="fa fa-edit"></i><span>Jamoamiz</span></a>
</li>

<li class="{{ Request::is('galleries*') ? 'active' : '' }}">
    <a href="{{ route('galleries.index') }}"><i class="fa fa-edit"></i><span>Galeriya</span></a>
</li>
{{-- 
<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{{ route('services.index') }}"><i class="fa fa-edit"></i><span>Services</span></a>
</li> --}}

<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
    <a href="{{ route('contacts.index') }}"><i class="fa fa-edit"></i><span>Kontakt</span></a>
</li>


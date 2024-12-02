
<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
        <p>Dashboard</p>
    </a>
</li>


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('projects.index') }}"--}}
{{--       class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">--}}
{{--        <p>Projects</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">--}}
{{--        <span class="menu-title">Home</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
{{--    </a>--}}
{{--    <div class="collapse" id="general-pages">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--            <li class="nav-item"> <a class="nav-link {{ Request::is('projects*') ? 'active' : '' }}" href="{{ route('projects.index') }}"> Projects </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>--}}
{{--            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</li>--}}

{{--<li class="nav-item">--}}
{{--    <a href="{{ route('sponsors.index') }}"--}}
{{--       class="nav-link {{ Request::is('sponsors*') ? 'active' : '' }}">--}}
{{--        <p>Sponsors</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('pages.index') }}"--}}
{{--       class="nav-link {{ Request::is('pages*') ? 'active' : '' }}">--}}
{{--        <p>Pages</p>--}}
{{--    </a>--}}
{{--</li>--}}



{{--<li class="nav-item">--}}
{{--    <a href="{{ route('news.index') }}"--}}
{{--       class="nav-link {{ Request::is('news*') ? 'active' : '' }}">--}}
{{--        <p>News</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('sliders.index') }}"--}}
{{--       class="nav-link {{ Request::is('sliders*') ? 'active' : '' }}">--}}
{{--        <p>Sliders</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('members.index') }}"--}}
{{--       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">--}}
{{--        <p>Board Members</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('goals.index') }}"--}}
{{--       class="nav-link {{ Request::is('goals*') ? 'active' : '' }}">--}}
{{--        <p>Goals</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('goalNumbers.index') }}"--}}
{{--       class="nav-link {{ Request::is('goalNumbers*') ? 'active' : '' }}">--}}
{{--        <p>Goal Numbers</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('quotes.index') }}"--}}
{{--       class="nav-link {{ Request::is('quotes*') ? 'active' : '' }}">--}}
{{--        <p>Quotes</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('galleries.index') }}"--}}
{{--       class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">--}}
{{--        <p>Video Galleries</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('volunteers.index') }}"--}}
{{--       class="nav-link {{ Request::is('volunteers*') ? 'active' : '' }}">--}}
{{--        <p>Volunteers</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('contacts.index') }}"--}}
{{--       class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">--}}
{{--        <p>Contacts</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('subscribers.index') }}"--}}
{{--       class="nav-link {{ Request::is('subscribers*') ? 'active' : '' }}">--}}
{{--        <p>Subscribers</p>--}}
{{--    </a>--}}
{{--</li>--}}





{{--<li class="nav-item">--}}
{{--    <a href="{{ route('projectDonations.index') }}"--}}
{{--       class="nav-link {{ Request::is('projectDonations*') ? 'active' : '' }}">--}}
{{--        <p>Donations</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('payments.index') }}"--}}
{{--       class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">--}}
{{--        <p>Payments</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('services.index') }}"--}}
{{--       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">--}}
{{--        <p>Services</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('users.index') }}"--}}
{{--       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">--}}
{{--        <p>Admins</p>--}}
{{--    </a>--}}
{{--</li>--}}


{{--<li class="nav-item">--}}
{{--    <a href="{{ route('settings.index') }}"--}}
{{--       class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">--}}
{{--        <p>Settings</p>--}}
{{--    </a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--    <a href="{{ route('photoGalleries.index') }}"--}}
{{--       class="nav-link {{ Request::is('photoGalleries*') ? 'active' : '' }}">--}}
{{--        <p>Photo Galleries</p>--}}
{{--    </a>--}}
{{--</li>--}}





{{--<li class="nav-item">--}}
{{--    <a href="{{ route('photos.index') }}"--}}
{{--       class="nav-link {{ Request::is('photos*') ? 'active' : '' }}">--}}
{{--        <p>Photos</p>--}}
{{--    </a>--}}
{{--</li>--}}



<li class="nav-item">
    <a href="{{ route('services.index') }}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Services</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('pages.index') }}" class="nav-link {{ Request::is('pages*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Pages</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('settings.index') }}" class="nav-link {{ Request::is('settings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('members.index') }}" class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Members</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photo-settings.index') }}" class="nav-link {{ Request::is('photoSettings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Photo Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('photo-settings.index') }}" class="nav-link {{ Request::is('photoSettings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Photo Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('galleries.index') }}" class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Galleries</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contacts.index') }}" class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Contacts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Projects</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('project-photos.index') }}" class="nav-link {{ Request::is('projectPhotos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Project Photos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('clients.index') }}" class="nav-link {{ Request::is('clients*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Clients</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('joins.index') }}" class="nav-link {{ Request::is('joins*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Joins</p>
    </a>
</li>

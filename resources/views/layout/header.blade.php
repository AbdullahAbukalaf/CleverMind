@if(app()->getLocale() == 'ar')
<nav class="navbar navbar-expand-lg navbar-light bg-light" dir="rtl">
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
@endif
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home.index') }}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">@lang('Header.home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about.index') }}">@lang('Header.about')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about.index') }}">@lang('Header.services')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >@lang('Header.contact')</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              @lang('Header.lang')
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="lang/en">En</a></li>
              <li><a class="dropdown-item" href="lang/ar">Ar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

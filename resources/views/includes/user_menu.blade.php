<div class="user-container d-flex">
  <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="profile" alt="profile" src="{{ asset('img/profile/profile-9.jpg') }}" />
    <div class="name">{{ Auth::user()->name }}</div>
  </a>
  <div class="dropdown-menu dropdown-menu-end user-menu wide">
    <div class="row mb-3 ms-0 me-0">
      <div class="col-12 ps-1 mb-2">
        <div class="text-extra-small text-primary">COMPTE</div>
      </div>
      <div class="col-6 ps-1 pe-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">Informations utilisateur</a>
          </li>
          <li>
            <a href="#">Préférences</a>
          </li>
          <li>
            <a href="#">Calendrier</a>
          </li>
        </ul>
      </div>
      <div class="col-6 pe-1 ps-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">Sécurité</a>
          </li>
          <li>
            <a href="#">Billing</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row mb-1 ms-0 me-0">
      <div class="col-12 p-1 mb-2 pt-2">
        <div class="text-extra-small text-primary">APPLICATION</div>
      </div>
      <div class="col-6 ps-1 pe-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">Themes</a>
          </li>
          <li>
            <a href="#">Language</a>
          </li>
        </ul>
      </div>
      <div class="col-6 pe-1 ps-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">Devices</a>
          </li>
          <li>
            <a href="#">Storage</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row mb-1 ms-0 me-0">
      <div class="col-12 p-1 mb-3 pt-3">
        <div class="separator-light"></div>
      </div>
      <div class="col-6 ps-1 pe-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">
              <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
              <span class="align-middle">Help</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i data-cs-icon="document-full" class="me-2" data-cs-size="17"></i>
              <span class="align-middle">Docs</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-6 pe-1 ps-1">
        <ul class="list-unstyled">
          <li>
            <a href="#">
              <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
              <span class="align-middle">{{ __('Réglages') }}</span>
            </a>
          </li>
          <li>
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
              <span class="align-middle">{{ __('Se déconnecter') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>            
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
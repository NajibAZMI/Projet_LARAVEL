@once <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('homepage')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('login_show')}}">Se connecter</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('login_logout')}}">Déconnexion</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('profilename')}}">Tout les Profils</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('profilecreate')}}">Ajouter Profil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/profile/profiles/{id}">Profil</a>
                        </li>
                      </ul>
                    </div>
                  </nav>

 
@endonce

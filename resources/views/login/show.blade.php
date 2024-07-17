<x-master title="Login show">
  <div class="container w-75 my-2 bg-light p-5">
                     @error('email')
                        <x-alert type="danger">{{$message}}</x-alert>
                    @enderror
    <form method="POST"   action="{{route('login_login')}}">
                    @csrf
                    <h3>Authentification</h3>
                    <div class="mb-3">
                           <label for="email" class="form-label">Email address</label>
                           <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
                    </div>
                    <div class="d-grid ">
                          <button class="btn btn-primary">Se Connecter</button> 
                    </div>
    </form>
</div>
</x-master>
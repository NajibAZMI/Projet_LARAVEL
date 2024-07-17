<x-master title="Modifier profil"> <h3>Modifier Profil </h3>
    @if($errors->any())
   <x-alert type="danger">
       <ul>
          @foreach ($errors->all() as $error)
             <li>{{$error}}</li>   
          @endforeach
       </ul>
   </x-alert>
   @endif
    <form  method="post" action="{{ route('updateProfile',$profile->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" name="Nom"  class="form-control" placeholder="Nom" value= "{{$profile->Nom}}" />
        @error('Nom')
           <div class="text-danger">{{$message}}</div> 
        @enderror
        </div>
         
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="Email" value="{{$profile->email}}" />
            @error('email')
            <div class="text-danger">{{$message}}</div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" name="password"  class="form-control" placeholder="Mot de Passe"  />
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Confirmer Le  Mot de Passe</label>
            <input type="password" name="password_confirmation"  class="form-control" placeholder="Mot de Passe"  />
        </div>
        
        
        <div class="mb-3">
            <label for="Biographie" class="form-label">Biographie</label>
            <textarea name="Biographie"  class="form-control" placeholder="Biographie" >{{$profile->Biographie}}</textarea>
        </div>
           
        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-block">Modifier</button>
        </div>
    </form>
    </x-master>
    
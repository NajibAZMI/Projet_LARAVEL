<x-master title="Ajouter profil">
    @if($errors->any())
   <x-alert type="danger">
       <ul>
          @foreach ($errors->all() as $error)
             <li>{{$error}}</li>   
          @endforeach
       </ul>
   </x-alert>
   @endif
    <form  method="post" action="{{ route('profilestore') }}">
        @csrf
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" name="Nom"  class="form-control" placeholder="Nom" value="{{old('Nom')}}" />
        @error('Nom')
           <div class="text-danger">{{$message}}</div> 
        @enderror
        </div>
       
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email"  class="form-control" placeholder="Email" value="{{old('email')}}" />
            @error('email')
            <div class="text-danger">{{$message}}</div> 
            @enderror
        </div>
       
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" name="password"  class="form-control" placeholder="Mot de Passe" value="{{old('Password')}}" />
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Mot de Passe</label>
            <input type="password" name="password_confirmation"  class="form-control" placeholder="Mot de Passe"  value="{{old('Password_confirmation')}}"/>
        </div>

        <div class="mb-3">
            <label for="Biographie" class="form-label">Biographie</label>
            <textarea name="Biographie"  class="form-control" placeholder="Biographie" value="{{'Biographie'}}"></textarea>
        </div>
           
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        </div>
    </form>
    </x-master>
    
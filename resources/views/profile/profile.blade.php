<x-master title="Home Page">

Profiles  <div class="row">         
    @foreach($profiles as $profile)   
         <x-profil-card :profile="$profile" />
    @endforeach
    {{$profiles->links()}}
</div>  
  
</x-master>
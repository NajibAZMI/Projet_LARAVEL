@props(['nom'])
<div>
    <table class="table table-striped">
        <tr><th>Id</th><th>Nom</th><th>Prenom</th></tr>
        @foreach ($nom as $user)
         <tr><td>{{$user['id']}}</td><td>{{$user['Nom']}}</td><td>{{$user['Prenom']}}</td></tr>
     @endforeach 
  </table>
</div>
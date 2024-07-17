@props(['profile'])
<div class="col-sm-4">
        <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/50/50" alt="Title">
                    <div class="card-body">

                                        <h4 class="card-title">{{$profile->Nom}}</h4>
                                        <p class="card-text">{{Str::limit($profile->Biographie,50)}}</p>
                                        <a href="{{route('showprofil',$profile->id)}}" class="stretched-link"></a>
                                     
                    </div>
                    <hr>
                    <div class="cart-foot" style="z-index: 2">
                                <form action="{{route('supprimerProfile',$profile->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger float-end">Supprimer</button>
                                </form>

                                <form action="{{route('editProfile',$profile->id)}}" method="get">
                                        
                                        @csrf
                                        <button class="btn btn-success ">Modifier</button>
                                </form>
                    </div>
        </div>
</div> 
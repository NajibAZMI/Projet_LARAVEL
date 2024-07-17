<x-master title="Home Page">

                   <div class="col-sm-4"><div class="card">
                                        <img class="card-img-top" src="https://picsum.photos/50/50" alt="Title">
                                        <div class="card-body">
                    
                                                            <h4 class="card-title">{{$profile->Nom}}</h4>
                                                            <p class="card-text">{{Str::limit($profile->Biographie,50)}}</p>
                                                           <a href="{{route('showprofil',$profile->id)}}" class="stretched-link"></a>
                                        </div>
                                        
                    </div>


</x-master>
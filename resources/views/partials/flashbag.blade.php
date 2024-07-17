 @if (session()->has('success'))
                     <x-alert type="success"> 
                                        <i class="bi bi-check-square">{{session('success')}}</i>
                     </x-alert>
                   
 @endif
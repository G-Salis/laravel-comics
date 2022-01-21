<header>

    <div class="container">
     <div>
       <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
     </div>
     <div>
       <ul>
         @foreach (config('nav') as $link)
         <li><a>{{$link['text']}}</a></li>
         @endforeach
       </ul>
     </div>
    </div>
     
</header>
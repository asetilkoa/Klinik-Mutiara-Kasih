<div class="card bg-transparent border-0 text-center">
    <div class="card-img">
        @if ($mediss->image != '')
        <img loading="lazy" decoding="async" src="{{asset('storage/'.$mediss->image)}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
        @endif
        <ul class="card-social list-inline">
            @if ($mediss->fb_url != '')
            <li class="list-inline-item"><a class="facebook" href="{{$mediss->fb_url}}"><i class="fab fa-facebook"></i></a>
            </li>
            @endif
            @if ($mediss->tw_url != '')
            <li class="list-inline-item"><a class="twitter" href="{{$mediss->tw_url}}"><i class="fab fa-twitter"></i></a>
            </li>
            @endif
            @if ($mediss->in_url != '')
            <li class="list-inline-item"><a class="instagram" href="{{$mediss->in_url}}"><i class="fab fa-instagram"></i></a>
            </li>
            @endif
        </ul>
    </div>
    <div class="card-body">
        <h3>{{$mediss->name}}</h3>
        <p>{{$mediss->designation}}</p>
    </div>
</div>
<main>
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{$karir->title}}</h2>
                        <span>{{\Carbon\Carbon::parse($karir->created_at)->format('d M, Y')}} <span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!" class="ml-1">{{$karir->category_name}} </a>
                        </p>
                        <p class="list-inline-item">Penulis : <a href="#!" class="ml-1">{{$karir->author}} </a>
                        </p>
                    </div>
                    @if ($karir->image != "")
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img loading="lazy" decoding="async" src="{{asset('storage').'/'.$karir->image}}" alt="Post Thumbnail">
                        </div>
                    </div>
                    @endif
                    <div class="content">
                        {!! $karir->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
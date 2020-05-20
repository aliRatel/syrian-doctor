<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 ">

    <div class="card medical-card">

        <img src="{{ url('storage/'.$article->image) }}" class="medical-card-image ">
        @can('admin')
        <span class="row medical-control-set d-flex justify-content-center ">
            <button class=" medical-control-set-btn medical-btn-edit" onclick="window.location='{{route('edit-article',['id'=>$article->id])}}'"></button>
            <button class=" medical-control-set-btn  medical-btn-delete" onclick="var x = confirm('asfdasdf');
            if(x==true){ window.location='{{URL::to('/articles/destroy/'.$article->id)}}'  }" ></button>

        </span>
        @endcan
        <div class="container mx-2 my-1 text-center" style="height: 160px">

                <h3 style="
                font-size: em(13);
                font-weight: 400;
                color: #222222;
                word-wrap: break-word;
                max-height: 7em;
                line-height: 1.8em;
                text-overflow: ellipsis;
                height: 40px;
                overflow: hidden;"> {{$article->topic}}</h3>


                <h6> {{$article->created_at}}</h6>

                <p style="                 margin: 1.25em 0;
                font-size: em(13);
                font-weight: 400;
                color: #222222;
                word-wrap: break-word;
                max-height: 5.5em;
                line-height: 1.8em;
                text-overflow: ellipsis;
                overflow: hidden; ">
                    {{$article->description}}</p>

        </div>
        <button class="button medical-card-btn btn-primary " onclick="window.location='{{url('articles/'.$article->id)}}'">explore</button>


    </div>
</div>

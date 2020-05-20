<div class="recipe-card">

	<aside>

    <img src="{{ url('storage/'.$deit->image) }}" />
    @can('admin')
        <span class="row deit-control-set d-flex justify-content-center ">
            <button class=" medical-control-set-btn medical-btn-edit" onclick="window.location='{{route('edit-deit',['id'=>$deit->id])}}'"></button>
            <button class=" medical-control-set-btn  medical-btn-delete" onclick="var x = confirm('are you sure you want to delete this deit ? ');
            if(x==true){ window.location='{{URL::to('/deits/destroy/'.$deit->id)}}'  }" ></button>

        </span>
        @endcan
    <a href="{{url('deits/'.$deit->id)}}" class="button"><span class="icon icon-play"></span></a>

	</aside>

	<article>

		<h2>{{$deit->name}}</h2>


		<p>{{$deit->content}}</p>


	</article>

</div>


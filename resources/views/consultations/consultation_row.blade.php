<li class="container-fluid card py-4 my-4">
<h2>from someone</h1>
    <h6>{{$consultation->created_at}}
<hr class="light">
<h3>{{$consultation->subject}}</h3>
<p>{{$consultation->description}}</p>
<span>
    @if (is_null($consultation->answer) )
<button class="btn btn-outline-secondary  " style="width: 29% " onclick="window.location='{{route('answer-consultation',['id'=>$consultation->id])}}'"> replay</button>
@else <button disabled=true class="btn .btn-success"class='light' style="width: 29%  ;background-color: greenyellow ;" > already answered</button>
@endif
<button class="btn btn-danger" style="width: 29%"  onclick="var x = confirm('are you sure you want to delete this consultation ? ');
if(x==true){ window.location='{{URL::to('/consultations/destroy/'.$consultation->id)}}'  }"> delete</button>

</span>
</li>


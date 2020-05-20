<li class="container-fluid card py-4 my-4">
<h2>{{$consultation->user->name}}</h1>
    <h6>{{$consultation->created_at}}
<hr class="light">
<h3>{{$consultation->subject}}</h3>
<p>{{$consultation->description}}</p>
@can('admin')
<span>
    @if (is_null($consultation->answer) )
<button class="btn btn-outline-secondary  " style="width: 29% " onclick="window.location='{{route('answer-consultation',['id'=>$consultation->id])}}'"> replay</button>
@else <button disabled=true class="btn .btn-success"class='light' style="width: 29%  ;background-color: greenyellow ;" > already answered</button>
@endif
<button class="btn btn-danger" style="width: 29%"  onclick="var x = confirm('are you sure you want to delete this consultation ? ');
if(x==true){ window.location='{{URL::to('/consultations/destroy/'.$consultation->id)}}'  }"> delete</button>

</span>
@endcan
@if (is_null($consultation->answer) )
@else
@can('user')
<span>
    <button class="btn btn-primary" data-toggle="collapse" data-target="#answer">view answer</button>
    <div id="answer" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center">
            <p class="my-4">{{$consultation->answer}}</p>
            </div>
        </div>
    </div>
</span>
@endcan
@endif
</li>


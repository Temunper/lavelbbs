<div class="list-group-item">
  <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="me-3" width="32">

  <a href="{{route('users.show',$user)}}"></a>
  {{$user->name}}
</div>
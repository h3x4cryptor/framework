<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['username' => $user->username]) }}">
	<img class="media-object" alt="{{ $user->getNameOrUsername() }}" src="/Async/public/images/uploads/avatars/{{ $user->avatar }}" style="width:40px; height:40px; float:left; border-radius:50%; margin-right:25px;">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $user->username]) }}">@<!---->{{ $user->getNameOrUsername() }}</a> <span style="font-size:12px; color: gray;">| {{ $user->getName() }}</span></h4>
		@if ($user->location)
			<p>{{ $user->location }}</p>
		@endif
		
	</div>
</div>
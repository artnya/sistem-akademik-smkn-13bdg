<h3><b>I never thought it's was happened to your account!</b></h3>
Error:404 Account has been banned at {{ Auth::user()->updated_at }}!
<a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}

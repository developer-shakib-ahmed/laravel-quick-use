<!-- if else condition -->
@if ()

@else

@endif



<!-- Auth Condition -->
@auth
    
@else
    
@endauth



<!-- Laravel Logout Route -->
@auth
  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
  <li>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
          {{ __('Log Out') }}
      </a>
    </form>
  </li>
@else
  <li><a href="{{ route('login') }}">Login</a></li>
@endauth

<!-- Show Pagination -->
<div class="paginate">
  {{ $data->links() }}
</div>
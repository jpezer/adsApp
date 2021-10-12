<button class="btn btn-success form-control m-2">Deposit: 
    {{ (Auth::user()->deposit ? Auth::user()->deposit : 0) }} $</button>
<a href="{{ route('home') }}" class="btn btn-secondary form-control m-2">My Ads</a>
<a href="{{ route('welcome') }}" class="btn btn-secondary form-control m-2">All Ads</a>
<a href="{{ route('home.addDeposit') }}" class="btn btn-secondary form-control m-2">Add Deposit</a>
<a href="{{ route('home.showMessages') }}" class="btn btn-secondary form-control m-2">Messages <span>{{ Auth::user()->messages->count() }}</span></a>
<a href="{{ route('home.showAdForm') }}" class="btn btn-secondary form-control m-2">New Ad</a>

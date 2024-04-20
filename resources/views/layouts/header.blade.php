@section('header')
  <header class="header">
    <div class="header-title">
      <a href="/tennis_shop/public"><h1>Tennis Shop</h1></a>
      <img src="{{asset('img/playing-tennis-svgrepo-com.svg')}}" style="width: 40px;">
    </div>
    <nav class="wrapper">
      <ul class="header-menu">
        @if (Auth::check())
            <li class=""><a>ようこそ、{{\Illuminate\Support\Facades\Auth::user()->name}}さん</a></li>
            <li>
              <form action="{{route('user.logout')}}" method="post" class="logout-btm">
                @csrf
                <button class="logout-btm-sentence">ログアウト</button>
              </form>
            </li>
          @else
            <li class=""><a href="{{route('login')}}" class="">ログイン</a></li>
        @endif
        <!-- <li><a href="#">お気に入り</a></li> -->
        <li><a href="{{route('mycart')}}">カート</a></li>
      </ul>
    </nav>
  </header>
@endsection
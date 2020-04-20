<header class="header border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
                    <a class="navbar-brand" href="{{ route('home') }}">PizzaHunt</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item m-0 ml-lg-auto">
                                <a class="nav-link" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$currentCurrency->code }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($currencies as $currency)
                                        <a
                                            href="{{ route('changeCurrency', $currency->code) }}"
                                            class="dropdown-item"
                                        >
                                            {{ $currency->code }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @if ($message = Session::get('success'))
            @include('includes.common.flash_messages', ['$message' => $message, 'type' => 'alert-success'])
        @endif
        @if ($message = Session::get('error'))
            @include('includes.common.flash_messages', ['$message' => $message, 'type' => 'alert-danger'])
        @endif
    </div>
</header>

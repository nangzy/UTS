@extends('template')

@section('id')
        {{ $user->id }}
@endsection

@section('nama')
    {{ $user->name }}
@endsection

@section ("color")
    {{ $user->colorcode }}
@endsection

@section('level')
    {{ $user->level }}
@endsection

@section('content')
    <div class="fw-semibold border-bottom border-black fs-2">
        History Payment
    </div>
    @foreach($user->transactions->reverse() as $t)
        @foreach($coffees as $c)
            @if($t->coffee_id == $c->id)
                @foreach($cat_coffees as $cat)
                @if($c->category_coffee_id == $cat->id)
                @php($tgl = explode(' ', $t->date))
                <div class="mt-1 fw-semibold fs-4">
                    Purchased on {{ $tgl[0] }}
                </div>
                <div class="mt-1 fw-semibold fs-5">
                    Time: {{ $tgl[1] }}
                </div>

                <div class="mt-2 pb-2 pt-3 d-flex align-items-center border-bottom border-dark">
                    <div class="container-fluid">
                        <img src="/sources/{{ $cat->name }}/{{ $c->name }}.jpg" style="width: 100%" class="shadow border border-dark rounded-4" alt="{{ $c->name }}">
                        <div class="mt-2 fw-semibold">
                            {{ $c->name }}
                        </div>
                        <div class="mt-1 fw-light">
                            Rp{{ $c->price }}
                        </div>
                    </div>
                    
                    <div class="pb-1">
                        <button type="button" class="btn btn-success shadow btn-lg">Payment Successfull</button>
                    </div>
                </div> 
                @endif
                @endforeach
            @endif
        @endforeach
    @endforeach
@endsection
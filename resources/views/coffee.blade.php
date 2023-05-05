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
        <div class="p-3 ">
            @foreach ($cat_coffees as $cat)
            <a href="/coffee/{{ $user->id }}#{{ $cat->name }}" class="d-grid d-md-flex gap-2 text-decoration-none">
                <button type="button" class="m-2 btn btn-light border-dark shadow btn-lg" > {{ $cat->name }} </button>
            </a>
            @endforeach
        </div>

        @foreach ($cat_coffees as $cat)
        <div class="fs-2 container-fluid border-bottom border-black" id="{{ $cat->name }}">
            {{ $cat->name }}
        </div>

        <div class="mb-5">
            @foreach ($cat->coffees as $c)
            
            <div class="m-4 d-flex align-items-end mb-5">
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
                    <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="buyModalLabel">Are you sure you want to buy 1 {{ $c->name }}?</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('coffee.buy') }}" method="POST">
                              @csrf
                              <div class="modal-body">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="coffee_id" value="{{ $c->id }}">
                                <input type="hidden" name="success" id="success" value="{{ session('success') }}">
                                <p>This action cannot be undone.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Buy</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-danger shadow btn-lg" data-bs-toggle="modal" data-bs-target="#buyModal">Buy</button>
                    
                    
                </div>
                
                
            </div> 
            
            @endforeach
        </div>
        
        @endforeach
        
       
@endsection

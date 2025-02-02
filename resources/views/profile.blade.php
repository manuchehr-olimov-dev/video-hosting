@extends('templates.template')

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card p-3">
            <div class="d-flex align-items-center">
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155" >
                </div>
                <div class="ml-3 w-100">
                    <h4 class="mb-0 mt-0 ">{{ auth()->user()->name }}</h4>
                    <span>Статус</span>
                    <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-black  stats">
                        <div class="d-flex flex-column">
                            <span class="articles text-black">Articles</span>
                            <span class="number1">38</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="followers text-black">Followers</span>
                            <span class="number2">980</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="rating text-black">Rating</span>
                            <span class="number3">8.9</span>
                        </div>
                    </div>
                    <div class="button mt-2 d-flex flex-row align-items-center">
                        @can("enter admin panel")
                            <a href="{{ route('admin.panel') }}" class="btn btn-sm btn-outline-primary w-100">Админ панель</a>
                        @endcan
                        <a href="{{ route("logout") }}">
                            <button class="btn btn-sm btn-outline-danger w-100 ml-2">Выйти</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

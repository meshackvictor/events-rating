<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body class="antialiased">
@include('layouts.nav')
<div class="bg-indigo-100 py-6 md:py-12">
        <div class="container px-4 mx-auto">

            <div class="text-center max-w-2xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-medium mb-4">Ottap {{ $categoryname }} Events!.</h1>
{{--                <p class="text-gray-600 py-6">Rate from wide category of our events and stand a chance to get a discount up to 20% on your next ticket with ottap!</p>--}}
                {{--                <button class="bg-indigo-600 text-white py-2 px-6 rounded-full text-xl mt-6">Get Started</button>--}}
            </div>

            <div class="container">
                <div class="row">
{{--                    <div class="h-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 grid-flow-row gap-2 justify-center items-center">--}}
                        @foreach($events as $event)
                            <div class="col-md-4 my-4">
                                <a href="{{ route('event', $event->id) }}">
                                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url({{ $event->getImage() }}); background-size: cover; background-position: center;">
                                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                            <h2 class="pt-32 mt-5 mb-4 lh-1 fw-bold">{{ $event->name }}</h2>
                                            <ul class="d-flex list-unstyled mt-auto">
                                                {{--                                        <li class="me-auto bg-white p-3">--}}
                                                {{--                                            <img src="{{ asset('otapp_logo.png') }}" alt="Bootstrap" style="height: 32px; width: auto;" class="rounded-sm bg-white border border-white">--}}
                                                {{--                                        </li>--}}
                                                <li class="d-flex align-items-center me-3">
                                                    <i class="fa fa-map-marker mx-2"></i>
                                                    <small>{{ $event->location }}</small>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class="fa fa-calendar mx-2"></i>
                                                    <small>{{ \Carbon\Carbon::make($event->date)->diffForHumans() }}</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
{{--                    </div>--}}
                </div>
                {{ $events->links() }}
            </div>


            <div class="md:flex md:flex-wrap md:-mx-4 mt-6 md:mt-12">

                @include('layouts.footer')
            </div>

        </div>
</div>
</body>
</html>

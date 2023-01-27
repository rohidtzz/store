@extends('home.layouts.master')
@extends('home.layouts.navbar')

@section('content')

<div class="container" style="margin-top: 2%">
    <div class="row" style="text-align: center">
        <a href="{{ url('transaction/') }}" style="text-decoration: none;color:black">
        <div class="col-12 col-sm-12 col-xl-5" style="display:inline-block;vertical-align: middle;float: none;">
                <div class="card" style="margin: 5%">
                    <div class="card-header">
                        <div class="row">
                            <div class="col text-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.2em" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                </svg> 24-05-2023
                            </div>

                            <div class="col text-end">
                                    <span class="badge rounded-pill bg-danger"> Expired</span>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 col-xl-3 col-md-3  text-start">
                                <img  width="100px" src="{{asset('land/dist/assets/favicon.ico') }}" alt="">
                                {{-- @foreach (json_decode($pro->data) as $s)

                                <img src="{{ asset('product/img/'.$s->image) }}" width="100px" alt="">
                                @endforeach --}}
                                {{-- <img src="{{ asset('blok/image.jpg') }}" width="100px" alt=""> --}}
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-12  text-start" style="font-weight: 700">
                                        Barang
                                        {{-- @foreach (json_decode($pro->data) as $s)
                                        {{App\Models\Product::find($s->product_id)->name}}
                                        @endforeach --}}

                                    </div>
                                    <div class="w-100"></div>
                                    <div class="text-muted  text-start">1 Barang</div>
                                </div>
                            </div>
                            <span class="text-start">+2 prduk lainnya</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-muted  text-start">total belanja</div>
                            <div class="w-100"></div>
                            <div class="col col-6  text-start">Rp. 100.000,00</div>
                        </div>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
    </a>

    <a href="{{ url('transaction/') }}" style="text-decoration: none;color:black">
        <div class="col-12 col-sm-12 col-xl-5" style="display:inline-block;vertical-align: middle;float: none;">
            <div class="card" style="margin: 5%">
                <div class="card-header">
                    <div class="row">
                        <div class="col text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.2em" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg> 24-05-2023
                        </div>

                        <div class="col text-end">
                                <span class="badge rounded-pill bg-danger"> Expired</span>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-xl-3 col-md-3  text-start">
                            <img width="100px" src="{{asset('land/dist/assets/favicon.ico') }}" alt="">
                            {{-- @foreach (json_decode($pro->data) as $s)

                            <img src="{{ asset('product/img/'.$s->image) }}" width="100px" alt="">
                            @endforeach --}}
                            {{-- <img src="{{ asset('blok/image.jpg') }}" width="100px" alt=""> --}}
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12  text-start" style="font-weight: 700">
                                    Barang
                                    {{-- @foreach (json_decode($pro->data) as $s)
                                    {{App\Models\Product::find($s->product_id)->name}}
                                    @endforeach --}}

                                </div>
                                <div class="w-100"></div>
                                <div class="text-muted  text-start">1 Barang</div>
                            </div>
                        </div>
                        <span class="text-start">+2 prduk lainnya</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-muted  text-start">total belanja</div>
                        <div class="w-100"></div>
                        <div class="col col-6  text-start">Rp. 100.000,00</div>
                    </div>
                </div>
            </div>
        {{-- </a> --}}
    </div>
    </a>
    </div>




</div>




@endsection

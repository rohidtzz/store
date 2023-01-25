@extends('home.layouts.master')
@extends('home.layouts.navbar')

@section('content')

<div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="col-12 col-sm-12 col-xl-4 col-md-6">
            {{-- <a href="{{ url('transaction/') }}" style="text-decoration: none;color:black" > --}}
                <div class="card" style="margin: 5%">
                    {{-- <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.2em" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                </svg>
                                    <div class="col">Column</div>
                                    <div class="col">Column</div>
                            </div>

                            <div class="col text-end">
                                    Paid
                            </div>

                        </div>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-4 col-xl-4 col-md-4">
                                <img src="{{asset('land/dist/assets/favicon.ico') }}" alt="">
                                {{-- @foreach (json_decode($pro->data) as $s)

                                <img src="{{ asset('product/img/'.$s->image) }}" width="100px" alt="">
                                @endforeach --}}
                                {{-- <img src="{{ asset('blok/image.jpg') }}" width="100px" alt=""> --}}
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-12" style="font-weight: 700">
                                        Barang
                                        {{-- @foreach (json_decode($pro->data) as $s)
                                        {{App\Models\Product::find($s->product_id)->name}}
                                        @endforeach --}}

                                    </div>
                                    <div class="w-100"></div>
                                    <div class="text-muted">Keterangan</div>
                                    <div style="font-weight: 700">
                                        Rp225.000

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col  text-start"><i class="fa fa-trash-o" style="font-size:25px;margin-right:15px"></i></div>
                            <div class="col  text-end">
                                <a href="" style="text-decoration: none" class="fa fa-plus"></a>
                                <input type="text" style="width:25px;border:none;color:black" value="10" disabled>
                                <a href="" class="fa fa-minus" aria-hidden="true" style="text-decoration: none;color:red"></a>
                            </div>
                            {{-- <div class="col text-muted">total belanja</div>
                            <div class="w-100"></div>
                            <div class="col col-6">Rp. 100.000,00</div> --}}
                        </div>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
        <div class="col-12 col-sm-12 col-xl-4 col-md-6">
            {{-- <a href="{{ url('transaction/') }}" style="text-decoration: none;color:black" > --}}
                <div class="card" style="margin: 5%">
                    {{-- <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.2em" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                </svg>
                                25-01-2023
                        </div>
                            <div class="col text-end">
                                    Paid
                            </div>

                        </div>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-4 col-xl-4 col-md-4">
                                <img src="{{asset('land/dist/assets/favicon.ico') }}" alt="">
                                {{-- @foreach (json_decode($pro->data) as $s)

                                <img src="{{ asset('product/img/'.$s->image) }}" width="100px" alt="">
                                @endforeach --}}
                                {{-- <img src="{{ asset('blok/image.jpg') }}" width="100px" alt=""> --}}
                            </div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-12" style="font-weight: 700">
                                        Barang
                                        {{-- @foreach (json_decode($pro->data) as $s)
                                        {{App\Models\Product::find($s->product_id)->name}}
                                        @endforeach --}}

                                    </div>
                                    <div class="w-100"></div>
                                    <div class="text-muted">Keterangan</div>
                                    <div style="font-weight: 700">
                                        Rp225.000

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col  text-start"><i class="fa fa-trash-o" style="font-size:25px;margin-right:15px"></i></div>
                            <div class="col  text-end">
                                <a href="" style="text-decoration: none" class="fa fa-plus"></a>
                                <input type="text" style="width:25px;border:none;color:black" value="10" disabled>
                                <a href="" class="fa fa-minus" aria-hidden="true" style="text-decoration: none;color:red"></a>
                            </div>
                            {{-- <div class="col text-muted">total belanja</div>
                            <div class="w-100"></div>
                            <div class="col col-6">Rp. 100.000,00</div> --}}
                        </div>
                    </div>
                </div>
            {{-- </a> --}}
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-12 col-xl-4 col-md-6">
            <div class="card" style="margin: 5%">
                <div class="card-header">
                    <h3>Metode Pembayaran</h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <select class="form-select" aria-label="Default select example">
                                <option class="text-center" selected>-- Pilih Metode Pembayaran --</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col">
                            <br>
                            <button type="suby" class="btn btn-primary">Beli</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



</div>




@endsection

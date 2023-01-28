@extends('home.layouts.master')
@extends('home.layouts.navbar')
@extends('home.layouts.hero')
@section('content')
{{-- <div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin: 5%">
                <div class="card-header">
                    <h3>
                        Layanan Pascabayar
                    </h3>
                </div>
                <div class="card-body">
                    <form action="/2">
                        <label for="">Kategori</label>
                        <select name="kategori" id="kategori" class="form-select" aria-label="Default select example">
                            <option value="k" selected>-- Pilih Layanan --</option>
                            <option value="20">Pulsa</option>
                            <option value="30">Shopee</option>
                            <option value="27">Grab</option>
                            <option value="28">Dana</option>
                            <option value="26">Ovo</option>
                            <option value="25">Gojek</option>
                        </select>

                        <br>

                        <label for="">Operator</label>
                        <select name="operator" id="operator" class="form-select" aria-label="Default select example">

                        </select>

                        <br>

                        <label for="">Product</label>
                        <select name="product" id="product"  class="form-select" aria-label="Default select example">

                        </select>

                        <br>

                        <div id="nohp" style="display: none">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No Hp</label>
                                <input id="hp" onkeydown="selesai()" name="nohp" required type="number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <br>
                        <button disabled id="buttom" type="submit" class="btn btn-primary">Add To cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>



    $('#kategori').on('change', function(){

        const kategori = $('#kategori').val();

        if(kategori == "k"){
            $('#operator').empty();
            $('#product').empty();
            $('#hp').val('');
            $('#nohp').hide();
            $('#buttom').prop('disabled', true);
        } else {

            $.ajax({
                type : 'get',
                url : '/operator/'+kategori,
                success : function(data){

                    $('#operator').empty();

                    $(data).each(function(x,y){
                        // console.log(y.category_id)
                        result = '<option value="'+ y.id +'">'+ y.name +'</option>';
                        $('#operator').append(result);
                    });
                    $('#product').empty();



                },
            });



            $('#operator').on('change', function(){

                const operator = $('#operator').val();
                // console.log(operator)
                // console.log(kategori)
                $.ajax({
                    type : 'get',
                    url : '/product/'+operator+'/'+kategori,
                    success : function(data){

                        $('#product').empty();

                        $(data).each(function(x,y){
                            const rupiah = (number)=>{
                                return new Intl.NumberFormat("id-ID", {
                                }).format(number);
                            }

                            result = '<option value="'+ y.code +'">'+ y.name +' Harga: '+ rupiah(y.price) +'</option>';
                            $('#product').append(result);
                        });


                    },
                });
                $('#product').on('change', function(){
                    $("#nohp").removeAttr("style");

                });
            });


        }


    });

    function selesai(){
        let isi = $('#hp').val()

        // console.log(isi.length)

        if(isi.length >= 10){
            $('#buttom').prop('disabled', false);
        } else {
            $('#buttom').prop('disabled', true);
        }
    }

    function getpro(operator_id,category_id){
        $.ajax({
            type : 'get',
            url : '/product/'+operator_id+'/'+category_id,
            success : function(data){
                console.log(data)
            },
        });
    }
</script> --}}

<div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin: 5%">
                <div class="card-header">
                    <h3>
                        Layanan Pascabayar
                    </h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3" style="margin-top:2%">
                            <a href="/beli/pulsa" style="text-decoration: none;">
                                <div class="row text-center">
                                    <div class="col-12"><img src="{{ asset('land/dist/assets/favicon.ico') }}" alt=""></div>
                                    <div style="color: black" class="col-12">Pulsa</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3" style="margin-top:2%">
                            <a href="" style="text-decoration: none;">
                                <div class="row text-center">
                                    <div class="col-12"><img src="{{ asset('land/dist/assets/favicon.ico') }}" alt=""></div>
                                    <div style="color: black" class="col-12">Dana</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3" style="margin-top:2%">
                            <a href="" style="text-decoration: none;">
                                <div class="row text-center">
                                    <div class="col-12"><img src="{{ asset('land/dist/assets/favicon.ico') }}" alt=""></div>
                                    <div style="color: black" class="col-12">Ovo</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-xl-3" style="margin-top:2%">
                            <a href="" style="text-decoration: none;">
                                <div class="row text-center">
                                    <div class="col-12"><img src="{{ asset('land/dist/assets/favicon.ico') }}" alt=""></div>
                                    <div style="color: black" class="col-12">Gojek</div>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>



    $('#kategori').on('change', function(){

        const kategori = $('#kategori').val();

        if(kategori == "k"){
            $('#operator').empty();
            $('#product').empty();
            $('#hp').val('');
            $('#nohp').hide();
            $('#buttom').prop('disabled', true);
        } else {

            $.ajax({
                type : 'get',
                url : '/operator/'+kategori,
                success : function(data){

                    $('#operator').empty();

                    $(data).each(function(x,y){
                        // console.log(y.category_id)
                        result = '<option value="'+ y.id +'">'+ y.name +'</option>';
                        $('#operator').append(result);
                    });
                    $('#product').empty();



                },
            });



            $('#operator').on('change', function(){

                const operator = $('#operator').val();
                // console.log(operator)
                // console.log(kategori)
                $.ajax({
                    type : 'get',
                    url : '/product/'+operator+'/'+kategori,
                    success : function(data){

                        $('#product').empty();

                        $(data).each(function(x,y){
                            const rupiah = (number)=>{
                                return new Intl.NumberFormat("id-ID", {
                                }).format(number);
                            }

                            result = '<option value="'+ y.code +'">'+ y.name +' Harga: '+ rupiah(y.price) +'</option>';
                            $('#product').append(result);
                        });


                    },
                });
                $('#product').on('change', function(){
                    $("#nohp").removeAttr("style");

                });
            });


        }


    });

    function selesai(){
        let isi = $('#hp').val()

        // console.log(isi.length)

        if(isi.length >= 10){
            $('#buttom').prop('disabled', false);
        } else {
            $('#buttom').prop('disabled', true);
        }
    }

    function getpro(operator_id,category_id){
        $.ajax({
            type : 'get',
            url : '/product/'+operator_id+'/'+category_id,
            success : function(data){
                console.log(data)
            },
        });
    }
</script>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col-12 mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            Rp. 100.000.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Cart</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Fancy Product</h5>
                            <!-- Product price-->
                            Rp. 100.000.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to Cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('home.layouts.footer')

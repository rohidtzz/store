@extends('home.layouts.master')
@extends('home.layouts.navbar')
@section('content')


<div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin: 5%">
                <div class="card-body">
                    <form action="/2">
                        <label for="">No Hp</label>
                        <input  id="hp" onkeyup="selesai()" name="nohp" type="number" class="form-control">
                        {{-- <div class=""> --}}
                            <div  class=  "row hide"  >
                                {{-- <button style="padding: 0;border: none;background: none;" type="submit" onclick="confir()" style="text-decoration: none;color:black" >
                                    <input type="hidden" value="${y.product_code}">
                                    <div class=  "col-12"  >
                                        <div  class=  "card"  style=  "margin-top: 2%"  >
                                            <div  class=  "card-body"  >
                                                <div class="row">
                                                    <div class="col-6 text-start" style="padding:20px">
                                                        ${y.product_description} ${y.product_nominal}
                                                    </div>
                                                    <div class="col-6 text-end" style="padding:20px">
                                                        ${y.product_price}
                                                    </div>

                                                    <div class="col text-start" style="padding:20px">
                                                    pulsa ${y.product_description} ${y.product_nominal}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button> --}}
                            </div>

                        {{-- </div> --}}

                        <br>
                        <button id="buttom" type="submit" class="btn btn-primary">Add To cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    // $(document).ready(function(){

    //     // selesai()
    //     setInterval(() => {
    //         selesai()
    //     }, 1000);
    // });


    function selesai(){
        let isi = $('#hp').val()

        //three
        if(isi == '0896' || isi == '0895' || isi == '0897' || isi == '0899' || isi == '0899'){

            $.ajax({
                type : 'get',
                url : '/prefix/pulsa/Three',
                success : function(data){

                    $('.hide').empty();

                    $(data).each(function(x,y){
                        // console.log(y.category_id)
                        const rupiah = (number)=>{
                                return new Intl.NumberFormat("id-ID", {
                                }).format(number);
                        }

                        if(y.product_code == 'hthreeBEBAS150' || y.product_code == 'hthreeBEBAS250' || y.product_code == 'hthreeBEBAS60' ){

                            result =  `


                                        <div class=  "col-12"  >
                                            <div  class=  "card"  style=  "margin-top: 2%"  >
                                                <div  class=  "card-body"  >
                                                    <div class="row">
                                                        <div class="col-6 text-start" style="padding:7px">
                                                            <input required name="code" value="${y.product_code}" type="radio"> ${y.product_description} ${y.product_nominal}
                                                        </div>
                                                        <div class="col-6 text-end" style="padding:7px">
                                                           Rp ${rupiah(y.product_price)}
                                                        </div>

                                                        <div class="col text-start" style="padding:7px">
                                                        Pulsa ${y.product_description} Rp ${y.product_nominal}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            `;

                        } else {
                            result =  `


                                        <div class=  "col-12"  >
                                            <div  class=  "card"  style=  "margin-top: 2%"  >
                                                <div  class=  "card-body"  >
                                                    <div class="row">
                                                        <div class="col-6 text-start" style="padding:7px">
                                                            <input required name="code" value="${y.product_code}" type="radio"> ${y.product_description} ${rupiah(y.product_nominal)}
                                                        </div>
                                                        <div class="col-6 text-end" style="padding:7px">
                                                           Rp ${rupiah(y.product_price)}
                                                        </div>

                                                        <div class="col text-start" style="padding:7px">
                                                        Pulsa ${y.product_description} Rp ${rupiah(y.product_nominal)}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            `;

                        }

                        $('.hide').append(result);
                    });

                    $('#product').empty();



                },
            });


        } else if(isi == '085154' || isi == '085155' || isi == '085156' || isi == '085157' || isi == '085158'){
            //byu

            $.ajax({
                type : 'get',
                url : '/prefix/pulsa/By.U',
                success : function(data){

                    $('.hide').empty();

                    $(data).each(function(x,y){
                        // console.log(y.category_id)
                        const rupiah = (number)=>{
                                return new Intl.NumberFormat("id-ID", {
                                }).format(number);
                        }
                        result =  `


                                    <div class=  "col-12"  >
                                        <div  class=  "card"  style=  "margin-top: 2%"  >
                                            <div  class=  "card-body"  >
                                                <div class="row">
                                                    <div class="col-6 text-start" style="padding:7px">
                                                        <input required name="code" value="${y.product_code}" type="radio"> ${y.product_description} ${rupiah(y.product_nominal)}
                                                    </div>
                                                    <div class="col-6 text-end" style="padding:7px">
                                                       Rp ${rupiah(y.product_price)}
                                                    </div>

                                                    <div class="col text-start" style="padding:7px">
                                                    Pulsa ${y.product_description} Rp ${rupiah(y.product_nominal)}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        `;
                        $('.hide').append(result);
                    });

                    $('#product').empty();



                },
            });

        } else if(isi == '0881' || isi == '0882' || isi == '0883' || isi == '0884' || isi == '0885' || isi == '0886' || isi == '0887' || isi == '0888'){
            //smartfren

            $.ajax({
                type : 'get',
                url : '/prefix/pulsa/Smart',
                success : function(data){

                    $('.hide').empty();

                    $(data).each(function(x,y){
                        // console.log(y.category_id)
                        const rupiah = (number)=>{
                                return new Intl.NumberFormat("id-ID", {
                                }).format(number);
                            }
                        result =  `


                                    <div class=  "col-12"  >
                                        <div  class=  "card"  style=  "margin-top: 2%"  >
                                            <div  class=  "card-body"  >
                                                <div class="row">
                                                    <div class="col-6 text-start" style="padding:7px">
                                                        <input required name="code" value="${y.product_code}" type="radio"> ${y.product_description} ${rupiah(y.product_nominal)}
                                                    </div>
                                                    <div class="col-6 text-end" style="padding:7px">
                                                       Rp ${rupiah(y.product_price)}
                                                    </div>

                                                    <div class="col text-start" style="padding:7px">
                                                    Pulsa ${y.product_description} Rp ${rupiah(y.product_nominal)}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        `;
                        $('.hide').append(result);
                    });

                    $('#product').empty();



                },
            });

        }

        // $('.hide').empty();
        // $('#buttom').prop('disabled', true);

    }

</script>

<br><br><br>
@endsection

@extends('layouts.outlet')
@section('content')
<br>
<div class="container-fluid">

    <!-- Row end -->
    <div class="row">
        <!--input sizes starts-->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Penilaian Karyawan</h5>
                    <div class="f-right">
                        <a href="" data-toggle="modal" data-target="#input-size-Modal"><i
                                class="icofont icofont-code-alt"></i></a>
                    </div>
                </div>
                <div class="card-block">
                @include('layouts.alert')
                    <form method="post" action="">
                        <!--inputannya di loop aja sesuai data objek penilaian-->
                     <div class="form-group row">
                            <div class="col-md-2"><label for="InputNormal" class="form-control-label">Karyawan</label></div>
                            <div class="col-md-10">
                            <select class="form-control" name="karyawan_id">
                            <option value="" >-Pilih Karyawan-</option>
                            @foreach($karyawan as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">1. Ketepatan Waktu dalam Bekerja ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q1"
                                                        id="optionsRadios3" value="50" >
                                                    kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q1"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q1"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">2. Catatan Absen Karyawan ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q2"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q2"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q2"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">3. Keseriusan Karyawan dalam bekerja?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q3"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q3"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q3"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">4. Bertanggung jawab atas Section kerja yang ada?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q4"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q4"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q4"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">5. Komunikasi dengan karyawan lain dan atasan ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q5"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q5"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q5"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">6. Keterbukaan karyawan dalam menyampaikan keluhan ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q6"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q6"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q6"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">7. Dapat Menerima Kritik yang membangun ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q7"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q7"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q7"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">8. keramahan Karyawan dalam melayani konsumen ?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q8"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q8"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q8"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">9. Menawarkan socket menu KFC?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q9"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q9"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q9"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">10. SOP dalam Pelayanan?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q10"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q10"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q10"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">11. Waktu Pelayanan pada konsumen?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q11"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q11"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q11"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">12. Mampu Dengan Mudah Memprioritaskan Pekerjaan?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q12"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q12"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q12"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">13. memiliki Motivasi yang tinggi dalam melaksanakan  Pekerjaan?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q13"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q13"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q13"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">14. Kelengkapan Dalam Berpakaian?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q14"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q14"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q14"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12"><label for="InputNormal" class="form-control-label">15. Tepat Waktu saat Pergantian Shift?</label></div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q15"
                                                        id="optionsRadios3" value="50" >
                                                    Kurang Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q15"
                                                        id="optionsRadios3" value="70" >
                                                    Baik
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <label for="optionsRadios1" class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="q15"
                                                        id="optionsRadios3" value="85" >
                                                    Sangat Baik
                                                </label>
                                            </div>
                                        </div>
                                    </div>         
                        <div class="card-footer text-right">
                            {{csrf_field() }}
                            <input class="btn btn-primary mr-2" type="submit" name="submit" value="Simpan Penilaian">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--input sizes ends-->

</div>
</div>
@endsection

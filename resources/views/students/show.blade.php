@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mb-3 p-4 bg-white border-primary">
                <div class="row pb-1 border-bottom border-5 border-dark">
                    <div class="col-3">
                        <img src="https://methodist2.sch.id/assets/umum/images/favicon.png" class="img-fluid mx-auto d-block" alt="img" width="80px;">
                    </div>
                    <div class="col-9 text-center">
                        <h5>SEKOLAH METHODIST 2 PALEMBANG</h5>
                        <h5 style="letter-spacing: 10px;">巨港卫理二校</h5>
                        <p class="m-0" style="font-size: 10px; letter-spacing: -0.3px;">JALAN KOLONEL ATMO NO.422/450 PALEMBANG 30125 SUMATERA SELATAN</p>
                        <p class="m-0" style="font-size: 10px; letter-spacing: -0.3px;">KEL. 17 ILIR KEC. ILIR TIMUR 1 TELP 0711-351473 WWW.METHODIST2.SCH.ID</p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3">
                        <img src="{{ $student->getFirstMediaUrl('photo') }}" class="img-fluid rounded border border-5 border-primary border" alt="img">

                        <div class="text-center">
                            <p class="m-0 mt-2" style="font-size: 8px;">kartu ini berlaku sampai</p>
                            <p class="m-0" style="font-size: 12px;">31 Agustus 2023</p>
                        </div>
                    </div>
                    <div class="col-md-9 border-primary border-5 border-start">
                        <h6 class="text-center fw-bold text-primary">SMK METHODIST 2 PALEMBANG</h6>

                        <div class="row mt-3">
                            <div class="col-3">
                                <b>Nama</b>
                            </div>
                            <div class="col-9">
                                : {{ $student->name }}
                            </div>
                            <div class="col-3">
                                <b>Kelas</b>
                            </div>
                            <div class="col-9">
                                : {{ $student->class ?? '-' }}
                            </div>
                            <div class="col-3">
                                <b>TTL</b>
                            </div>
                            <div class="col-9">
                                : {{ $student->address }}, {{ $student->birth }}
                            </div>
                            <div class="col-3">
                                <b>NIS</b>
                            </div>
                            <div class="col-9">
                                : {{ $student->nis ?? '-' }}
                            </div>
                        </div>

                        <div class="bg-warning text-white text-center rounded-pill mt-3">
                            Akademik - Karakter - Kreativitas
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
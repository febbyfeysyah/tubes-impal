@extends('mahasiswa/base')

@section('activehome')
    active
@endsection

@section('title')
    Home - Mahasiswa
@endsection

@section('addcss')
    @endsection

@section('addjs')
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            demo.initChartist();
        });
    </script>
@endsection

@section('nav_position')
    Home
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Presensi Mahasiswa (DUMMY)</h4>
                    <p class="category">Semester 4 - 2016/2017s</p>
                </div>
                <div class="content">
                    <div id="chartActivity" class="ct-chart"></div>

                    <div class="footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">Agenda Akademik (DUMMY)</h4>
                    <p class="category">Tanggal : {{ date('D, d M Y') }}</p>
                </div>
                <div class="content">
                    <div class="table-full-width">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Her Registrasi</td>
                                <td class="td-actions text-right">
                                    2 Desember 2016
                                </td>
                            </tr>
                            <tr>
                                <td>Pendaftaran GemasTIK 2016</td>
                                <td class="td-actions text-right">
                                    20 Maret 2017
                                </td>
                            </tr>
                            <tr>
                                <td>Awal Kuliah Semester Genap 2017/2018</td>
                                <td class="td-actions text-right">
                                    16 Januari 2017
                                </td>
                            </tr>

                            <tr>
                                <td>UAS Semeter Genap 2017/2018</td>
                                <td class="td-actions text-right">
                                    24 April 2017
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated by Admin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

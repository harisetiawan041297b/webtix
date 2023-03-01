@extends('layouts.main')

@section('container')
    <section id="head" style="background-image: url('img/bg-2.jpeg'); background-size: cover">
        <div class="container-fluid text-center pt-5 pb-5" style="border-top: 5px solid #94d0f3">
            <h1 style="color: aliceblue;">Welcome Admin</h1>
            <h5 style="color: aliceblue;">Silahkan Lihat daftar dan lakukan konfirmasi check in!</h5>
        </div>
    </section>
    <section id="list">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-primary">
                            <tr>
                                <th class="text-center">No</th>
                                <th>No Registrasi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Handphone</th>
                                <th>Check In</th>
                                <th class="text-center">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($table as $tab)
                                <tr>
                                    <td scope="row" class="text-center">{{ $tab['id'] }}</td>
                                    <td>{{ $tab['tregist'] }}</td>
                                    <td>{{ $tab['tname'] }}</td>
                                    <td>{{ $tab['temail'] }}</td>
                                    <td>{{ $tab['tphone_number'] }}</td>

                                    @php
                                        if ($tab['tcheck'] == true) {
                                            echo "<td>Checked In</td>";
                                        } else {
                                            echo "<td>Not Checked In</td>";
                                        }
                                    @endphp

                                    <td class="text-center">
                                        <form action="{{ route('check.store') }}/{{ $tab['id'] }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $tab['id'] }}">
                                            <button type="submit"><i class="fas fa-check"></i></button>

                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

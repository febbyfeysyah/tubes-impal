@extends('admin/base')

@section('activemahasiswa')
    active
@endsection

@section('title')
    Edit Mahasiswa - Admin Akademik
@endsection

@section('nav_position')
    Edit Mahasiswa
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Edit Mahasiswa</h4>
				</div>
				<div class="content">
					<form action="{{ url('admin/edit-mhs') }}/{{ $mahasiswa->id }}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>Nama</label>
									<input name="nama" type="text" class="form-control" value="{{$mahasiswa->name}}" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>NIM</label>
									<input name="nim" type="text" class="form-control" value="{{$mahasiswa->nim}}" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">	
									<label>Kelas</label>
									<select name="kelas" class="form-control" required>
				                        <option selected="selected" value="{{$mahasiswa->kelas_id}}">{{ $mahasiswa->kelas->kode }}</option>
				                        @foreach($list_kelas as $kelas)
				                            <option value="{{ $kelas->id }}">{{ $kelas->kode }}</option>
				                        @endforeach
				                    </select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>Alamat</label>
									<input name="alamat" type="text" class="form-control" value="{{$mahasiswa->alamat}}" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>No.Telp/HP</label>
									<input name="telp" type="text" class="form-control" value="{{$mahasiswa->no_telp}}" required>
								</div>
							</div>
							<div class="col-md-3">
								<div  class="form-group">
									<label>Username</label>
									<input name="username" type="text" class="form-control" value="{{$mahasiswa->username}}" required>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
<!DOCTYPE html>
<html>
<head>
    <title>Request dengan Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Form Validation dengan Laravel</h1>
                <form action="/formulir/proses" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nama" class="control-label">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="form-control 
                        {{ $errors->has('nama') ? ' is-invalid ' : '' }}"
                        placeholder="Nama lengkap" value="{{ old('nama') }}">

                        @if ($errors->has('nama'))
                        <span class="text-danger small">
                            {{ $errors->first('nama') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="control-label">Alamat</label>
                        <textarea rows="3" id="alamat" name="alamat" class="form-control 
                        {{ $errors->has('alamat') ? ' is-invalid ' : '' }}"
                        placeholder="Alamat">{{ old('alamat') }}</textarea>

                        @if ($errors->has('alamat'))
                        <span class="text-danger small">
                            {{ $errors->first('alamat') }}
                        </span>
                        @endif
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
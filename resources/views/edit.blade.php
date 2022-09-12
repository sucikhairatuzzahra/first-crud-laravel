<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>first crud</title>
</head>

<body>
    <div class="p-2">
        <h1>Table Latihan Suci KhairatuzZ</h1>
    </div>


    <div class="p-5">
        <h3 class="text-center">Edit Data User</h3>
        <form action="{{ route('user.update', ['id_user' => $user->id_user]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            {{-- harus ada --}}
            <div class="form -group mb-3">
                <label class="form-label">Nama</label>
                <input name="nama_user" type="text" class="form-control" placeholder="Enter nama"
                    value="{{ $user->nama_user }}">


            </div>
            <div class="form -group mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Enter Email"
                    value="{{ $user->email }}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="form -group mb-3">
                <label class="form-label">jenis Kelamin</label>
                <div class="mb-3">
                    <select class="form-control" id="jekel" name="jekel">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        <script>
                            document.getElementById('jekel').value = "{{ $user->jekel }}";
                        </script>
                    </select>
                </div>

            </div>
            <div class="form -group mb-3">
                <label class="form-label">No.Hp</label>
                <input name="nohp" type="text" class="form-control" placeholder="Enter nomor hp"
                    value="{{ $user->nohp }}">

            </div>
            <div class="form -group mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" type="text" class="form-control" placeholder="Enter alamat">{{ $user->alamat }}</textarea>

            </div>
            <a href="/" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


</body>

</html>

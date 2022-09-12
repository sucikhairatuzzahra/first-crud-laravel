<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <title>first crud</title>
</head>

<body>
    <h1>Table Latihan Suci Khairatuz Z</h1>

    {{-- <p class="text-center text-primary">{{ $saya }}</p>
    <p class="text-center text-primary">{{ $kamu }}</p>
    <p class="text-center text-primary">{{ $dia }}</p> --}}

    <div class="p-5 m-4">
        <a href="{{ route('user.add') }}" type="submit" class="btn btn-primary" style="margin-bottom:10px ">Tambah</a>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No.HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                ?>
                @foreach ($user as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->nama_user }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->jekel }}</td>
                        @if ($item->nohp == null)
                            <td class="text-danger"><i>*Nomor Hp belum ditambahkan*</i></td>
                        @else
                            <td>{{ $item->nohp }}</td>
                        @endif

                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="{{ route('user.edit', ['id_user' => $item->id_user]) }}"
                                class="btn btn-warning">Edit</a>

                            <button onclick="hapus({{ $item->id_user }})" class="btn btn-danger">Hapus</button>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script>
        function hapus(id_user) {
            console.log(id_user);
            if (confirm('Anda yakin ingin menghapus data ?')) {
                $.ajax({
                    type: "get",
                    url: "{{ route('user.hapus') }}/" + id_user,
                    data: {
                        "id_user": id_user
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                })

            }

        }
    </script>

</body>

</html>

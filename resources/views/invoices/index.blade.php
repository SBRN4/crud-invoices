<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/34eefb7373.js" crossorigin="anonymous"></script>
    <title>Invoices||Home</title>
</head>

<body>
    @include('partials.navbar')

    <div class="box">
        <div class="container-1">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Search..." />
        </div>
      </div>

    <div class="tambah">
        <button>+Tambah Invoice</button>
    </div>

    <div class="container-3">
        <table cellspacing='0'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Invoice</th>
                    <th>Jatuh Tempo</th>
                    <th>Customer</th>
                    <th>Diskon</th>
                    <th>Pajak</th>
                    <th>Status Invoice</th>
                    <th>Status Payment Invoice</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($invoices as $item)
                    <tr>
                        <td>{{ $post->no }}</td>
                        <td>{{ $post->tanggal_invoice }}</td>
                        <td>{{ $post->tanggal_jatuh_tempo }}</td>
                        <td>{{ $post->customer }}</td>
                        <td>{{ $post->diskon }}</td>
                        <td>{{ $post->pajak }}</td>
                        <td>{{ $post->status_invoice }}</td>
                        <td>{{ $post->status_payment_invoice }}</td>
                        <td>{{ $post->deskripsi }}</td>
                    </tr>
                @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
        {{-- {{ $invoices->links() }} --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

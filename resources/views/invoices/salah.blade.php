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
    <td>
        <a href="/invoices/edit/{{ $post->id }}">Edit</a>
        |
        <a href="/invoices/hapus/{{ $post->id }}">Hapus</a>
    </td>
</tr>
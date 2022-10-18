<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
        <form action="<?= base_url('Datasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama ">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="number" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <select name="kelas" id="kelas">
                            <option value="-">Pilih kelas</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgllahir" id="tgllahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmptlahir" id="tmptlahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                    <textarea rows="10" cols="45" name="alamat" id="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jnskel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="jnskel" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="-">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>
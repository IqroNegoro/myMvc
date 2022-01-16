<h1> Data Peserta </h1>
<div class="aksi">
    <div class="searching">
        <input type="text" id="searchInp" placeholder="Cari Peserta...">
        <button id="submit">
            <i class="bx bx-search"></i>
        </button>
    </div>
    <div class="tambah">
        <button id="tambah" title="tambah">
            <i class="bx bx-plus"></i>
        </button>
    </div>
</div>
<div class="daftar">
    <table cellpadding="12" border=1 cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Profil</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["daftar"] as $x) : ?>
                <tr>
                    <td>
                        <?= $x["id"] ?>
                    </td>
                    <td>
                        <a href="<?= BASEURL ?>pendaftar/detail/<?= $x["id"] ?>/<?= $x["nama"] ?>">
                            <img src="<?= BASEURL ?>asset/img/<?= $x["profile"] ?>" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="<?= BASEURL ?>pendaftar/detail/<?= $x["id"] ?>/<?= $x["nama"] ?>">
                            <?= $x["nama"] ?>
                        </a>
                    </td>
                    <td>
                        <?= $x["email"] ?>
                    </td>
                    <td>
                        <?= $x["hp"] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<div class="background">
    <div class="add">
        <form action="<?= BASEURL ?>pendaftar/tambah/" method="POST" enctype="multipart/form-data">
        <table cellpadding="2">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="number" name="hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <select name="alamat" id="alamat">
                        <option value="Jawa Barat"> Jawa Barat</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>
                    <input type="text" name="sekolah">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" id="jurusan">
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MM">MM</option>
                    </select>
                </td>
            </tr>
            <td> Profile </td>
            <td><input type="file" name="profil"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">
                        <i class="bx bx-plus"></i>
                    </button>
                </td>
            </tr>
            <tr>
        </table>
    </form>
</div>
</div>
<?php if (strlen($data["detail"]["id"] == null)) {
    header("Location: " . BASEURL . "pendaftar");
} ?>
<div class="profile" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(<?= BASEURL ?>asset/img/<?= $data["detail"]["profile"] ?>);">
    <img src="<?= BASEURL ?>asset/img/<?= $data["detail"]["profile"] ?>" alt="">
</div>
<div class="id">
    <h4><?= $data["detail"]["id"] ?></h4>
</div>
<div class="nama">
    <h2><?= $data["detail"]["nama"] ?></h2>
</div>
<div class="data">
    <div class="icon">
        <i class="bx bxs-school"></i>
    </div>
    <div class="sekolah">
        <p> <?= $data["detail"]["asal"] ?></p>
    </div>
    <div class="icon">
        <i class='bx bx-mail-send'></i>
    </div>
    <div class="email">
        <p> <?= $data["detail"]["email"] ?></p>
    </div>
    <div class="icon">
        <i class="bx bx-home-alt"></i>
    </div>
    <div class="alamat">
        <p> <?= $data["detail"]["alamat"] ?></p>
    </div>
    <div class="icon">
        <i class="bx bxs-phone"></i>
    </div>
    <div class="hp">
        <p> <?= $data["detail"]["hp"] ?></p>
    </div>
    <div class="icon">
        <i class="bx bxs-calendar"></i>
    </div>
    <div class="tgl_lahir">
        <p> <?= $data["detail"]["tgl_lahir"] ?></p>
    </div>
    <div class="icon">
        <i class="bx bxs-briefcase"></i>
    </div>
    <div class="jurusan">
        <p> <?= $data["detail"]["jurusan"] ?></p>
    </div>
</div>

<div class="aksi">
    <button id="edit">
        Edit
    </button>
    <a href="<?= BASEURL ?>pendaftar/hapus/<?= $data["detail"]["id"] ?>">
        <button id="hapus">
            Hapus
        </button>
    </a>
</div>

<div class="background">
    <div class="add">
        <form action="<?= BASEURL ?>pendaftar/edit/" method="POST" enctype="multipart/form-data">
            <table cellpadding="2">
                <input type="hidden" value="<?= $data["detail"]["id"] ?>" name="id">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $data["detail"]["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?= $data["detail"]["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td><input type="number" name="hp" value="<?= $data["detail"]["hp"] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <select name="alamat" id="alamat" value="<?= $data["detail"]["alamat"] ?>">
                            <option value="Jawa Barat"> Jawa Barat</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>
                        <input type="text" name="sekolah" value="<?= $data["detail"]["asal"] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?= $data["detail"]["tgl_lahir"] ?>"></td>
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
                <td><input type="file" name="profil" value="<?= $data["detail"]["profile"] ?>"></td>
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
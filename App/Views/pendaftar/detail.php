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
        <i class="bx bxs-gmail"></i>
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
    <div>
        <?= date("Y-d-m", strtotime("2005-02-14")) ?>
    </div>
</div>














<div class="aksi">
    <button id="edit">
        Edit
    </button>
    <button id="hapus">
        Hapus
    </button>
</div>
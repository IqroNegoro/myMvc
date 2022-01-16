<div class="row">
    <div class="item">
        <?php if (count($data["hariini"]) > 0) : ?>
            <span><?= count($data["hariini"]) ?></span>
        <?php else : ?>
            <p>0</p>
        <?php endif ?>
        <span> Pendaftar Hari Ini </span>
    </div>
    <div class="item">
        <?php if (count($data["kemarin"]) > 0) : ?>
            <p><?= count($data["kemarin"]) ?></p>
        <?php else : ?>
            <p>0</p>
        <?php endif ?>
        <span> Pendaftar Kemarin </span>
    </div>
    <div class="item">
        <?php if (count($data["kemarin"]) > 0) : ?>
            <p><?= round(count($data["hariini"]) / count($data["kemarin"]) * 100) ?>%</p>
        <?php else : ?>
            <p>0%</p>
        <?php endif ?>
        <span> Peningkatan Hari Ini </span>
    </div>
    <div class="item">
        <span><?= count($data["pendaftar"]) ?></span>
        <span> Total Pendaftar </span>
    </div>
</div>
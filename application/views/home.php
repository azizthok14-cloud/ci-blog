<h1>Daftar Artikel</h1>

<?php foreach ($artikel as $a): ?>
    <h3><?= $a['judul']; ?></h3>
    <a href="<?= base_url('blog/detail/'.$a['id']); ?>">Baca</a>
    <hr>
<?php endforeach; ?>
<?php ob_start(); ?>
<h1>Daftar Tugas</h1>

<!-- Pesan Sukses -->
<?php if ($message): ?>
    <div class="message"><?= htmlspecialchars($message); ?></div>
<?php endif; ?>

<form action="?action=create" method="POST">
    <input type="text" name="title" placeholder="Tambahkan tugas baru">
    <button type="submit">Tambah</button>
</form>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li><i class="fas fa-check-circle"></i> <?= htmlspecialchars($task['title']); ?></li>
    <?php endforeach; ?>
</ul>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';

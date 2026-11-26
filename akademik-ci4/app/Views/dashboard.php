<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="container">
        <h1><?= esc($title) ?></h1>

        <div class="dashboard">
            <?php foreach ($cards as $card): ?>
                <div class="card">
                    <h3><?= esc($card['label']) ?></h3>
                    <p><?= esc((string) $card['jumlah']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getenv('APP_NAME'); ?></title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyNFHkswUCV739qiEtbpDu6OpXJHo0AwN0cfx9pYB4-zmDInsXXurdmV1otkEJYlGVAv4&usqp=CAU">

    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
</head>

<body>
    <div class="flex w-full h-screen bg-slate-900 flex-col justify-center items-center">
        <div class="flex flex-row w-full h-screen">
            <?= $this->include('components/sidebar'); ?>
            <div class="w-5/6 bg-white">
                <?= $this->include('components/header'); ?>
                <?= $this->renderSection('content'); ?>
            </div>
        </div>
    </div>

    <?= $this->renderSection('scripts'); ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyNFHkswUCV739qiEtbpDu6OpXJHo0AwN0cfx9pYB4-zmDInsXXurdmV1otkEJYlGVAv4&usqp=CAU">

</head>

<body>
    <div class="flex flex-col w-full h-screen bg-slate-900 justify-center items-center gap-y-10">
        <h1 class="text-9xl font-bold text-white">404</h1>

        <p class="text-white font-normal">
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
                <?= lang('Errors.sorryCannotFind') ?>
            <?php endif; ?>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
        </svg>

    </div>
</body>

</html>
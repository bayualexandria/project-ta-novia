<?= $this->extend('components/app'); ?>

<?= $this->section('content'); ?>
<div class="w-1/4 flex flex-col justify-center items-center gap-y-5">
    <h1 class="font-bold text-xl text-white">Halaman Login</h1>
    <div class="w-full rounded-md shadow-md px-6 py-10 bg-white">
        <div class="flex flex-col justify-center items-center pb-3">
            <img class="w-1/4 justify-center items-center" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyNFHkswUCV739qiEtbpDu6OpXJHo0AwN0cfx9pYB4-zmDInsXXurdmV1otkEJYlGVAv4&usqp=CAU" alt="" srcset="">
        </div>
        <form action="<?= base_url('/login'); ?>" method="POST" class="flex flex-col gap-y-3">
            <div class="flex flex-col gap-y-2">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="rounded-md border w-full border-slate-500 py-1 px-2 outline-none">

            </div>
            <div class="flex flex-col gap-y-2">
                <label for="password">Password</label>
                <div class="flex flex-row w-full relative">
                    <input type="password" name="password" id="password" class="rounded-md border w-full border-slate-500 py-1 px-2 outline-none">
                    <div id="show" class="cursor-pointer absolute top-1 right-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-slate-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col pt-5">

                <button class="rounded-full shadow-md bg-slate-900 text-white font-bold text-base py-2">Login</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    const idPassword = document.getElementById('password');
    const clickBtnShow = document.getElementById('show');

    clickBtnShow.addEventListener('click', function(e) {
        e.preventDefault()
        if (idPassword.type === "password") {
            idPassword.type = "text";
            clickBtnShow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-slate-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
</svg>
`
        } else {
            clickBtnShow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-slate-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>`
            idPassword.type = "password";

        }
    })
</script>
<?= $this->endSection(); ?>
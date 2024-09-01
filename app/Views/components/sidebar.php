<div class="w-1/6">
    <div class="flex flex-col gap-y-3">
        <div class="flex flex-col justify-center items-center pb-3 pt-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12 font-bold text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
            </svg>

        </div>

        <div class="flex flex-col w-full justify-center items-center text-white pt-8 gap-y-5 px-10">
            <!-- Dashboard -->
            <div class="flex md:flex-row md:gap-x-5 items-center w-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <p class="hidden md:block">Dashboard</p>
            </div>
            <!-- Profile -->
            <div class="flex flex-row gap-x-5 items-center w-full ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

                <p>Profile</p>
            </div>

            <!-- Logout -->
            <div class="flex flex-row gap-x-5 items-center w-full cursor-pointer" id="logout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>


                <p>Logout</p>
            </div>
        </div>

    </div>
</div>

<script>
    const btnLogout = document.getElementById('logout');

    btnLogout.addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: "Logout?",
            text: "Apakah anda ingin keluar dari sistem!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('/logout') ?>"
            }
        });
    })
</script>
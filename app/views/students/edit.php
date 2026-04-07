<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="flex flex-col min-h-screen bg-gray-100">
   <!-- Header Start -->
    <header class="bg-blue-500">
        <div class="flex items-center justify-between container mx-auto p-4">
            <a class="font-bold text-white" href="/students">Sistem Sekolah</a>
            <a class="py-2 px-4 bg-white text-blue-500 rounded-lg" href="/students/create">+ Tambah Siswa</a>
        </div>
    </header>
   <!-- Header End -->

    <!-- main start -->
        <main class="grow container mx-auto">
            <div class="mt-8 space-y-4">
                <!-- card header start -->
                 <div class="bg-white shadow p-4">
                    <h1 class="font-bold text-2xl">Edit Siswa</h1>
                    <p>Melakukan perubahan data siswa yang terdaftar</p>
                 </div>
                 <!-- card header end -->
                  
                <!-- card content start -->
                    <div class="bg-white rounded-lg shadow">
                        <form action="" class="p-4 grid  grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="font-bold block" for="name">Nama</label>
                                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="name" name="name" placeholder="Masukkan nama">     
                            </div>
                             <div class="space-y-2">
                                <label class="font-bold block" for="NIS">NIS</label>
                                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="NIS" name="NIS" placeholder="Masukkan NIS">
                            </div>
                            <div class="space-y-2">
                                <label class="font-bold block" for="class">Kelas</label>
                                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="class" name="class" placeholder="Masukkan Kelas">
                            </div>
                            <div class="space-y-2">
                                <label class="font-bold block" for="phone_number">Nomor Telepon</label>
                                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="phone_number" name="phone_number" placeholder="Masukkan Nomor Telepon">
                            </div>
                            <div class="flex justify-end gap-4 col-span-2">
                                <a href="/students" class="px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
                                <button class="px-4 py-2 rounded-lg bg-blue-500 text-white" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                <!-- card content end -->
            </div>
        </main>
     <!-- main end -->

   <!-- footer start -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <div>
            2026 - SMK Kristen Immanuel Pontianak - Sistem Sekolah
        </div>
    </footer>
   <!-- footer end -->
</body>

</html>
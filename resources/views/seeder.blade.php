
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seeder | ARTHITTAYA.SI</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-pink-50 text-pink-800">

    <!-- Header -->
    <header class="max-w-6xl mx-auto p-6 flex justify-between items-center">

        <a href="/welcome"
           class="font-black text-2xl text-pink-600">
            🎀 ARTHITTAYA.SI
        </a>

        <nav class="flex gap-4">

            <a href="/welcome"
               class="font-bold text-pink-600">
                หน้าแรก
            </a>

            <a href="/blog">
                บทความ
            </a>

            <a href="/about">
                เกี่ยวกับฉัน
            </a>

            <a href="/claim"
               class="font-bold text-fuchsia-600">
                🎁 เคลมสินค้า
            </a>

        </nav>

    </header>


    <!-- Content -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        <div class="bg-white rounded-3xl shadow-xl p-8">

            <div class="text-center mb-8">

                <div class="text-5xl mb-3">
                    📚
                </div>

                <h1 class="text-3xl font-black text-pink-600">
                    ข้อมูลบทความ
                </h1>

                <p class="text-pink-400 mt-2">
                    ข้อมูลจากตาราง blogs ใน Database
                </p>

            </div>


            <!-- Table -->

            <div class="overflow-x-auto">

                <table class="w-full border-collapse">

                    <thead>

                        <tr class="bg-gradient-to-r from-pink-100 to-purple-100">

                            <th class="p-4 text-left">
                                ID
                            </th>

                            <th class="p-4 text-left">
                                ชื่อบทความ
                            </th>

                            <th class="p-4 text-left">
                                เนื้อหา
                            </th>

                            <th class="p-4 text-left">
                                สถานะ
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($blogs as $blog)

                            <tr class="border-b border-pink-100 hover:bg-pink-50">

                                <td class="p-4 font-bold">
                                    {{ $blog->id }}
                                </td>

                                <td class="p-4 font-bold text-pink-600">
                                    {{ $blog->title }}
                                </td>

                                <td class="p-4 text-gray-600">
                                    {{ $blog->content }}
                                </td>

                                <td class="p-4">

                                    @if ($blog->status)

                                        <span class="bg-green-100 text-green-600
                                                     px-3 py-1 rounded-full text-sm">
                                            เปิดใช้งาน
                                        </span>

                                    @else

                                        <span class="bg-red-100 text-red-600
                                                     px-3 py-1 rounded-full text-sm">
                                            ปิดใช้งาน
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</body>

</html>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>เคลมสินค้า | ARTHITTAYA.SI</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background:
                radial-gradient(circle at 10% 20%, rgba(255, 182, 213, 0.35), transparent 25%),
                radial-gradient(circle at 90% 10%, rgba(216, 180, 254, 0.35), transparent 25%),
                radial-gradient(circle at 50% 90%, rgba(244, 114, 182, 0.18), transparent 30%),
                linear-gradient(135deg, #fff0f7, #ffffff, #f5edff);
            overflow-x: hidden;
        }

        /* Glass */
        .glass {
            background: rgba(255, 255, 255, 0.58);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 15px 40px rgba(236, 72, 153, 0.12);
        }

        /* Floating bows */
        .bow {
            position: fixed;
            z-index: 0;
            pointer-events: none;
            animation: float 5s ease-in-out infinite;
            opacity: 0.35;
        }

        .b1 {
            top: 18%;
            left: 5%;
            font-size: 55px;
            animation-delay: 0s;
        }

        .b2 {
            top: 55%;
            right: 6%;
            font-size: 70px;
            animation-delay: 1.5s;
        }

        .b3 {
            bottom: 8%;
            left: 12%;
            font-size: 45px;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(-5deg);
            }

            50% {
                transform: translateY(-18px) rotate(5deg);
            }
        }

        /* Card */
        .claim-card {
            position: relative;
            z-index: 2;
            border-radius: 32px;
            background: rgba(255, 255, 255, 0.68);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow:
                0 25px 70px rgba(236, 72, 153, 0.16),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
        }

        /* Input */
        .cute-input {
            width: 100%;
            border: 2px solid #fce7f3;
            background: rgba(255,255,255,0.75);
            border-radius: 18px;
            padding: 14px 18px;
            outline: none;
            color: #831843;
            transition: all .25s ease;
        }

        .cute-input::placeholder {
            color: #f9a8d4;
        }

        .cute-input:focus {
            border-color: #f472b6;
            box-shadow: 0 0 0 5px rgba(244, 114, 182, 0.12);
            background: white;
        }

        /* Upload */
        .upload-box {
            border: 2px dashed #f9a8d4;
            background: rgba(253, 242, 248, 0.75);
            border-radius: 22px;
            transition: all .3s ease;
        }

        .upload-box:hover {
            border-color: #d946ef;
            background: rgba(250, 232, 255, 0.8);
            transform: translateY(-2px);
        }

        /* Button */
        .submit-btn {
            border: none;
            border-radius: 18px;
            padding: 15px;
            width: 100%;
            color: white;
            font-weight: 800;
            font-size: 17px;
            cursor: pointer;

            background: linear-gradient(
                90deg,
                #ec4899,
                #d946ef,
                #a855f7
            );

            box-shadow:
                0 12px 25px rgba(217, 70, 239, 0.25);

            transition: all .3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow:
                0 18px 35px rgba(217, 70, 239, 0.32);
        }

        .submit-btn:active {
            transform: scale(.98);
        }

        /* Header */
        .brand {
            font-size: 25px;
            font-weight: 900;
            background: linear-gradient(
                90deg,
                #ec4899,
                #d946ef,
                #a855f7
            );
            -webkit-background-clip: text;
            color: transparent;
        }

        .nav-link {
            color: #9d174d;
            font-weight: 600;
            transition: .2s;
        }

        .nav-link:hover {
            color: #d946ef;
            transform: translateY(-1px);
        }

        .active-link {
            color: #c026d3;
            font-weight: 900;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 18px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .b1, .b2, .b3 {
                opacity: .18;
            }
        }
    </style>
</head>


<body class="min-h-screen text-pink-800">

    <!-- Floating Decorations -->
    <div class="bow b1">🎀</div>
    <div class="bow b2">🎀</div>
    <div class="bow b3">🎀</div>


    <!-- HEADER -->
    <header class="max-w-6xl mx-auto px-6 py-6
                   flex justify-between items-center relative z-10">

        <a href="/welcome" class="brand">
            🎀 ARTHITTAYA.SI
        </a>

        <nav class="glass rounded-full px-5 py-3
                    flex gap-5 items-center">

            <a href="/welcome" class="nav-link">
                หน้าแรก
            </a>

            <a href="/blog" class="nav-link">
                บทความ
            </a>

            <a href="/about" class="nav-link">
                เกี่ยวกับฉัน
            </a>

            <a href="/claim" class="active-link">
                🎁 เคลมสินค้า
            </a>

        </nav>

    </header>


    <!-- MAIN -->
    <main class="max-w-3xl mx-auto px-6 py-8 relative z-10">

        <!-- TITLE -->
        <div class="text-center mb-8">

            <div class="inline-flex items-center justify-center
                        w-24 h-24 rounded-full
                        bg-gradient-to-br from-pink-200 via-fuchsia-100 to-purple-200
                        shadow-xl shadow-pink-200/40
                        text-5xl mb-5">

                🎁

            </div>

            <p class="text-sm font-bold tracking-widest
                      text-fuchsia-500 uppercase">
                Product Claim
            </p>

            <h1 class="text-4xl md:text-5xl font-black mt-2
                       bg-gradient-to-r from-pink-500 via-fuchsia-500 to-purple-500
                       bg-clip-text text-transparent">

                เคลมสินค้า

            </h1>

            <p class="text-pink-400 mt-3">
                แจ้งปัญหาสินค้าของคุณให้เราทราบ 💕
            </p>

        </div>


        <!-- FORM CARD -->
        <div class="claim-card p-7 md:p-10">

            <form action="#" method="POST" enctype="multipart/form-data">

                @csrf


                <!-- PRODUCT NAME -->
                <div class="mb-7">

                    <label class="block font-bold text-pink-700 mb-2">
                        🛍️ ชื่อสินค้า
                    </label>

                    <input
                        type="text"
                        name="product_name"
                        class="cute-input"
                        placeholder="เช่น iPhone 15 Pro, AirPods..."
                    >

                </div>


                <!-- DESCRIPTION -->
                <div class="mb-7">

                    <label class="block font-bold text-pink-700 mb-2">
                        📝 รายละเอียดปัญหา
                    </label>

                    <textarea
                        name="description"
                        rows="6"
                        class="cute-input resize-none"
                        placeholder="กรุณาอธิบายปัญหาของสินค้า เช่น เปิดไม่ติด หน้าจอแตก ชาร์จไม่เข้า..."
                    ></textarea>

                </div>


                <!-- IMAGE -->
                <div class="mb-8">

                    <label class="block font-bold text-pink-700 mb-2">
                        📷 รูปสินค้า
                    </label>

                    <label class="upload-box block cursor-pointer p-8 text-center">

                        <div class="text-5xl mb-4">
                            📸
                        </div>

                        <p class="font-bold text-pink-600">
                            คลิกเพื่อเลือกรูปสินค้า
                        </p>

                        <p class="text-sm text-pink-300 mt-2">
                            JPG, JPEG หรือ PNG
                        </p>

                        <input
                            type="file"
                            name="product_image"
                            accept="image/png,image/jpeg"
                            class="hidden"
                        >

                    </label>

                </div>


                <!-- SUBMIT -->
                <button type="submit" class="submit-btn">

                    🎀 ส่งคำขอเคลมสินค้า

                </button>


                <!-- BACK -->
                <div class="text-center mt-6">

                    <a href="/welcome"
                       class="text-pink-400 font-semibold
                              hover:text-fuchsia-500 transition">

                        ← กลับหน้าหลัก

                    </a>

                </div>

            </form>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="text-center py-8 text-sm text-pink-300 relative z-10">

        Made with 🎀 by ARTHITTAYA.SI

    </footer>

</body>
</html>
```

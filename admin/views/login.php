<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .bg-stone-200 {
        background-color: #0000009e !important;
        box-shadow: 0 0.5rem 2rem 1rem;
    }
</style>

<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen b" style="
    background-image: url('https://chuyendoiso.laichau.gov.vn/uploads/news/2022_12/netflix-16695549643941955374520-0-0-1125-1800-crop-16695549741742062446321.jpeg');">
        <div class="bg-stone-200 p-10 rounded-lg">
            <h1 class="text-neutral-50 text-2xl text-center font-bold mb-5">Login Admin</h1>
            <form method="POST" action="?route=login">
                <div class="mb-5">
                    <label class="block font-bold mb-2 text-neutral-50" for="username">
                        Account
                    </label>
                    <input class="border-none border-gray-400 rounded-lg p-2 w-full" type="text" name="acc" id="username" required="" pwa2-uuid="EDITOR/input-739-11A-0570C-D34" pwa-fake-editor="">
                </div>
                <div class="mb-5">
                    <label class="block font-bold mb-2 text-neutral-50" for="password">
                        Password
                    </label>
                    <input class="border-none border-gray-400 rounded-lg p-2 w-full" type="password" name="pass" id="password" required="">
                </div>
                <div class="flex justify-center">
                    <button class="bg-red-600 hover:bg-red-300 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>
                </div>

            </form>
            <p id="error" class="text-red-500 mt-5"></p>
        </div>
    </div>
    <!-- Include JavaScript to handle form submission -->
    <script src="script.js"></script>
</body>

</html>
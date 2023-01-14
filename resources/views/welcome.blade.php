<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center">
        <!-- Main Y Container -->
        <div class="w-full md:w-3/4 xl:w-3/4">
            <nav class="flex items-center justify-between p-5">
                <!-- Logo -->
                <div>
                    <img src="/images/phormally_logo.png" class="w-[15rem]" alt="">
                </div>
                <!-- Buttons -->
                @guest
                    <div class="">
                        <button>Log In</button>
                        <button>Sign Up</button>
                    </div>
                @endguest

                @auth
                    <div class="">Your account</div>
                @endauth
            </nav>
        </div>
    </div>

</body>

</html>

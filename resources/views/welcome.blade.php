<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-50">
    <div class="w-full md:w-3/4 mx-auto">
        <nav class="flex items-center justify-between p-3 border-b">
            <!-- Logo -->
            <div>
                <img src="/images/phormally_logo.png" class="w-[15rem]" alt="">
            </div>
            <!-- Buttons -->
            @guest
                <div class="flex space-x-4">
                    <button
                        class="border text-xs md:text-xl bg-blue-500 text-white rounded-xl px-6 py-3 transition duration-500 select-none hover:bg-blue-600 shadow-md">
                        Log In
                    </button>
                    <button
                        class="border bg-pink-500 text-white rounded-xl px-6 py-3 transition duration-500 select-none text-xl hover:bg-pink-600 shadow-md">
                        Sign Up
                    </button>
                </div>
            @endguest

            @auth
                <div class="">Your account</div>
            @endauth
        </nav>

        <section class="p-4">
            <h2 class="mt-10 text-slate-400 text-center text-3xl font-extralight">You have a phowerful ally (oh gosh we
                love
                puns)</h2>
            <h1 class="mt-5 text-4xl text-center">Make your frontend forms as beatiful as it can be</h1>
            <h2 class="mt-5 text-2xl text-center font-light">And get your user contacts, opinions and feedback without
                fuss and <span class="font-semibold">any backend.</span></h2>
            <h2 class="mt-2 text-2xl text-center font-light">Get it in your email, browse it online or through API.
                Leave heavy-lifting to <span class="text-blue-500 font-semibold">Phormally</span>.</h2>
        </section>
    </div>

    <section class="mt-10" style="background-image: url('/images/easyaspie.jpg')">
        <img src="/images/phormally_clear.png" class="md:w-full xl:w-1/2" alt="">
    </section>
    <div class="text-slate-500 font-thin m-2">Image
        by chandlervid85 on Freepik
    </div>

    <section>
        <div class="flex flex-col md:flex-row md:space-x-10 md:w-3/4 lg:w-1/2 mx-auto">
            <img class="max-w-[256px] mx-auto"src="/images/tasks_in_notebook.png" alt="">
            <div class="p-6">
                <h1 class="text-3xl">You've created a beatiful website</h1>
                <p class="text-lg font-light mt-4">It can be a landing page, your online "business card" or simple
                    blog. Just three tasks left in your notebook:</p>
                <ul class="list-disc ml-4 mt-4 text-lg">
                    <li>Integrate form for your website visitors feedback</li>
                    <li>Deploy this beatiful thing to Netlify or Vercel</li>
                    <li>Celebrate it with a bottle of Crystal</li>
                </ul>
                </p>
            </div>
        </div>
    </section>



    Illustration by <a href="https://icons8.com/illustrations/author/lZpGtGw5182N">Elisabet Guba</a> from <a
        href="https://icons8.com/illustrations">Ouch!</a>

    Illustration by <a href="https://icons8.com/illustrations/author/iAdLsFJOKDrk">Tanya Krasutska</a> from <a
        href="https://icons8.com/illustrations">Ouch!</a>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <title>Phormally</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-50">
    <div class="w-full md:w-3/4 mx-auto">
        <nav class="flex items-center justify-between p-3 border-b">
            <!-- Logo -->
            <div>
                <img src="{{ asset('images/phormally_logo.png') }}" class="w-[15rem]" alt="">
            </div>
            <!-- Buttons -->
            @guest
                <div class="flex space-x-4">
                    <a href="/login">
                        <button
                            class="border text-xs md:text-xl bg-blue-500 text-white rounded-xl px-6 py-3 transition duration-500 select-none hover:bg-blue-600 shadow-md">
                            Log In
                        </button>
                    </a>
                    <a href="/signup">
                        <button
                            class="border bg-pink-500 text-white rounded-xl px-6 py-3 transition duration-500 select-none text-xl hover:bg-pink-600 shadow-md">
                            Sign Up
                        </button>
                    </a>
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

    <section class="mt-10" style="background-image: url('{{ asset('images/easyaspie.jpg')}}')">
        <img src="{{ asset('images/phormally_clear.png') }}" class="md:w-full xl:w-1/2" alt="">
    </section>
    <div class="text-slate-500 font-thin m-2">Image
        by chandlervid85 on Freepik
    </div>

    <section>
        <div class="flex flex-col md:flex-row md:space-x-10 md:w-3/4 lg:w-1/2 mx-auto">
            <div class="">
                <img class="max-w-[256px] mx-auto" src="{{asset('images/tasks_in_notebook.png')}}" alt="">
            </div>
            <div class="p-6">
                <span class="text-3xl text-white bg-pink-600">You've created a beatiful website</span>
                <p class="text-lg font-light mt-4">HTML/CSS, not much but it's honest work. It can be a landing page,
                    your online "business card" or simple
                    blog. Just three tasks left in your notebook:</p>
                <ul class="list-disc ml-4 mt-4 text-lg">
                    <li class="text-pink-600 italic">Integrate form for your website visitors feedback - ASAP!</li>
                    <li>Deploy this beatiful thing to Netlify or Vercel</li>
                    <li>Celebrate it with a bottle of Crystal</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-6">
        <div class="flex flex-col md:flex-row md:space-x-10 md:w-3/4 lg:w-1/2 mx-auto mt-10 translate-x-6">
            <div class="p-6">
                <span class="text-3xl text-white bg-blue-600">I need a backend? Not cool!</span>
                <p class="text-lg font-light mt-4">It's a shame, but to process user input even in the simplest form
                    ever - you need some server code. So, what you gonna do next?</p>
                <ul class="list-disc ml-4 mt-4 text-lg">
                    <li>Call your fellow programmer who knows some Java or C#</li>
                    <li>Learn NodeJS or Python in a hurry</li>
                    <li>Try to put your beautiful design in a WordPress with sendmail plugins</li>
                </ul>
            </div>
            <div>
                <img class="transform scale-x-flip max-w-[256px] mx-auto" src="{{ asset('images/tech_frustration.png' )}}"
                    alt="">
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col md:flex-row md:space-x-10 md:w-3/4 lg:w-1/2 mx-auto mt-10">
            <div class="">
                <img class="max-w-[256px] mx-auto" src="{{ asset('images/getmail.png') }}" alt="">
            </div>

            <div class="p-6">
                <span class="text-3xl text-black">Meet the Phormally</span>
                <p class="text-slate-600 text-sm font-extralight"> "- Hello Phormally!"</p>
                <p class="text-lg font-light mt-4">All you need to do is to put one line of code in your form. Phormally
                    will take care of the rest:</p>
                <ul class="list-disc ml-4 mt-4 text-lg">
                    <li>Send you all form submissions by the mail</li>
                    <li>Save it online for easy browsing</li>
                    <li>Export data in CSV format</li>
                    <li class="text-pink-600 italic">More features in the future!</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mt-10 flex flex-col">
        <div class="bg-white rounded-xl shadow-2xl mx-auto p-20">
            <h1 class="mt-5 text-4xl text-center">It's fully free. What are you waiting for?</h1>
            <div class="flex mt-6 justify-center space-x-6">
                <div>
                    <img src="{{ asset('images/phormally_logo.png') }}" class="w-[15rem]" alt="">
                </div>
                <div>
                    <button
                        class="border text-xs md:text-xl bg-pink-500 text-white rounded-xl px-6 py-4 transition duration-500 select-none hover:bg-pink-600 shadow-md mt-[0.4rem]">
                        Start using
                    </button>
                </div>
            </div>
        </div>
    </section>


    <footer class="mt-40  bg-slate-300 h-40 p-10">
        <div class="">
            Illustration by <a href="https://icons8.com/illustrations/author/lZpGtGw5182N">Elisabet Guba</a> from <a
                href="https://icons8.com/illustrations">Ouch!</a>
        </div>
        <div>
            Illustration by <a href="https://icons8.com/illustrations/author/iAdLsFJOKDrk">Tanya Krasutska</a> from <a
                href="https://icons8.com/illustrations">Ouch!</a>
        </div>
        <div class="mt-6">
            Copyright © 2023. <a class="font-bold" href="https://github.com/drmnk/phormally">Github: drmnk/phormally</a>
        </div>



    </footer>

</body>

</html>

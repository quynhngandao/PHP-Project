<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        {{-- Alert from Alpinejs --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>PHPet | Find Your Best Friend </title>
    </head>
    <body class="mb-48">
        {{-- NAV --}}
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
            {{-- target="_blank" rel="noopener" --}}
                ><img class="h-24" src="{{asset('images/phpet-logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 ml-6 text-lg">
                <li>
                    <a href="register.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="login.html" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

{{-- VIEWS OUTPUT  --}}
<main>
{{-- index --}}
{{$slot}}
</main>
 {{-- FOOTER --}}
 <footer
 class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-80 md:justify-center"
>
 <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

 {{-- Go to Create Route --}}
 <a href="/listings/create"
     class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
     >Create Listing</a>
</footer>
{{-- FLASH MESSAGE --}}
<x-flash-message />
</body>
</html>

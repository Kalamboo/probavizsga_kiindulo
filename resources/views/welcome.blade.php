<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="./css/kezdooldal.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./js/ajax.js"></script>
    <script src="./js/dogaklistazasa.js"></script>
    <script src="./js/script.js"></script>
</head>

<body class="antialiased">


    <main>

        <header>
            <h1 class="kozepre">Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h1>
        </header>
        <section class="bejelentkezes kozepre">
            <h2>A szakdolgozatokat bejelentkezés után tudja megnézni!</h2>
            @if (Route::has('login'))
            <div class=" px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Szakdolgozatok</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                @endif
                @endauth
            </div>

            @endif
        </section>
        <article>
            <div id="szakdogaSablon">
                <table>
                    <tr class="szakdoga">
                        <td class="szakdogCim"></td>
                        <td class="keszNev"></td>
                        <td class="gitLink"></td>
                        <td class="oldLink"></td>
                        <td class="modositas"><button>MÓDOSÍT</button></td>
                        <td class="torles"><button>TÖRÖL</button></td>
                    </tr>
                </table>
            </div>
            <table class="szakdogaAlap">
                <thead>
                    <tr>
                        <th>Szakdolgozat címe</th>
                        <th>Készítők neve</th>
                        <th>GitHub link</th>
                        <th>Szakdolgozat elérhetősége</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="szakdogakLista">

                </tbody>
            </table>
            <div>
                <form action="/action_page.php">
                    <label for="none" class="eltun">id:</label><br>
                    <input type="text" id="none" name="none" class="eltun"><br>
                    <label for="szakdoga_nev">First name:</label><br>
                    <input type="text" id="szakdoga_nev" name="szakdoga_nev"><br>
                    <label for="githublink">Last name:</label><br>
                    <input type="text" id="githublink" name="githublink"><br><br>
                    <label for="oldallink">Last name:</label><br>
                    <input type="text" id="oldallink" name="oldallink"><br><br>
                    <label for="tagokneve">Last name:</label><br>
                    <input type="text" id="tagokneve" name="tagokneve"><br><br>
                    <div>
                        <input type="submit" value="MÓDOSÍT" id="ajaxModosit">
                    </div>
                </form> 
            </div>
        </article>
        <footer class="kozepre">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </main>
    </div>
    </div>
</body>

</html>

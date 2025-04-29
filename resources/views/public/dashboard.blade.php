<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar-home">
        <h3 style="color: black;">Library</h3>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('book') }}">Book</a>
            </li>
            <li>
                <a href="{{ route('activity') }}">Activity</a>
            </li>
            <li>
                <a href="{{ route('setting') }}">Setting</a>
            </li>
            <div class="search-box">
                <input type="search" placeholder="search">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg>
                </button>
            </div>
            <li>
                <a href="{{ route('register')}}">
                    <button class="sign-in">Sign Up</button>
                </a>
            </li>
        </ul>
    </nav>

    <section class="section">

    </section>

    <section class="section-2">
        <div class="about d-flex">
            <img class="img rounded-4" src="img/𝐬𝐧𝐨𝐨𝐩𝐲 ♡︎.jpeg" alt="">
            <div class="description px-5">
                <h1 class="pb-3">
                    ABOUT US
                </h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis reiciendis molestiae ab harum nisi pariatur tenetur error cum temporibus numquam. Voluptates perferendis molestias optio obcaecati assumenda ex, provident sint illum?.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore inventore nesciunt ducimus aperiam quasi voluptates sit officiis id esse placeat libero et doloremque, rem fuga eaque excepturi, exercitationem soluta? Temporibus.
                </p>
                <a href="#">about us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg></a>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="book-synopsis">
            <h3>Daily selection ✨</h3>
            <div class="synopsis d-flex">
                <img class="rounded-4" src="img/animal farm.jpeg" alt="">
                <div class="description-book px-5">
                    <h3 class="pb-3">
                        animal farm
                    </h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis reiciendis molestiae ab harum nisi pariatur tenetur error cum temporibus numquam. Voluptates perferendis molestias optio obcaecati assumenda ex, provident sint illum?.
                    </p>
                    <a href="#">see more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg></a>
                </div>
            </div>
            <div class="synopsis d-flex">
                <div class="description-book px-5">
                    <h3 class="pb-3">
                        a man with one of those face
                    </h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis reiciendis molestiae ab harum nisi pariatur tenetur error cum temporibus numquam. Voluptates perferendis molestias optio obcaecati assumenda ex, provident sint illum?.
                    </p>
                    <a href="#">see more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg></a>
                </div>
                <img class="rounded-4" src="img/a man with one of those face.jpeg" alt="">
            </div>
        </div>
    </section>

    <div class="section-4">
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

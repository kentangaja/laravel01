<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap</title>
    <link rel="stylesheet" href="activity.css">
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

    <section>
        <div class="container">
            <div class="tabel-container">
                <table>
                    <tr>
                        <th class="title">Username</th>
                        <th class="title">Judul Buku</th>
                        <th class="title-1">Status</th>
                    </tr>
                    <tr>
                        <td class="inside"></td>
                        <td class="inside"></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="side-content">
                <div class="deadline">
                    <h5 class="sc-title">Deadline Return</h5>
                    <p></p>
                </div>
                <div class="note">
                    <h5 class="sc-title">Note</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quidem fugit cum doloremque reprehenderit eos minima labore excepturi fuga blanditiis explicabo nihil temporibus ipsa error quasi magni laborum velit molestias?</p>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

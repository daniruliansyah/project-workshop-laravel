<ul class="navbar">
            <li><a href="/">HOME</a></li>
            <li><a href="pekerja">PEKERJA</a></li>
            @guest
            <li><a href="login">LOGIN</a></li>
            <li><a href="register">REGISTER</a></li>
            @endguest
            <li><a href="art">ART</a></li>
            <li><a href="babysitter">BABY SITTER</a></li>
            @auth
            <li><a href="logout">LOGOUT</a></li>
            @endauth
        </ul>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A</title>
    <link type="text/css" rel="stylesheet" href="CSS/style.css">
    <link type="text/css" rel="stylesheet" href="CSS/qna.css">
    <link rel="icon" href="./img/logo.jpg">
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/qna.js'></script>

</head>

<body>
    <?php
    if (isset($_REQUEST['ok'])) {
        $xml = new DOMDocument("1.0", "UTF-8");
        $xml->load("xml/QnA.xml");

        $rootTag = $xml->getElementsByTagName("TableQuestion")->item(0);

        $dataTag = $xml->createElement("form");

        $aTag = $xml->createElement("name", $_REQUEST["name"]);
        $bTag = $xml->createElement("question", $_REQUEST["question"]);

        $ansTag = $xml->createElement("Answer", "-");
        $statusTag = $xml->createElement("status", "NotAnswer");

        $dataTag->appendChild($aTag);
        $dataTag->appendChild($bTag);
        $dataTag->appendChild($ansTag);
        $dataTag->appendChild($statTag);
        $rootTag->appendChild($dataTag);

        $xml->save("xml/QnA.xml");
    }
    ?>

    <!-- HEADER -->
    <div class="container-nav" id="totop">
        <div class="navbar" id="nav-bar">
            <a href="index.html" class="navbar-brand">Nolan</a>
            <ul>
                <li class="nav-item">
                    <a href="index.html" class="nav_link">home</a>
                </li>
                <div class="dropdown">
                    <li class="nav-item">
                        <a href="filmography.html">filmography</a>
                        <div class="nav_link dropdown-content">
                            <a href="movie/dunkirk.html">Dunkirk</a>
                            <a href="movie/inception.html">Inception</a>
                            <a href="movie/tenet.html">Tenet</a>
                            <a href="movie/batman_begins.html">Batman Begins</a>
                            <a href="movie/the_dark_knight.html">The Dark Knight</a>
                            <a href="movie/the_dark_knight_rises.html">The Dark Knight Rises</a>
                            <a href="movie/following.html">Following</a>
                            <a href="movie/insomnia.html">Insomnia</a>
                            <a href="movie/interstellar.html">Interstellar</a>
                            <a href="movie/memento.html">Memento</a>
                            <a href="movie/the_prestige.html">The Prestige</a>
                            <a href="movie/quay.html">Quay</a>
                            <a href="movie/doodlebug.html">Doodlebug</a>
                            <a href="producer/batman_v_superman.html">Batman V Superman</a>
                            <a href="producer/justice_league.html">Justice League</a>
                            <a href="producer/man_of_steel.html">Man Of Steel</a>
                            <a href="producer/transcendence.html">Transcendence</a>
                        </div>
                    </li>
                </div>

                <li class="nav-item">
                    <a href="award.html">award</a>
                </li>
                <li class="nav-item">
                    <a href="QnA.html">QnA</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="section_qna">

        <div class="text_qna">
            <h1> Q&A </h1>
            <h4>ส่งคำถามของคุณ เราจะตอบคำถามทุกสัปดาห์และอัปเดตที่นี่</h4>

        </div>

        <form action="qna.php" method="POST">
            <div class="form_qna">
                <h2>Nickname</h2>
                <input class="name" type="text" placeholder="ชื่อเล่น" name="name" required>
                <br>
                <h2>Question</h2>
                <textarea class="question" name="question" placeholder="คำถาม" required></textarea>
                <input type="submit" name="ok" class="subqna" value="SEND"></input>
            </div>
        </form>

        <div id="Form_Q"></div>
        <a href="#totop" class="to-top" aria-label="totop">
            <i class="fas fa-long-arrow-alt-up"></i>
        </a>
        <script src="JS/main.js"></script>

    </section>


    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>about</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                        quidem dolorum nulla saepe voluptates incidunt nesciunt assumenda
                        nihil alias tempora possimus, omnis ducimus nobis cumque debitis
                        placeat nemo consequuntur quae!
                    </p>
                </div>
                <div class="footer-col">
                    <h4>footer menu</h4>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">filmography</a></li>
                        <li><a href="#">award</a></li>
                        <li><a href="#">QnA</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>social links</h4>
                    <div class="social-links">
                        <a href="#" aria-label="fb"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="tw"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="ig"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
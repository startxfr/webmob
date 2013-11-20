<?php
if(!preg_match('/iUI|jqm/', $_SERVER['REQUEST_URI'])) {
?>
        <header class="wrapper">
            <a href="index.php" id="header">
                <img src="/img/logo-72.png" class="logo" alt="logo myBd"/>
                <hgroup class="titre">
                    <h1>MyBd.fr</h1>
                    <h2>Plein d'infos sur les BD</h2>
                </hgroup>
            </a>
        </header>
        <section class="wrapper">
            <nav id="menu">
                <ul>
                    <li<?=preg_match('/search/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                        <a href="search.php">Search</a>
                    </li>
                    <li<?=preg_match('/last/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                        <a href="last.php">Last</a>
                    </li>
                    <li<?=preg_match('/random/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                        <a href="random.php">Random</a>
                    </li>
                    <li<?=preg_match('/legal/', $_SERVER['REQUEST_URI'])?' class="current"':''?>>
                        <a href="legal.php">Legal</a>
                    </li>
                </ul>
            </nav>
        </section>
<?php
}
?>
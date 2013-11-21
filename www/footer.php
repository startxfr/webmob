<?php
if(!preg_match('/iUI/', $_SERVER['REQUEST_URI'])) {
    $bJqm = preg_match('/jqm/', $_SERVER['REQUEST_URI']);
?>
        <footer<?=$bJqm ? ' data-role="footer" data-id="footer" data-position="fixed"' : ''?>>
            <nav<?=$bJqm ? ' data-role="navbar"' : ' id="footer"'?>>
                <ul>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>search<?=$bJqm ? '' : '.php'?>">Search</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>last<?=$bJqm ? '' : '.php'?>">Last</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>random<?=$bJqm ? '' : '.php'?>">Random</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>legal<?=$bJqm ? '' : '.php'?>">Legal</a>
                    </li>
                </ul>
            </nav>
        </footer>
<?php
}
?>
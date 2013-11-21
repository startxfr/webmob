<?php
if(!preg_match('/iUI/', $_SERVER['REQUEST_URI'])) {
    $bJqm = preg_match('/jqm/', $_SERVER['REQUEST_URI']);
?>
        <footer<?=$bJqm ? ' data-role="footer" data-id="footer" data-position="fixed"' : ''?>>
            <nav<?=$bJqm ? ' data-role="navbar"' : ' id="footer"'?>>
                <ul>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>search<?=$bJqm ? '' : '.php'?>"<?=$bJqm ? '  data-icon="search" data-iconpos="left" data-role="button"' : ''?>>Search</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>last<?=$bJqm ? '' : '.php'?>"<?=$bJqm ? '  data-icon="star" data-iconpos="left" data-role="button"' : ''?>>Last</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>random<?=$bJqm ? '' : '.php'?>"<?=$bJqm ? '  data-icon="grid" data-iconpos="left" data-role="button"' : ''?>>Random</a>
                    </li>
                    <li>
                        <a href="<?=$bJqm ? '#' : ''?>legal<?=$bJqm ? '' : '.php'?>"<?=$bJqm ? '  data-icon="info" data-iconpos="left" data-role="button"' : ''?>>Legal</a>
                    </li>
                </ul>
            </nav>
        </footer>
<?php
}
?>
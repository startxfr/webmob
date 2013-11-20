<?php
if(!preg_match('/iUI/', $_SERVER['REQUEST_URI'])) {
    $bJqm = preg_match('/jqm/', $_SERVER['REQUEST_URI']);
?>
        <nav id="footer"<?= $bJqm ? ' data-position="fixed"' : ''?>>
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
<?php
}
?>
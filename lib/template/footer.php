<div id="description">
	<h1>
		<a href="./">
			Was ist HeFT?
		</a>
	</h1>
	<p>HeFT (Hannover File Transfer) ist ein Online-Dienst, der Ihnen hilft, Dateien zum Download schnell und einfach bereit zu stellen. Es ist keine Registrierung erforderlich. </p>
	<p>So geht es:</p>
	<ol>
		<li>Datei auswählen</li>
		<li>Einstellungen und ggf. Passwort definieren</li>
		<li>Link zur Datei verschicken</li>
	</ol>
	<p>Hier geht's zu den <a href="nutzung.php">Nutzungsbedingungen.</a></p>
</div>
<div id="copyright">
    <p>
        <!-- Project links -->
        <?php
          echo t('MADE_WITH') .
            ' <a href="https://gitlab.com/mojo42/Jirafeau">' . t('JI_PROJECT') . '</a>' .
            ' (<a href="https://www.gnu.org/licenses/agpl.html"><abbr title="GNU Affero General Public License v3">AGPL-3.0</abbr></a>)';
        ?>
        <!-- Installation dependend links -->
        <?php
        if (false === empty($cfg['installation_done'])) {
            echo ' <span>|</span> ';
            echo '<a href="tos.php">' . t('TOS') . '</a>';
        }
        ?>
    </p>
</div>
</div>
<div id="jyraphe">
</div>
</body>
</html>

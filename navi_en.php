<div id="left" style="white-space: nowrap;">
    <p>
<?php
$msie = '/msie\s(5\.[5-9]|[6]\.[0-9]*).*(win)/i';
if (! isset($_SERVER['HTTP_USER_AGENT']) || ! preg_match($msie, $_SERVER['HTTP_USER_AGENT']) || preg_match('/opera/i', $_SERVER['HTTP_USER_AGENT'])) {
    ?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img
            src="images/logo24.png" alt="Magellan-Logo" border="0" /></a>
<?php } else { ?>
          <a href="." onfocus="if(this.blur()){this.blur();}"><img
            src="images/logo8.png" alt="Magellan-Logo" border="0" /></a>
<?php } ?>
        </p>
    <p style="text-align: left">
<?php if($language == "en") { ?>
          [EN]
          <a href="index_de.php">[DE]</a>
<?php } else { ?>
          <a href="index_en.php">[EN]</a>
          [DE]
<?php } ?>
        </p>
    <p>
        <a href="index_en.php">Home</a>
    </p>
    <p>
        <a href="download_en.php">Download</a><br /> <a class="sublink"
            href="download_en.php#magellan2">Magellan 2.x</a>&nbsp;&middot;&nbsp;&nbsp;<br />
        <a class="sublink" href="download_en.php#magellan1">Magellan 1.x</a>&nbsp;&middot;&nbsp;&nbsp;<br />
    </p>
    <p>
        <a href="feedback_en.php">Feedback &amp; Support</a>
    </p>
    <p>
        <a href="faq_en.php">F.A.Q.</a>
    </p>
    <p>
        <a href="help_en.php">Documentation</a>
    </p>
    <p>
        <a href="plugins_en.php">Plugins</a><br /> <a class="sublink"
            href="plugins_alliance_en.php">Alliance Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br />
        <a class="sublink" href="plugins_extcmds_en.php">Extended
            Commands</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_fow_update_en.php">FoW-Update
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_lighthouseicons_en.php">Lighthouse
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_mapcleaner_en.php">MapCleaner
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_mapedit_en.php">MapEdit Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br />
        <a class="sublink" href="plugins_mapicons_en.php">MapIcons
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_memorywatch_en.php">MemoryWatch
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_statistics_en.php">Statistics
            Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br /> <a
            class="sublink" href="plugins_teacher_en.php">Teacher Plugin</a>&nbsp;&middot;&nbsp;&nbsp;<br />
    </p>
    <p>
        <a href="tools_en.php">Tools</a><br /> <a class="sublink"
            href="tools_consolemerger_en.php">Console Merger</a>&nbsp;&middot;&nbsp;&nbsp;<br />
    </p>
    <p>
        <a href="nightly-build/api/">JavaDoc</a>
    </p>
    <p>
        <a class="externalLink" href="https://magellan2.github.io/bugs/">Report a
            bug</a>
    </p>
    <p>
        <a class="externalLink" href="https://github.com/magellan2/magellan2">Code
            at Github</a>
    </p>
    <p>
        <a class="externalLink"
            href="https://sourceforge.net/projects/magellan-client">SourceForge</a>
    </p>
</div>

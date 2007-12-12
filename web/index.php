<?php

include_once( "inc/webpage.php" );


header("Vary: Accept");
#if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
#else
#    header("Content-Type: text/html; charset=utf-8");

$downloads = array(
	array(
	"http://downloads.sourceforge.net/bombermaaan/Bombermaaan_1.02_Setup.exe?modtime=1197055380&big_mirror=0",
	"Installer for Win32 - Version 1.02",
	"4a708baed1d671be6ff0ba14bcd851e2", // MD5
	"d57361ee3c83f4cd03bee0d881f14a02b6a953ad"  // SHA1
	),
	array(
	"http://downloads.sourceforge.net/bombermaaan/Bombermaaan_1.02.zip?modtime=1197405778&big_mirror=0",
	"Zip file for Win32 - Version 1.02",
	),
	array(
	"http://downloads.sourceforge.net/bombermaaan/Bombermaaan_102_src.zip?modtime=1083110400&big_mirror=0",
	"Source files - Version 1.02",
	),
);


?>
<?php echo '<?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>
<?php echo '<!' . 'DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">' . "\n"; ?>

<?php

$webpage = new WebPage();
$webpage->head();

?>

<h1>Bombermaaan game project on sourceforge.net</h1>

<div id="content">

<div style="float: left; width: 40%;">

<p>
You may want to view ...
</p>

<ul>
<li>the <a href="http://fury94.free.fr/">current project page</a></li>
<li>the <a href="https://sourceforge.net/projects/bombermaaan/">project page on sourceforge.net</a></li>
<li>the <a href="https://sourceforge.net/project/showfiles.php?group_id=81520">download section on sourceforge.net</a></li>
<li>the <a href="http://bombermaaan.svn.sourceforge.net/viewvc/bombermaaan/">subversion repository</a> on sourceforge.net</li>
<li>the <a href="http://bombermaaan.svn.sourceforge.net/viewvc/*checkout*/bombermaaan/trunk/docs/Readme.html?revision=5&amp;pathrev=5">README file</a> (very latest version out of the subversion repository)</li>
</ul>

<p>
Download the files from here:
</p>

<ul>
<?php

foreach ( $downloads as $item ) {

	$url = $item[ 0 ];
	$text = $item[ 1 ];
	$md5 = $item[ 2 ];
	$sha1 = $item[ 3 ];

?>	
<li>
<a href="<? echo htmlentities( $url ); ?>"><?php echo htmlentities( $text ); ?></a>
<?php if ( ! empty( $md5 ) ) { echo "<br /><small>MD5:&nbsp;$md5</small>"; } ?>
<?php if ( ! empty( $sha1 ) ) { echo "<br /><small>SHA1:&nbsp;$sha1</small>"; } ?>
</li>

<?

}  // foreach ( ... )

?>
</ul>

<p>
The installer was tested on Win XP with ServicePack 2 and Win Vista. Please note, if you install Bombermaaan on Vista to the default program files directory, the configuration and log file cannot be created. However, you can play the game. But the settings weren't remembered when you start the game the next time. To avoid this, you can install Bombermaaan to a different directory, for example &quot;C:\Bombermaaan&quot;.<br />
You need administrative rights for installing Bombermaaan. This is considered to be changed in the future.
<br />
The uninstaller was tested on Win XP with ServicePack 2 and Win Vista.
</p>

<p>
If you don't want to use the installer, you can also download the Zip file and unzip the folder somewhere and run Bombermaaan.exe from there. Please ensure to unzip the whole directory, not only Bombermaaan.exe.
</p>

</div>

<div>

<p>

<img style="padding-left: 2em;" src="screenshots/screen1.png" alt="Screenshot #1" />
<img style="padding-left: 2em;" src="screenshots/screen7.png" alt="Screenshot #2" />
<img style="padding-left: 2em;" src="screenshots/screen8.png" alt="Screenshot #3" />

</p>

</div>

<div style="clear: both;">

<h2 style="margin-top: 5em;">Todo list</h2>

<table>

<tr>
<th>Item</th>
<th>Progress</th>
<th>Status</th>
<th>Description</th>
<th>Added</th>
<th>Last changed</th>
</tr>

<tr>
<td>Blocks where bombs start moving/change direction</td>
<td>0 %</td>
<td>Planned</td>
<td>There are certain blocks in the arena. When a bomber puts a bomb there or when a moving bomb arrives there, the bomb begins moving or changes the direction.</td>
<td>2007-12-10</td>
<td>2007-12-10</td>
</tr>

<tr>
<td>Skins</td>
<td>0 %</td>
<td>Planned</td>
<td>Skins with different images.</td>
<td>2007-12-10</td>
<td>2007-12-10</td>
</tr>

<tr>
<td>More than two keyboard inputs</td>
<td>0 %</td>
<td>Planned</td>
<td>Since you can plug many USB keyboards, it could be possible to have five human players in the same game.</td>
<td>2007-12-10</td>
<td>2007-12-10</td>
</tr>

<tr>
<td>Team mode</td>
<td>0 %</td>
<td>Planned</td>
<td>Players can be assigned to teams. The match is finished if there is only one team alive. In addition, there could be an option if items are shared in a team.</td>
<td>2007-12-11</td>
<td>2007-12-11</td>
</tr>

</table>

</div>

</div>

<?php

$webpage->tail();

?>

<?php

include_once( "inc/webpage.php" );


$webpage = new WebPage();
$webpage->head();

?>

<h1>Bombermaaan Changelog</h1>

<div id="content">

<?php

function _L( $version, $released, $list ) {

    echo "<h2>";
    if ( !empty($version) & !empty($released) ) {
        echo "Version $version ($released)";
    } else {
        echo "Next version";
    }
    echo "</h2>";
    
    echo "<ul>";
    foreach ( split( "\n", $list ) as $element ) {
        if ( !empty( $element ) ) echo "<li>" . htmlentities( $element ) . "</li>";
    }
    echo "</ul>";
    
}

?>

You are informed of what was changed, fixed, added, and removed in each version.

<?php

_L( "", "",
"New feature: Almost unlimited number of levels. You can now add any number of levels. Plus, you don't have to call it L1 or L6 or whatever. Any filename like a.txt or coolbomberlevel.txt will be ok.
New feature: Enhanced level file format. You can specify the amount of items waiting in walls (tracker item #1847047) and the initial bomber skills for every match (tracker item #1847048).
New feature: Animated coin for the winner of a match.
New feature: Larger window/larger sprites available.
New feature: Invisibility as contamination (tracker item #1864528).
Bug fix: Music starts in pause when losing focus (tracker item #1856135).
Bug fix: Victory sound doesn't end after Escape (#1851347).
Bug fix: F12 ends program (#1848194).
Bug fix: Bomb doesn't explode during lift when bomber dies (#1861692).
" );

_L( "1.02", "December 9, 2003",
"Rommel Santor made an update of his cool level editor!
" );

_L( "1.01", "December 6, 2002",
"Added a very easy to use, free level editor made by Rommel Santor.
" );

_L( "1.0", "November 3, 2002",
"Fixed a bug when a bomber holding a bomb is killed.
" );

_L( "0.999", "October 22, 2002",
"Fixed bug where two items could be created on the same block when two or more bombers were killed at the same time.
The program now doesn't crash if you ask for a fullscreen display mode (with F1, F2 or F3) that is unsupported on your video card. It doesn't do anything instead.
Made a DEMO mode! Well, it's not useful, but hey, I find it cool :) You can launch it from the title screen.
Added an icon to the window and to the executable file. That's usually the first thing people do when creating a game, but so far I didn't know how to do it :) Ooops, almost forgot. Thanks to Florian Freiwald for drawing this nice bomber icon.
Now checks if Bomberman.dat exists at startup.
Reduced time to wait between menus each time you validate.
Fixed a potential bug in AI.
Changed the lightness/contrast of one background tile in the winner screen.
You can now quickly exit the game by pressing Ctrl+F12.
And the biggest change... the kick/punch/throw mania is now complete! Punch bombs! Lift bombs! Throw bombs! Make them fly! Make them bounce on walls, on other bombs, on your enemies!
" );

_L( "0.93", "April 29, 2002",
"Fixed level files bug on first execution of the game (when the CFG file doesn't exist yet).
Fixed level 6 file (L6.TXT)
Now, exiting a match using the little dialog box brings you to the menu screen and not the title screen.
Decreased the number of kick items present in the arena.
Added one level (L7.TXT) made by Christian Salzmann.
Added a music to the title and options screens.
Fixed music bug when exiting the menu screen using Escape then choosing Yes.
Put the level text files in a separate directory.
Added a new sub-menu to the menu screen allowing you to choose what level to use, with a preview of the level.
When there is an infinite time for the battle, the board's clock now doesn't animate, and the time that is displayed is \"-:--\".
" );

_L( "0.9", "April 24, 2002",
"Added clouds to the title screen.
The bombers in the menu screen now blink their eyes.
Added scrolling tiled backgrounds to the controls screen and the winner screens.
Three different tiles for any scrolling background.
If a bomber is sick, the bombs he drops now animate faster if they'll blow very soon, or slower if they'll blow in a long time.
The pause and the hurry up messages in the match screen now appear and disappear by scrolling.
Fixed tiny bug when choosing only computer players in a match (the input menu is now skipped).
Fixed bug when switching from menu screen to match screen.
Now possible to make customized level layouts by editing simple text files (L1.txt, L2.txt, ...)
Now possible to set an infinite time for a match, which means a battle won't end before there is only one alive bomber left.
Now possible to set the \"hurry up\" time, that is to say when the arena will start closing.
Now possible to set no arena closing. 
" );

_L( "0.85", "March 6, 2002",
"The options screen will not be accessible using a floating menu, but by pressing a key. Therefore I modified the float menu box.
The choices that were made by the players in the game are now stored in an external configuration file.
Added the Title screen.
Added the Controls screen. It allows the user to customize the controls.
" );

_L( "0.8", "November 22, 2001",
"Fixed a nasty bomb explosion bug that was here from the beginning! When a bomb exploded, two explosions were created.
When an explosion hits a skull item, the item now starts flying away and lands somewhere else.
When a sick bomber picks up an item, a flying skull item is now released and will land somewhere.
The kick item comes back! Computer players now sometimes use it to get out of trouble.
" );

_L( "0.77", "November 16, 2001",
"Added the possibility to pause the match by pressing P on the keyboard. Message with sound.
When you hit Escape during a match, a menu box now appears and allows you exit the match and go back to the menu. When you hit Escape in the menu, the program exits.
The program now also works without a sound card.
Added the horizontal and the vertical arena closing. (The first was the spiral arena closing).
A random arena closing (among horizontal, vertical and spiral) is chosen for each battle.
Added fumes animations (with sound) for each item returned by a bomber who just died.
The sound is now paused when the window loses the focus.
You can now have the menu box (by hitting escape) anywhere in the game.
Fixed sickness contamination bug: when a bomber was sick in a group of 2+ bombers which moved on the same blocks, the sick bomber contaminated another one, who contaminated another one, etc. This was also very noisy.
Changed bomber head sprites on the board: a dead bomber's head is now represented by a special sprite.
" );

_L( "0.75", "November 5, 2001",
"Added some SOUND (finally!) using the FMOD library. Wahoooo the game is much much more fun to play now!
Sound files and image files are now packed in a unique DLL.
Fixed a nasty sound bug in the menu (damn, I didn't know VC++ could \"forget\" to warn me when I'm using an invalid object!) : I couldn't play any sound except the music!!
Decreased the time computer players wait before starting playing.
Fixed a little and invisible bug in the menu that could have been tricky.
Added the bell sound (ding ding ding ding ding!) when there is a winner.
The match and menu song now start after the first black screen has ended and stop before the last black screen has started.
When there is a draw game, the match song now stops before the dying bombers start screaming. Cool effect!
Fixed a bug of the cool effect above : if the draw game happened when the arena was entirely closed, the song stopped and then started again after the bombers screams.
Made the bomber invulnerable when he has just won the current match.
Added an error sound when the user choices are not correct in the menu.
Added a little sound when the winner screen is shown.
Added sound when a bomber picks up a skull item and when a sick bomber contaminates another bomber.
Added a HURRY UP message and a sound before the arena starts closing.
Computer players now take items without checking if they are in a dead end. It's better like this for the moment.
Computer players now try to go to the block that will be closed last when the arena is almost entirely closed.
Fixed bug where computer players could actually drop bombs in front of soft walls that are burning or that will soon burn. In fact it didn't work.
Made little fix so that computer players don't drop a bomb if there are only dangerous blocks around them. They now kill themselves less often.
When there are no safe block to go to, computer players now try to go to the less dangerous block. They are now much better when the arena is almost entirely closed.
When they are trying to pick up an item, computer players now check if this item is still interesting.
Decreased the draw game screen's duration.
Added sound to the victory screen. Modified animation times in this screen to adapt to the sound.
Computer players now check other items even when they are trying to pick up one.
The skull item comes back! The AI is not very good at handling it, but at least it's here again.
" );

_L( "0.7", "October 30, 2001",
"Added confettis to the victory screen.
Fixed little bug where the cursor hand wasn't visible in the input menu in some cases.
Second try for computer players. Restarting from scratch, the old AI is waaaay too slow.
Computer players can move from one block to another.
Computer players avoid bombs and try to burn walls and pick up items.
Computer players drop bombs in order to kill their ennemies.
Added little breaks when computer players are playing. This makes them more human.
Computer players don't drop a bomb on any block : they first check if they will be able to go to a safe block after dropping it.
Computer players now take distance into account before going to a block and drop a bomb there in order to burn soft walls (they were only checking the number of soft walls they could burn).
Changed little breaks durations (now depends on the context).
Fixed bug where computer players didn't always wait for soft walls to burn and started doing something else in the meanwhile.
Fixed bug where computer players did not always correctly avoid danger (blocked by bombs).
Computer players take bombs flame size into account when detecting the danger.
Fixed bug where computer players accepted to walk on mortal blocks when they were on a block that would soon be mortal.
Computer players prefer to pick up good items first, and won't pick up the skull item. They also prefer not going in a dead end in order to pick up an item.
Fixed little problem in the code that checks if it's ok to drop a bomb.
Fixed bug where computer players didn't mind dropping a bomb in front of a burning soft wall or a soft wall that would soon burn (which could burn items).
Fixed bug where computer players sometimes didn't know what to do when there was nothing interesting around.
Added some debug features in the program in order to be able to modify the game's speed for example.
Added more precision to danger detection.
Added danger detection of falling walls when the arena is closing.
Draw Game, Winner and Victory screens now don't react anymore to player controls (the ones you can configure) but to menu controls (up down left right return backspace).
Computer players have to be closer to an enemy to attack.
Removed temporarily skull and kick item. The AI needs more work to take them into account.
" );

_L( "0.6", "September 5, 2001",
"Made better logging system. The execution of the program is logged to a file. This helps a lot when trying to understand errors (especially DirectX errors).
Fixed memory leak in video memory.
Reduced (a little bit) default bomber speed.
Separated the graphics from the executable. Two files : an EXE + a DLL.
Changed controls: White bomber is controlled with Arrows + L + K, black bomber is controlled with RFDG + 2 + 1 
Added a menu which allows to set the type of each bomber. Less than 2 MAN bombers or more than 0 COM bomber is not allowed.
Modified winner bomber animation timing in victory screen.
Added a colored cross in the scoreboard screen for each non-playing bomber.
Added a menu to set the number of battles (from 1 to 5) in the match, and the start time of the clock (from 1:00 to 5:00). If the start time of the clock is 1:00, then the arena will start closing at 0:40, otherwise at 1:00.
Disabled monitor power and screen saver activation when running the game.
Joystick support! Two keyboard configurations available: Keyboard 1 : 8/5/4/6/PageUp/Home, Keyboard 2 : R/F/D/G/2/1 
Added a menu to set the input configuration (Keyboard 1, Keyboard 2, Joystick 1, Joystick N...) for each human player.
Fixed draw game screen black screen transition when exiting the screen
" );

_L( "0.5", "August 4, 2001",
"Made simple optimizations : much faster
Changed the explosion style (Hudson Soft's Super Bomberman style). The results do not depend on the duration of the explosions anymore, so no more explosion bugs.
Fixed floor shadow bug under falling walls
Fixed arena closing bug when the game slowed down : some blocks could not get closed.
Made clock animation.
Removed computer AI until I make it evolve.
Ripped some fire (burning item) sprites I forgot and added them to animation.
Brightened falling walls grey sprites.
Changed board background sprite and positions of sprites inside the board.
Fixed bug where falling walls were drawn on top of the board.
Changed the speed of item flash animation.
Added draw game screen, scoreboard screen and victory screen.
Added black screen between these screens and the match screen.
Fixed bug when a bomber's bomb explodes after the owner bomber is dead.
Fixed bug where the winner bomber continues going in the direction he was going in during the pause.
Made arena stop closing as soon as the match is over.
Made the view centered in full screen.
" );

_L( "0.4", "July 2001",
"Added board with scores and time left
Added spiral arena closing
Falling walls crush everything
Added very basic computer AI : they just (try to) avoid real danger (not potential danger)
Match restarts after ending
Changed project name (damned) : can't find any project name I like!! No project name for the moment.
Changed again bomb sprites (using Hudson Soft's Bomberman '93 sprites)
Changed keys : arrows to move, T to drop a bomb, R to stop a kicked bomb
Now possible to change the display mode: F1 = 320x240, F2 = 512x384, F3 = 640x480, F4 = Windowed
" );

_L( "0.31", "January 2001",
"Added kick stop control : bombers can stop a moving bomb they kicked (press B)
Bombers return the items they picked up when dying
" );

_L( "0.3", "January 2001",
"Added kick item effect : bombers can push bombs to make them roll
Various big changes in the core of the game (more stability)
" );

_L( "0.25", "January 2001",
"Changed project name : Bomberman Lite.
Changed project goal : Aims to be a complete battle mode Bomberman but not centered on AI anymore.
Hidden the graphics in the executable file
Added support for multiple directions when controlling bombers : for example Up+Left makes the bomber go up or left according to what's around him. Much much more comfort for the player.
Enhanced the way bombers avoid walls by turning around them.
Bombers flash when sick
Contamination between sick bombers. There cannot be two sick bombers.
Sprites are displayed in the right order (fire/bomber, bomber/bomber)
Fixed crash when closing game
Made skull item invulnerable
" );

_L( "0.2", "August 2000",
"Changed bomb sprites (using Hudson Soft's Super Bomberman 5 sprites)
Changed bomber avoiding walls. New style from Hudson Soft's Super Bomberman : the bomber \"turns around\" obstacles rather than with a right angle. Much more comfort for the player (I think)
Smoother bomber movement
Bombers can be sick
" );

_L( "0.13", "August 2000",
"All bomber colors
Bombers die when they are burnt
Added skull item effect : random sickness
Items heal sick bombers
" );

_L( "0.12", "August 2000",
"Continued ripping new graphics
Using original (non-modified) Hudson Soft's graphics from Bomberman '93
Added black bomber
" );

_L( "0.11", "July 2000",
"Changed graphics : now (modified) Hudson Soft's Bomberman '93
Smoother bomber movement
Added bomb/flame/roller item effect on bombers
Added multibomb and kick item
New burning item style
" );

_L( "0.1", "July 2000",
"Built an arena
Added bombers and items
Added bomber collision
Added bomber control with keyboard (arrows and space bar)
Bomber avoids walls when moving
" );

_L( "0.01", "July 2000",
"Project creation
Project name : Bomberbot.
Project goal : Aims to be very centered on AI.
First arena : tests with bombs, walls, explosions
Hudson Soft's Super Bomberman graphics
" );

?>

</div>

<?php

$webpage->tail();

?>

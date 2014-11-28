<?php
/**
* This is a Asterios pagecontroller.
*
*/
//Includ the essential config-file which also creats the $asterios variable with its defaults.
include(__DIR__.'/config.php');

//Do it and store it all in variables in the Asterios container.
$asterios['title']="Hello World";

$asterios['header']=<<<EOD
<img class='sitelogo' src='img/asterios.png' alt='Asterios Logo'/>
<span class='sitetitle'>Asterios webbtemplate</span>
<span class='siteslogan'>Återanvändvara moduler för webbutvecklng med PHP.</span>
<link rel='shortcut icon' href='favicon.ico'/>
EOD;

$asterios['main']=<<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Asterios ser ut och fungerar.</p>
EOD;

$asterios['footer']=<<<EOD
<footer><span class='sitefooter'>Copyright (c) Johan Salomonsson | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

//Finally
include(ANAX_THEME_PATH);


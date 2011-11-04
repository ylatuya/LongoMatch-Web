<?php
$page = 'contribute';
include "header.php" ?>

<div id="content">
  <div id="container">
    <div id="inner-container">
      <div id="text-content">
      <h2>Contribute to LongoMatch!</h2>
      <h3>Filling Bugs and requesting new features</h3>
      <p>If you find bugs or you want to request a new feature in LongoMatch, you should file a new bug report using GNOME's Bugzilla. You will need to <a href="https://bugzilla.gnome.org/createaccount.cgi">create an account</a> first for filling new bugs or commenting on them.</p>
      <ul>
	    <li>
	      File a new bug: <a href="https://bugzilla.gnome.org/enter_bug.cgi?product=longomatch"> Bug report form</a>
	    </li>
	    <li>
	      Request a new feature: <a href="https://bugzilla.gnome.org/enter_bug.cgi?product=longomatch&bug_severity=enhancement">Enhancement report form</a>
	    </li>
      </ul>
      <h3>Translating LongoMatch into your language</h3>
      <p>LongoMatch has been already translated into many languages and the translations are now maintained by GNOME's translation team. But if LongoMatch hasn't been translated yet to your language or some translations are missing, feal free to file a new bug with the new translation or the missing translation.</p>
      <ul>
	    <li>
	      File a new translation bug: <a href="https://bugzilla.gnome.org/enter_bug.cgi?product=longomatch&keywords=I18N+L10N"> Translation bug form</a>
	    </li>
	    <li>
	      Check the state of the translations: <a href="http://l10n.gnome.org/module/longomatch/"> Current state</a>
	    </li>
      </ul>
      <h3>Contributing with code</h3>
      <p>LongoMatch is mostly written in C# using Gtk# and GStreamer and the code is in a git repository, hosted by GNOME.
	    The project is structured in 3 modules:
      </p>
      <ul>
	    <li>
	      <em>LongoMatch</em>: Core and UI
	    </li>
	    <li>
	      <em>libcesarplayer</em>: multimedia backend library written in C based on GStreamer
	    </li>
	    <li>
	      <em>CesarPlayer</em>: C# wrappers, and widgets for the multimedia backend
	    </li>
      </ul>
	  <p>
	    At the moment you won't find any helpful documentation for contributing in the development, but these are the few steps you will need to do to fetch and compile the code from sources.
      </p>
	  <ol>
	    <li>
	      Fetch the code from the git respository:
	    </li>
	    <code>
	      git clone git://git.gnome.org/longomatch
	    </code>
	    <li>
	      Compile the sources:
	    </li>
	    <code>
	      $ sh autogen.sh <br>
	      $ make <br>
	      $ make install <br>
	    </code>
	  </ol>
      <p>
      <h3>Make a donation!!!</h3>
	    If you liked the software and you would like to contribute with a financial help to maintain the web server and invest in new equipment, we accept donations through paypal.</p>
    </div>
      </div>
  </div>
</div>

<?php
include "footer.php" ?>

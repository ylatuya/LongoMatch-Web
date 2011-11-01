<?php
   $page = 'downloads';
   include "header.php" ?>

<div id="content">
  <div id="container">
    <div id="inner-container" class="no-home">
      <div id="text-content">
        <h2>Download <em>LongoMatch</em></h2>
        <ul id="downloads">
          <li> 
            <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe">
              <img src="img/windows.png"/> 
              <em>Windows</em>
            </a>
          </li>
          <li > 
            <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe">
              <img src="img/tgz.png"/>
              <em>Sources</em>
            </a>
          <li> 
            <a href="#ubuntu">
              <img src="img/ubuntu.png"/> 
              <em>Ubuntu</em> 
            </a>
          </li>
          <li> 
            <a href="#debian">
              <img src="img/debian.png"> 
              <em>Debian</em>
          </li>
          </a>
          <li> 
            <a href="#fedora">
              <img src="img/fedora.png"/> 
              <em>Fedora</em> 
            </a>
          </li>
          <li> 
            <a href="#development">
              <img src="img/development.png"/> 
              <em>Devel.</em> 
            </a>
          </li>
        </ul>
        <h3>Windows</h3>
        <p>
          LongoMatch is available for Windows XP/Vista/7 and can be installed
          double-clicking in the downloaded installer filer.</p>
        <p>For the best user experience you must have installed a version of
          DirectX 9.0 (or a later version) and have the hardware acceleration
          enabled</p>
        <h3>Ubuntu/Debian ppa</h3>
        <p>
          LongoMatch is part of Ubuntu since Karmic Koala and can be installed with the packages manager.</p>
        <p>Add the following repository if you want to be updated with last versions:</p>
        <code> 
          sudo add-apt-repository ppa:ylatuya/ppa
        </code>
        <p>We also recommend to use the latest GStreamer binaries using the following repository:</p>
        <code>sudo add-apt-repository ppa:gstreamer-developers/ppa</code> 
        <h3>Fedora/RedHat</h3>
        <p>
          LongoMatch has been packaged for <em>fedora</em> by Thomas Vander Stichele. You
          can find instructions on how to set up the RPM's repository 
          <a href="http://thomas.apestaart.org/pkg/"> here </a>
        </p>
	<a id="development"></a>
        <h3>Development</h3>
        <p>
          The 0.17.x series is a development branch to build the next stable
          release of LongoMatch. You can download it for testing it and
          help finding bugs, but you must remember that this version is not
          compatible with the 0.16.x stable version and you won't be able to
          share projects between them. Both versions can be installed at the
          same time, so installing the development one will not erase or
          overwritte any data from installed one.
        </p>
        <p>The windows binaries can be found <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/"> here</a>.</p>
        <p>And there is an Ubuntu <a href="https://launchpad.net/~ylatuya/+archive/longomatch-dev"> ppa</a> too.</p>
      </div>
    </div>
    <?php
       include "footer.php" ?>

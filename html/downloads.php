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
            <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.18.3.msi"
              onClick="recordOutboundLink(this, 'Downloads', 'Windows');return false;">
              <img src="img/windows.png"/> 
              <em>Windows</em>
            </a>
          </li>
          <li> 
            <a href="http://ftp.gnome.org/pub/GNOME/binaries/mac/longomatch/LongoMatch-0.18.3-x86.dmg"
              onClick="recordOutboundLink(this, 'Downloads', 'Mac OS X');return false;">
              <img src="img/mac.png"/> 
              <em>Mac OS X</em>
            </a>
          </li>
          <li > 
            <a href="http://ftp.gnome.org/pub/GNOME/sources/longomatch/0.18/longomatch-0.18.3.tar.bz2"
              onClick="recordOutboundLink(this, 'Downloads', 'Sources');return false;">
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
	  <li> 
            <a href="https://build.opensuse.org/package/show?package=LongoMatch&project=home%3ACyberBLN%3ALongoMatch">
              <img src="img/opensuse.png"/> 
              <em>OpenSUSE</em> 
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
        <h3>Mac OS X</h3>
        <p>
          LongoMatch is available for Mac OS X Snow Leopard or later.</p>
        <p>To install it, mount the DMG image and copy LongoMatch to
           the Applications folder.</p>
	<a name="ubuntu"></a>
        <h3>Ubuntu/Debian ppa</h3>
        <p>
          LongoMatch is part of Ubuntu since Karmic Koala and can be installed with the packages manager.</p>
        <p>Add the following repository if you want to be updated with last versions:</p>
        <code> 
          sudo add-apt-repository ppa:ylatuya/ppa
        </code>
        <p>We also recommend to use the latest GStreamer binaries using the following repository:</p>
        <code>sudo add-apt-repository ppa:gstreamer-developers/ppa</code> 
    <a name="fedora"></a>
	<h3>Fedora/RedHat</h3>
        <p>
          LongoMatch has been packaged for <em>fedora</em> by Thomas Vander Stichele. You
          can read <a href="http://thomas.apestaart.org/pkg/">instructions</a> on how to set up the RPM's repository.
        </p>
	<a id="development"></a>
      </div>
    </div>
    <?php
       include "footer.php" ?>

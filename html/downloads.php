<?php
  $page = 'downloads';
  include "header.php" ?>

<div id="content">
  <div id="container">
    <div id="inner-container" class="no-home">
      <div id="text-content">
      <h1>Download <em>LongoMatch</em> for your operating system</h1>
      <ul id="downloads">
        <li> 
          <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe">
            <img src="img/windows.png"/> 
            <h2>Windows</h2>
            </a>
        </li>
        <li > 
          <a href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe">
            <img src="img/tgz.png"/>
            <h2>Sources</h2>
          </a>
          <li> 
          <a href="#ubuntu">
            <img src="img/ubuntu.png"/> 
            <h2>Ubuntu</h2> 
          </a>
          </li>
          <li> 
            <a href="#debian">
              <img src="img/debian.png"> 
                <h2>Debian</h2>
              </li>
            </a>
          <li> 
            <a href="#debian">
              <img src="img/fedora.png"/> 
              <h2>Fedora</h2> 
            </a>
          </li>
        </ul>
        <p>
          <br clear="all">
          </p>

          <h3>• Ubuntu/Debian ppa •</h3>
          <p>
          LongoMatch is part of Ubuntu since Karmic Koala and can be installed with the packages manager.</p>
          <p>Add the following repository if you want to be updated with last versions:</p>
          <code> 
            sudo add-apt-repository ppa:ylatuya/ppa
          </code>
          <p>We also recommend to use the latest GStreamer binaries using the following repository:</p>
          <code>sudo add-apt-repository ppa:gstreamer-developers/ppa</code> 
          <h3>• Fedora/RedHat •</h3>
          <p>
            LongoMatch has been packaged for <em>fedora</em> by <em>Thomas Vander Stichele</em>. You
            can find instructions on how to set up the RPM's repository <a
            href="http://thomas.apestaart.org/pkg/"> here </a>
          </p>
        </div>
      </div>
        <?php
          include "footer.php" ?>

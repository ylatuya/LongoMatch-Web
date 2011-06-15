<?php
$page = 'downloads';
include "header.php" ?>

<div id="content">
  <div id="container">
    <div id="inner-container" class="no-home">
      <h3>Download LongoMatch for your operating system</h3>
        <ul id="downloads">
          <li > 
            <a
            href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe"><h3><img
            src="img/windows.png"> Windows</h3></a>
          </li>
          <li > 
            <a
            href="http://ftp.gnome.org/pub/GNOME/binaries/win32/longomatch/LongoMatch-0.16.8-1.exe"><h3><img
            src="img/tgz.png"> Sources tarball</h3></a>
          <li > <img src="img/ubuntu.png"> Ubuntu </li>
          <li > <img src="img/debian.png"> Debian </li>
          <li > <img src="img/fedora.png"> Fedora </li>
        </ul>
        <p>
<br clear="all">
</p>


<h3>Ubuntu/Debian ppa</h3>
<p>
LongoMatch is part of Ubuntu since Karmic Koala and can be installed with the packages manager.<br>
Add the following repository if you want to be updated with last versions:<br>
<b>   sudo add-apt-repository ppa:ylatuya/ppa</b> <br><br>
We also recommend to use the latest GStreamer binaries using the following repository:<br>
<b>   sudo add-apt-repository ppa:gstreamer-developers/ppa</b> 
</p>


<h3>Fedora/RedHat</h3>
<p>
LongoMatch has been packaged for fedora by Thomas Vander Stichele. You
can find instructions on how to set up the RPM's repository <a
href="http://thomas.apestaart.org/pkg/"> here </a>
</p>

</div>
<?php
include "footer.php" ?>

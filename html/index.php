<?php
$page = 'home'; 
include "header.php"
?>
    <script type='text/javascript'>
     $(document).ready(function(){
         $("#tweets").tweet({
             username: "longomatch",
             join_text: "auto",
             count: 3,
             loading_text: "loading tweets...",
             template: '{text}{time}<span class="separator">. . .</span>'
       });
     });
    </script>
    <div id="content">
      <div id="container">
        <div id="inner-container" class="home">
          <div id="watch">
            <img src="img/watch.png" alt="Use longomatch and go back in time!"/>
          </div>
          <div id="info">
            <h1 id="longomatch"><span id="header-first-line">Use <em>LongoMatch</em></span><span id="header-second-line">&amp; go back <em>in time!</em></span></h1>
            <p>LongoMatch is a free video analysis software for sport analysts with unlimited possibilities: <em>Record, Tag, Review, Draw, Edit Videos and much more!</em></p>
	   <!-- <div id="video-and-more">
              <div id="video">
                <a href=""><img src="img/video.png" alt="Play video"/></a>
              </div>
              <ul id="more">
                <li><a href="features.php">More features</a></li>
		<li><a href="">More videos</a></li>
              </ul>
            </div>
          </div>-->        
	  </div>
      </div>
      <div id="features">
      <div id="inner-features">
        <ul>
          <li class="current">
            <h3><a href="">Live Analysis</a></h3>
            <p>Record, tag and analyse games in real-time.</p>
          </li>
          <li>
            <h3><a href="">Timeline</a></h3>
            <p>Edit all the game tags visually from the timeline.</p>
          </li>
          <li>
            <h3><a href="">Video Edition</a></h3>
            <p>Export your playlist to new videos in several formats.</p>
          </li>
          <li>
            <h3><a href="">Free Software!</a></h3>
            <p>It's licensed under the GNU General Public License (GPL 2)</p>
          </li>
        </ul>
        <div id="download">
          <a id="download-button" href="downloads.php" title="download">DOWNLOAD</a>
          <p>LongoMatch v 0.18</p>
	  <p id="contact">
	    <span id="contact-us">Contact us!</span>
	    <a id="facebook" href="http://www.facebook.com/longomatch" title="Facebook"><img src="img/icono-facebook.png" alt="Facebook"/></a>
	    <a id="twitter" href="https://twitter.com/#!/longomatch" title="Twitter"><img src="img/icono-twitter.png" alt="Facebook"/></a>
	  </p>
        </div>
       </div>
      </div>
      <div id="news">
        <div id="blog">
          <div class="post">
            <div class="post-col">
              <!--<ul>
                <li><img src="img/date.png" class="date-img" alt="date"/></li>
                <li><img src="img/twitter.png" alt="share by twitter"/></li>
                <li><img src="img/facebook.png" alt="share by facebook"/></li>
                <li><img src="img/linkedin.png" alt="share by linkedin"/></li>
                <li><img src="img/mail.png" alt="share by mail"/></li>
              </ul>-->
             </div>
            <div class="post-text first-post last-post">
                <h2>LongoMatch 0.18 is out!!!</h2>
                <p class="date-post">November 20, 2012</p>
                <p>After almost 2 years of development, I am happy to announce a new release
                   of LongoMatch.</p>
                <p>LongoMatch 0.18 is now available for Mac OS X too, the 3rd operating system
                   after Linux and Windows. It has suffer a big redesign in the tagging part,
                   supporting now subcategories, which allows a much fine-grained analysis.</p>
                <p>Among other features, LongoMatch now supports embedding drawings in the exported
                   videos and enqueueing redering jobs</p>
                <p>The features of this release are:</p>
                   <ul id="list">
                     <li>Support for Mac OS X</li>
                     <li>Added subcategories</li>
                     <li>Added new filters</li>
                     <li>Added a rendering queue</li>
                     <li>Detachable video window</li>
                     <li>Direct export of videos without a playlist</li>
                   </ul>
                <p>You can download last <a href="/downloads.php">LongoMatch release</a> now.</p>
                <span class="separator">. . .</span>
            </div>
            <div class="post-text first-post last-post">
                <h2>New release!!</h2>
                <p class="date-post">August 28, 2012</p>
                <p>I'm happy to announce the release of LongoMatch 0.16.9!</p>
                <p>This release includes a new video converter for video camera's files which 
                   converts problematic files into a format that is more suitable for LongoMatch.</p>
                <p>I have also included debug console, to help solve problems in windows and 
                   I have fixed a bug in the multimedia backend that was preventing running 
                   in systems without DirectX hardware acceleration support. </p>
                <p>The features of this release are:</p>
                   <ul id="list">
                     <li>Added video converter for MPEG-TS files</li>
                     <li>Added debug console for Windows</li>
                     <li>Fixed support for systems wihtout DirectX hardware acceleration</li>
                   </ul>
                <p>You can download last <a href="/downloads.php">LongoMatch release</a> now.</p>
                <span class="separator">. . .</span>
            </div>
          </div>
        </div>
        <div id="social">     
          <div id="twitter-feed">
	  <h2>Follow us in <a href="http://twitter.com/#!/LongoMatch">twitter</a></h2>
	  <div id="tweets">
	  </div>
<!--          <div class="forum-feed">
	    <h2>Last forum entries</h2>
	  <div id="forum-entries">
	    <div class="entry">
	      <p>What a great website @ygneo & @xaviercolomer</p>
	    </div>
	    <hr/>
	    <div class="entry">
	      <p>What a great website @ygneo & @xaviercolomer</p>
	    </div>
	  </div>-->
        </div>
      </div>
    </div>
<?php
include "footer.php"
?>
 

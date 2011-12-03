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
	      sh autogen.sh <br>
	      make <br>
	      make install <br>
	    </code>
	  </ol>
      <p>
      <h3>Make a donation!</h3>
	   <p> If you liked the software and you would like to contribute with a financial help to maintain the web server and invest in new equipment, we accept donations through paypal.</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHPwYJKoZIhvcNAQcEoIIHMDCCBywCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYA+x7T9AkjfZOX/JeWq6RrgbYs8kOj1QN5OOZkQIRv/l8zjoDNZcGvwqAd+JEFiQkRJoxtSpmEBuYvHjRGzCgcXL+QtEJdioh1ffsIElUSSX6ygJSO1JOGz7yS4NVuON8QwViBTpn3kX6rZCgHU0ynpY1vFe36JncQfI522dm5kCDELMAkGBSsOAwIaBQAwgbwGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIV0p37q/7HCCAgZg7ZbJf2/SHUZSpiN3P4fz23rJmd3YZ0AYee4OjkHKPypKV/twfyMBCJTzL4uGlgw2lsSPn8fRDpPhdAefQeOLS4/o7VKmX5m12z0LnD0kIGEX4TsAY8NQiFDGZwGE7SIilNbS5eIZpyX+1A1DEnUDQJ4p++rID6CK80vK0fW9YzgERlW4nnaOmKAmTRbyf9orUzGt+zQnSaKCCA4cwggODMIIC7KADAgECAgEAMA0GCSqGSIb3DQEBBQUAMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTAeFw0wNDAyMTMxMDEzMTVaFw0zNTAyMTMxMDEzMTVaMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAwUdO3fxEzEtcnI7ZKZL412XvZPugoni7i7D7prCe0AtaHTc97CYgm7NsAtJyxNLixmhLV8pyIEaiHXWAh8fPKW+R017+EmXrr9EaquPmsVvTywAAE1PMNOKqo2kl4Gxiz9zZqIajOm1fZGWcGS0f5JQ2kBqNbvbg2/Za+GJ/qwUCAwEAAaOB7jCB6zAdBgNVHQ4EFgQUlp98u8ZvF71ZP1LXChvsENZklGswgbsGA1UdIwSBszCBsIAUlp98u8ZvF71ZP1LXChvsENZklGuhgZSkgZEwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tggEAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADgYEAgV86VpqAWuXvX6Oro4qJ1tYVIT5DgWpE692Ag422H7yRIr/9j/iKG4Thia/Oflx4TdL+IFJBAyPK9v6zZNZtBgPBynXb048hsP16l2vi0k5Q2JKiPDsEfBhGI+HnxLXEaUWAcVfCsQFvd2A1sxRr67ip5y2wwBelUecP3AjJ+YcxggGaMIIBlgIBATCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwCQYFKw4DAhoFAKBdMBgGCSqGSIb3DQEJAzELBgkqhkiG9w0BBwEwHAYJKoZIhvcNAQkFMQ8XDTA5MDUwNTIxMzYzN1owIwYJKoZIhvcNAQkEMRYEFPcYItzwTEDUMFkVfLzxcNuvVSdjMA0GCSqGSIb3DQEBAQUABIGAM/1bO3WUhCFuEkp0ZQzkA8Cmh8LHEzVs5d8uAxdaxSSjHJhqGlb5vrouJFQ1wVDFOmtwrQqcsBg0dI+AhZyvidMEIGGMsauHKvOFlcTQ8NWSaRUPc2PXaKkUDYw8mbBMGYnxeXHV8sMkChL9B+mUSXrshTo924jjAuy4S7Yyry8=-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
</form>
    </div>
      </div>
  </div>
</div>

<?php
include "footer.php" ?>

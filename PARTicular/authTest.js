// The client ID is obtained from the Google Developers Console
// at https://console.developers.google.com/.
// If you run this code from a server other than http://localhost,
// you need to register your own client ID.
var OAUTH2_CLIENT_ID = '345793378108-avt5g0j47bk4m5od48h089hshcs8omn5.apps.googleusercontent.com';
var OAUTH2_SCOPES = ['https://www.googleapis.com/auth/youtube'];

// Upon loading, the Google APIs JS client automatically invokes this callback.
googleApiClientReady = function() {
  console.log("loaded");
  gapi.auth.init(function() {
    window.setTimeout(checkAuth, 1);
  });
}

// Attempt the immediate OAuth 2.0 client flow as soon as the page loads.
// If the currently logged-in Google Account has previously authorized
// the client specified as the OAUTH2_CLIENT_ID, then the authorization
// succeeds with no user intervention. Otherwise, it fails and the
// user interface that prompts for authorization needs to display.
function checkAuth() {
  console.log("checking");
  gapi.auth.authorize({
    client_id: OAUTH2_CLIENT_ID,
    scope: OAUTH2_SCOPES,
    immediate: true
  }, handleAuthResult);
}

// Handle the result of a gapi.auth.authorize() call.
function handleAuthResult(authResult) {
  console.log("processing result");
  if (authResult && !authResult.error) {
    // Authorization was successful. Hide authorization prompts and show
    // content that should be visible after authorization succeeds.
    $('.pre-auth').hide();
    $('.post-auth').show();
    loadAPIClientInterfaces();
  } else {
    console.log("broke");
    // Make the #login-link clickable. Attempt a non-immediate OAuth 2.0
    // client flow. The current function is called when that flow completes.
    $('#login-link').click(function() {
      gapi.auth.authorize({
        client_id: OAUTH2_CLIENT_ID,
        scope: OAUTH2_SCOPES,
        immediate: false
        }, handleAuthResult);
    });
  }
}

// Load the client interfaces for the YouTube Analytics and Data APIs, which
// are required to use the Google APIs JS client. More info is available at
// http://code.google.com/p/google-api-javascript-client/wiki/GettingStarted#Loading_the_Client
function loadAPIClientInterfaces() {
  console.log("loading client");
  gapi.client.load('youtube', 'v3', function() {
    handleAPILoaded();
  });
}


      // Client ID and API key from the Developer Console
      var CLIENT_ID = '55215761307-cr1d7dhlun857msa7agngtlstgp30t8b.apps.googleusercontent.com';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest"];

      // Authorization scopes required by the API. If using multiple scopes,
      // separated them with spaces.
      var SCOPES = 'https://www.googleapis.com/auth/youtube.readonly';

      var authorizeButton = document.getElementById('authorize-button');
      var signoutButton = document.getElementById('signout-button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
        console.log("client loaded");
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          discoveryDocs: DISCOVERY_DOCS,
          clientId: CLIENT_ID,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        });
        console.log("client intialised");
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = "none";
          signoutButton.style.display = 'block';
          getChannel();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = "none";
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
        var x = document.getElementById('ytVideo');
    	x.style.visibility = "visible";
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append text to a pre element in the body, adding the given message
       * to a text node in that element. Used to display info from API response.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      /**
       * Print files.
       */
      function getChannel() {
         console.log("searching");
  		var q = $('#caseCombo').change(function(){
   		this.options[this.selectedIndex].id;
   		alert(this.options[this.selectedIndex]);
			});
  		var request = gapi.client.youtube.search.list({
    		q: q,
    		part: 'snippet'
  		});

  		request.execute(function(response) {

    		var htmlstring = "";
    		var videos = response.result.items;
    		var video = videos[0].id.videoId;
    //$('#search-container').append("<ul>");
    //for(var i=0; i<5; i++){
      //var title = videos[i].snippet.title;
      //$('#search-container').append("<li>"+title+"</li>");
    //}
    //$('#search-container').append("</ul>");
    
    		console.log(video);
  		});
      }

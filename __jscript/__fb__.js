	(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ne_NP/all.js#xfbml=1&appId="+userData[2];
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
						 
		FB.init({
			  appId  :userData[2],
			  oauth  : true,
			  frictionlessRequests : true
			});


		  function sendRequestToRecipients(x,y) {
		  FB.ui({method: 'apprequests',
			message: x,
			to: y
		  }, requestCallback);
		}

			  function sendRequestViaMultiFriendSelector(x) {
				FB.ui({method: 'apprequests',
				  message: x
				}, requestCallback);
			  }
			  
			  function requestCallback(response) {
				// Handle callback here
			  }
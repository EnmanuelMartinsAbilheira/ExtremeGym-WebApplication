<?php

	//	//API instagram//	//
	session_start();

	define( 'FACEBOOK_APP_ID', 'YOUR-APP-ID' );
	define( 'FACEBOOK_APP_SECRET', 'YOUR-APP-SECRED' );
	define( 'FACEBOOK_REDIRECT_URI', 'YOUR-REDIRECT-URI' );
	define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v5.0/' );

	// accessToken
	$accessToken = 'YOUR-ACCESS-TOKEN-HERE'; //// colocar el token del intagram aqui 

	// page id
	$pageId = 'YOUR-PAGE-ID';

	// instagram business account id
	$instagramAccountId = 'YOUR-INSTAGRAM-ACCOUNT-ID';
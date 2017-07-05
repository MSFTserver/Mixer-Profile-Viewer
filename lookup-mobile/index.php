<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mixer.com Profile Viewer</title>
    <meta name="description" content="Mixer Profile Viewer lets you view most the content that is useful to the public that can't normally be seen ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="css/main.css" rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<script src="js/main.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72658246-1', 'auto');
	  ga('send', 'pageview');

	</script>
    
</head>

<body>

    <div class="wrapper">
        <div class="top">
            <div class="title">
                <h3>Mixer.com Profile Viewer Original Code By: <a href="http://www.firebottle.tv/">FireBottle.tv</a> & Modified By: <a href="https://twitter.com/MSFTserver">MSFTserver</a></h3>
				<div class="btnwrap">
                    <div class="intruction-btn">
                        <input class="streamerinputadd" placeholder="Mixer username">
                        <button class="streamerinputaddbtn">Take a look</button>
                    </div>
                </div>
			</div>
		</div>
            <div class="user">
                <div class="user-main">
                    <div class="left">
                         <div class="info channel-status">
                            <div class="channel-info">
                                <p class="cOnline"></p>
                                <p class="cLink"></p>
                            </div>
                        <div class="info user-avatar">
                            <p class="uAvatarURL"><img src="images/no-image.jpg"></p>
                        </div>
                        <div class="info user-social">
                            <p class="uSocial">
                                <a href="" class="twitter" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="" class="youtube" target="_blank">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                                <a href="" class="playerme" target="_blank">
                                    <i class="fa fa-gamepad"></i>
                                </a>
                            </p>
                        </div>
                        <div class="info user-created">
                            <p class="label">Creation Date</p>
                            <p class="value uCreation"></p>
                        </div>
						 <div class="info user-level">
                            <p class="label">Level</p>
                            <p class="value uLevel"></p>
                        </div>
                        <div class="info user-experience">
                            <p class="label">Experience Points</p>
                            <p class="value uExperience"></p>
                        </div>
                        <div class="info user-sparks">
                            <p class="label">Sparks</p>
                            <p class="value uSparks"></p>
                        </div>
                        <div class="info user-groups">
                            <p class="label">User Groups</p>
                            <p class="value uGroups"></p>
                        </div>
						<div class="info user-bio">
                            <p class="label">Bio</p>
                            <p class="value uBio"></p>
                        </div>
                        <div class="info user-updated">
                            <p class="label">Updated Date</p>
                            <p class="value uUpdated"></p>
                        </div>
                        <div class="info user-verified">
                            <p class="label">Verified Email</p>
                            <p class="value uVerified"></p>
                        </div>
                        <div class="info user-suspended">
                            <p class="label">Account Suspended</p>
                            <p class="value cSuspended"></p>
                        </div>
                           <div class="info c-name">
                            <p class="label">Stream Title</p>
                            <p class="value cName"></p>
                        </div>
                        <div class="info c-game">
                            <p class="label">Game Name</p>
                            <p class="value cGameName"></p>
                        </div>

                        <div class="info c-description">
                            <p class="label">Game Description</p>
                            <p id="test" class="value cGameDescription"></p>
                            <button>Show/Hide</button>
                        </div>
						<div class="info c-current-viewers">
                                    <p class="label">Current Viewers</p>
                                    <p class="value cViewersCurrent"></p>
                                </div>
                                <div class="info c-total-viewers">
                                    <p class="label">Total Viewers</p>
                                    <p class="value cViewersTotal"></p>
                                </div>
                                <div class="info c-followers">
                                    <p class="label">Follower Count</p>
                                    <p class="value cNumFollowers"></p>
                                </div>
                                <div class="info c-rating">
                                    <p class="label">Rated</p>
									<p class="value cAudience"></p>
                                </div>
                                <div class="info c-partnered">
                                    <p class="label">Partnered</p>
                                    <p class="value cPartnered"></p>
                                </div>
                                <div class="info c-featured">
                                    <p class="label">Featured Streamer</p>
                                    <p class="value cFeatured"></p>
                                </div>
                                <div class="info c-ftl">
                                    <p class="label">FTL Status</p>
                                    <p class="value cFTL"></p>
                                </div>
                                <div class="info c-interactive">
                                    <p class="label">Interactive status</p>
                                    <p class="value cInteractive"></p>
                                </div>
                                <div class="info c-hosted">
                                    <p class="label">People Hosting</p>
                                    <p class="value cHosted"></p>
                                </div>
                    </div>
</div>

            </div>

        </div>

    </div>


</body>

</html>
<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename = "Yoshi's Island Speedrunning Wiki";
$wgMetaNamespace = "Yoshi";

$wgScriptPath = "";
$wgServer = getenv('MEDIAWIKI_SERVER');

$wgStylePath = "$wgScriptPath/skins";
$wgLogo = "$wgScriptPath/images/rad_yoshi_logo.png";

# Email (disabled)
$wgEnableEmail = false;
$wgEnableUserEmail = false;
$wgEmergencyContact = "jpnance@gmail.com";
$wgPasswordSender = "jpnance@gmail.com";
$wgEnotifUserTalk = false;
$wgEnotifWatchlist = false;
$wgEmailAuthentication = true;

# Database
$wgDBtype = "mysql";
$wgDBserver = "db";
$wgDBname = getenv('MEDIAWIKI_DB_NAME') ?: "wikidb";
$wgDBuser = getenv('MEDIAWIKI_DB_USER') ?: "wikiuser";
$wgDBpassword = getenv('MEDIAWIKI_DB_PASSWORD');
$wgDBprefix = "";
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Cache
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

# Uploads
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUseInstantCommons = false;
$wgShellLocale = "C.UTF-8";

$wgLanguageCode = "en";

# Secrets (from environment)
$wgSecretKey = getenv('MEDIAWIKI_SECRET_KEY');
$wgUpgradeKey = getenv('MEDIAWIKI_UPGRADE_KEY');

# Skin
wfLoadSkin( 'Vector' );

# License
$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

$wgDiff3 = "/usr/bin/diff3";
$wgAllowExternalImages = true;

# Extensions
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'EmbedVideo' );

# Permissions
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['yosher']['edit'] = true;

$wgShowExceptionDetails = true;

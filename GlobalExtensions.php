<?php

wfLoadExtensions( [
	'AbuseFilter',
	'AntiSpoof',
	'BetaFeatures',
	'CentralNotice',
	'CheckUser',
	'CreateWiki',
	'CookieWarning',
	'ConfirmEdit',
	'ConfirmEdit/hCaptcha',
	'DataDump',
	'DiscordNotifications',
	'DismissableSiteNotice',
	'Echo',
	'EventBus',
	'EventLogging',
	'EventStreamConfig',
	'GlobalCssJs',
	'GlobalNewFiles',
	'ImportDump',
	'InterwikiDispatcher',
	'IPInfo',
	'LoginNotify',
	'ManageWiki',
	'MatomoAnalytics',
	'MirahezeMagic',
	'MobileDetect',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'ParserMigration',
	'QuickInstantCommons',
	// 'ReportIncident',
	'RottenLinks',
	'Scribunto',
	// 'SecureLinkFixer',
	'SpamBlacklist',
	// 'StopForumSpam',
	'TitleBlacklist',
	'TorBlock',
	'WebAuthn',
	'WikiDiscover',
	'WikiEditor',
	'cldr',
] );

if ( $wi->version < 1.44 ) {
	wfLoadExtension( 'Interwiki' );
}

wfLoadExtension( 'Parsoid', "$IP/vendor/wikimedia/parsoid/extension.json" );

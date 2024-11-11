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
	'ConfirmEdit/Turnstile',
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
	'Interwiki',
	'InterwikiDispatcher',
	'IPInfo',
	'LoginNotify',
	'ManageWiki',
	'MatomoAnalytics',
	'MirahezeMagic',
	'MobileDetect',
	'MultiPurge',
	'NativeSvgHandler',
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

wfLoadExtension( 'Parsoid', "$IP/vendor/wikimedia/parsoid/extension.json" );

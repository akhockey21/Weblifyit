<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Debug Mode
	|--------------------------------------------------------------------------
	|
	| When enabled the actual PHP errors will be shown.
	| If disabled, a simple generic error message is shown.
	|
	*/

	'debug' => true,

	/*
	|--------------------------------------------------------------------------
	| Website URL
	|--------------------------------------------------------------------------
	|
	| This URL is used in emails, page redirects and assets.
	| You must set this to the root of the script.
	|
	*/

	'url' => 'http://104.236.61.190/',
    

	/*
	|--------------------------------------------------------------------------
	| Website Name
	|--------------------------------------------------------------------------
	|
	| The name is used in emails or page titles.
	|
	*/
	'name' => 'Weblify.It',
	
	/*
	|--------------------------------------------------------------------------
	| Website Color Scheme
	|--------------------------------------------------------------------------
	|
	| If you use the script with its design you can choose from multiple color
	| schemes.
	|
	| Supported: "dark", "light", "blue", "coffee", "ectoplasm", "midnight"
	|
	*/

	'color_scheme' => 'dark',

	/*
	|--------------------------------------------------------------------------
	| Default Locale & Locales Names
	|--------------------------------------------------------------------------
	|
	| The "locale" is the default locale that will be used by the translation. 
	| The "locales" are the available locales for translation.
	|
	*/

	'locale' => 'en',

	'locales' => array(
		'en' => 'English',
	),

	/*
	|--------------------------------------------------------------------------
	| Timezone
	|--------------------------------------------------------------------------
	|
	| The default timezone for your website.
	| http://www.php.net/manual/en/timezones.php
	|
	*/

	'timezone' => 'UTC',

	/*
	|--------------------------------------------------------------------------
	| Encryption Key
	|--------------------------------------------------------------------------
	|
	| The key should be set to a random 32 character string. 
	| This key is used when storing the remember token in the cookie.
	| Use extra/generate_key.php to generate a key.
	|
	*/

	'key' => '6ZqzaTGPeGt8YXjFzoUzOr1g0PZmQlaP',

	/*
	|--------------------------------------------------------------------------
	| CSRF Prevention
	|--------------------------------------------------------------------------
	|
	| Prevents the website from CSRF attacks.
	|
	*/

	'csrf' => true,

	/*
	|--------------------------------------------------------------------------
	| Service Providers
	|--------------------------------------------------------------------------
	*/

	'providers' => array(
		'Hazzard\Events\EventServiceProvider',
		'Hazzard\Cookie\CookieServiceProvider',
		'Hazzard\Session\SessionServiceProvider',
		'Hazzard\Hashing\HashServiceProvider',
		'Hazzard\Encryption\EncryptionServiceProvider',
		'Hazzard\Translation\TranslationServiceProvider',
		'Hazzard\View\ViewServiceProvider',
		'Hazzard\Mail\MailServiceProvider',
		'Hazzard\Database\DatabaseServiceProvider',
		'Hazzard\Validation\ValidationServiceProvider',
		'Hazzard\Auth\AuthServiceProvider',
		'Hazzard\Auth\OAuthServiceProvider',
		'Hazzard\Auth\RegisterServiceProvider',
		'Hazzard\Auth\PasswordReminderServiceProvider',
		'Hazzard\User\MetaServiceProvider',
		'Hazzard\User\FieldsServiceProvider',
		'Hazzard\Messages\MessageServiceProvider',
		'Hazzard\Comments\CommentsServiceProvider',
        'Hazzard\User\LeadsServiceProvider',
        'Hazzard\User\ModelsServiceProvider',
        'Hazzard\User\WebsiteServiceProvider',
        'Hazzard\User\AutomationServiceProvider',
        'Hazzard\User\BillingServiceProvider',
        'Hazzard\User\TemplatetextServiceProvider',
        'Hazzard\User\PagesServiceProvider',
        'Hazzard\User\UserWebsiteTextServiceProvider',
        'Hazzard\User\UserdefaulttextServiceProvider',
        'Hazzard\User\CategoriesServiceProvider',
        'Hazzard\Weblifyit\APRHeaderServiceProvider',
        'Hazzard\Weblifyit\APRThemesServiceProvider',
        'Hazzard\Weblifyit\APRMenuServiceProvider',
        'Hazzard\Weblifyit\APRColorsServiceProvider',
        'Hazzard\Weblifyit\APRSocialMediaServiceProvider',
        'Hazzard\Weblifyit\APRFooterServiceProvider',
        'Hazzard\Weblifyit\APRGeneralServiceProvider',
        'Hazzard\Weblifyit\APRCustomCssJsServiceProvider',
        'Hazzard\Weblifyit\PagesManageServiceProvider',
        'Hazzard\Weblifyit\PagesContentServiceProvider',
        'Hazzard\Weblifyit\MediaServiceProvider',
        'Hazzard\Weblifyit\WebsiteSettingsServiceProvider',
        'Hazzard\Weblifyit\BusinessInfoServiceProvider',
        'Hazzard\Weblifyit\GlobalThemesServiceProvider',
        'Hazzard\Weblifyit\GlobalCategoriesServiceProvider',
        'Hazzard\Weblifyit\GlobalShortcodesServiceProvider',
        'Hazzard\Weblifyit\BlogManageServiceProvider',
        'Hazzard\Weblifyit\BlogContentServiceProvider',
        'Hazzard\Weblifyit\BlogSettingsServiceProvider',
        'Hazzard\Weblifyit\BlogOtherServiceProvider',
	),

	'manifest' => storage_path(),

	/*
	|--------------------------------------------------------------------------
	| Class Aliases
	|--------------------------------------------------------------------------
	*/

	'aliases' => array(
		'App'        => 'Hazzard\Support\Facades\App',
		'Config'     => 'Hazzard\Support\Facades\Config',
		'DB'         => 'Hazzard\Support\Facades\DB',
		'Model'      => 'Hazzard\Database\Model',
		'Validator'  => 'Hazzard\Support\Facades\Validator',
		'Cookie'     => 'Hazzard\Support\Facades\Cookie',
		'Session'    => 'Hazzard\Support\Facades\Session',
		'Hash'       => 'Hazzard\Support\Facades\Hash',
		'Crypt'      => 'Hazzard\Support\Facades\Crypt',
		'Event'      => 'Hazzard\Support\Facades\Event',
		'Lang'       => 'Hazzard\Support\Facades\Lang',
		'View'       => 'Hazzard\Support\Facades\View',
		'Mail'       => 'Hazzard\Support\Facades\Mail',
		'Auth'       => 'Hazzard\Support\Facades\Auth',
		'OAuth'      => 'Hazzard\Support\Facades\OAuth',
		'Register'   => 'Hazzard\Support\Facades\Register',
		'Password'   => 'Hazzard\Support\Facades\Password',
		'Usermeta'   => 'Hazzard\Support\Facades\Usermeta',
		'UserFields' => 'Hazzard\Support\Facades\UserFields',
		'Message'	 => 'Hazzard\Support\Facades\Message',
		'Contact'	 => 'Hazzard\Support\Facades\Contact',
		'Comments'   => 'Hazzard\Support\Facades\Comments',
        'Userleads'   => 'Hazzard\Support\Facades\Userleads',
        'Usermodels'   => 'Hazzard\Support\Facades\Usermodels',
        'Userwebsite'   => 'Hazzard\Support\Facades\Userwebsite',
        'Userautomation'   => 'Hazzard\Support\Facades\Userautomation',
        'Userbilling'   => 'Hazzard\Support\Facades\Userbilling',
        'Templatetext'   => 'Hazzard\Support\Facades\Templatetext',
        'Userpages'   => 'Hazzard\Support\Facades\Userpages',
        'Userwebsitetext'   => 'Hazzard\Support\Facades\Userwebsitetext',
        'Userdefaulttext'   => 'Hazzard\Support\Facades\Userdefaulttext',
        'Categories'   => 'Hazzard\Support\Facades\Categories',
        'APRHeader'   => 'Hazzard\Support\Facades\APRHeader',
        'APRThemes'   => 'Hazzard\Support\Facades\APRThemes',
        'APRMenu'   => 'Hazzard\Support\Facades\APRMenu',
        'APRColors'   => 'Hazzard\Support\Facades\APRColors',
        'APRSocialMedia'   => 'Hazzard\Support\Facades\APRSocialMedia',
        'APRFooter'   => 'Hazzard\Support\Facades\APRFooter',
        'APRGeneral'   => 'Hazzard\Support\Facades\APRGeneral',
        'APRCustomCssJs'   => 'Hazzard\Support\Facades\APRCustomCssJs',
        'PagesManage'   => 'Hazzard\Support\Facades\PagesManage',
        'PagesContent'   => 'Hazzard\Support\Facades\PagesContent',
        'Media'   => 'Hazzard\Support\Facades\Media',
        'WebsiteSettings'   => 'Hazzard\Support\Facades\WebsiteSettings',
        'BusinessInfo'   => 'Hazzard\Support\Facades\BusinessInfo',
        'GlobalThemes'   => 'Hazzard\Support\Facades\GlobalThemes',
        'GlobalCategories'   => 'Hazzard\Support\Facades\GlobalCategories',
        'GlobalShortcodes'   => 'Hazzard\Support\Facades\GlobalShortcodes',
        'BlogManage'   => 'Hazzard\Support\Facades\BlogManage',
        'BlogContent'   => 'Hazzard\Support\Facades\BlogContent',
        'BlogSettings'   => 'Hazzard\Support\Facades\BlogSettings',
        'BlogOther'   => 'Hazzard\Support\Facades\BlogOther',
	)
);
<?php
namespace System;
class UriParser extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $HttpUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $HttpsUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $WsUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $WssUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $FtpUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $FileUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $UnixFileUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $GopherUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $NntpUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $NewsUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $MailToUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $UuidUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $TelnetUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $LdapUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $NetTcpUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $NetPipeUri;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UriParser
	 */
	protected static $VsMacrosUri;
	/**
	 * @return \System\UriParser
	 */
	protected function OnNewUri(){}
	/**
	 * @param \System\String|string $schemeName
	 * @param \System\Int32|int $defaultPort
	 * @return \System\Void|void
	 */
	protected function OnRegister($schemeName, $defaultPort){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\UriFormatException& &$parsingError
	 * @return \System\Void|void
	 */
	protected function InitializeAndValidate($uri, &$parsingError){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\Uri $relativeUri
	 * @param \System\UriFormatException& &$parsingError
	 * @return \System\String|string
	 */
	protected function Resolve($baseUri, $relativeUri, &$parsingError){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\Uri $relativeUri
	 * @return \System\Boolean|bool
	 */
	protected function IsBaseOf($baseUri, $relativeUri){}
	/**
	 * @param \System\Uri $uri
	 * @param \System\UriComponents $components
	 * @param \System\UriFormat $format
	 * @return \System\String|string
	 */
	protected function GetComponents($uri, $components, $format){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	protected function IsWellFormedOriginalString($uri){}
	/**
	 * @param \System\UriParser $uriParser
	 * @param \System\String|string $schemeName
	 * @param \System\Int32|int $defaultPort
	 * @return \System\Void|void
	 */
	public static function Register($uriParser, $schemeName, $defaultPort){}
	/**
	 * @param \System\String|string $schemeName
	 * @return \System\Boolean|bool
	 */
	public static function IsKnownScheme($schemeName){}
	/**
	 * @param \System\UriSyntaxFlags $flags
	 * @return \System\Boolean|bool
	 */
	protected function NotAny($flags){}
	/**
	 * @param \System\UriSyntaxFlags $flags
	 * @return \System\Boolean|bool
	 */
	protected function InFact($flags){}
	/**
	 * @param \System\UriSyntaxFlags $flags
	 * @return \System\Boolean|bool
	 */
	protected function IsAllSet($flags){}
	private function IsFullMatch($flags, $expected){}
	private static function FetchSyntax($syntax, $lwrCaseSchemeName, $defaultPort){}
	/**
	 * @param \System\String|string $lwrCaseScheme
	 * @return \System\UriParser
	 */
	protected static function FindOrFetchAsUnknownV1Syntax($lwrCaseScheme){}
	/**
	 * @param \System\String|string $lwrCaseScheme
	 * @return \System\UriParser
	 */
	protected static function GetSyntax($lwrCaseScheme){}
	/**
	 * @return \System\Void|void
	 */
	protected function CheckSetIsSimpleFlag(){}
	/**
	 * @return \System\UriParser
	 */
	protected function InternalOnNewUri(){}
	/**
	 * @param \System\Uri $thisUri
	 * @param \System\UriFormatException& &$parsingError
	 * @return \System\Void|void
	 */
	protected function InternalValidate($thisUri, &$parsingError){}
	/**
	 * @param \System\Uri $thisBaseUri
	 * @param \System\Uri $uriLink
	 * @param \System\UriFormatException& &$parsingError
	 * @return \System\String|string
	 */
	protected function InternalResolve($thisBaseUri, $uriLink, &$parsingError){}
	/**
	 * @param \System\Uri $thisBaseUri
	 * @param \System\Uri $uriLink
	 * @return \System\Boolean|bool
	 */
	protected function InternalIsBaseOf($thisBaseUri, $uriLink){}
	/**
	 * @param \System\Uri $thisUri
	 * @param \System\UriComponents $uriComponents
	 * @param \System\UriFormat $uriFormat
	 * @return \System\String|string
	 */
	protected function InternalGetComponents($thisUri, $uriComponents, $uriFormat){}
	/**
	 * @param \System\Uri $thisUri
	 * @return \System\Boolean|bool
	 */
	protected function InternalIsWellFormedOriginalString($thisUri){}
}
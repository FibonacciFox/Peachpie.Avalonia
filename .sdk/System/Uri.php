<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UriOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\SerializationInfo $serializationInfo
	 * @param \System\Runtime\Serialization\StreamingContext $streamingContext
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GetObjectData_1 ($serializationInfo, $streamingContext){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\SerializationInfo $serializationInfo
	 * @param \System\Runtime\Serialization\StreamingContext $streamingContext
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function GetObjectData_2 ($serializationInfo, $streamingContext){}
	/**
	 * @deprecated
	 * @param \System\Char $dest
	 * @param \System\Int32|int $start
	 * @param \System\Int32& $destLength
	 * @param \System\UriParser $syntax
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function Compress_1 ($dest, $start, $destLength, $syntax){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $span [generic: System\Char]
	 * @param \System\UriParser $syntax
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function Compress_2 ($span, $syntax){}
	/**
	 * @deprecated
	 * @param \System\String|string $uriString
	 * @param \System\UriKind $uriKind
	 * @param \System\Uri& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_1 ($uriString, $uriKind, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $uriString
	 * @param \System\UriCreationOptions& &$creationOptions
	 * @param \System\Uri& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_2 ($uriString, &$creationOptions, &$result){}
	/**
	 * @deprecated
	 * @param \System\Uri $baseUri
	 * @param \System\String|string $relativeUri
	 * @param \System\Uri& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_3 ($baseUri, $relativeUri, &$result){}
	/**
	 * @deprecated
	 * @param \System\Uri $baseUri
	 * @param \System\Uri $relativeUri
	 * @param \System\Uri& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_4 ($baseUri, $relativeUri, &$result){}
	/**
	 * @param \System\String|string $uriString
	 */
	#[MethodOverride]public function __construct_1 ($uriString){}
	/**
	 * @param \System\String|string $uriString
	 * @param \System\Boolean|bool $dontEscape
	 */
	#[MethodOverride]public function __construct_2 ($uriString, $dontEscape){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\String|string $relativeUri
	 * @param \System\Boolean|bool $dontEscape
	 */
	#[MethodOverride]public function __construct_3 ($baseUri, $relativeUri, $dontEscape){}
	/**
	 * @param \System\String|string $uriString
	 * @param \System\UriKind $uriKind
	 */
	#[MethodOverride]public function __construct_4 ($uriString, $uriKind){}
	/**
	 * @param \System\String|string $uriString
	 * @param \System\UriCreationOptions& &$creationOptions
	 */
	#[MethodOverride]public function __construct_5 ($uriString, &$creationOptions){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\String|string $relativeUri
	 */
	#[MethodOverride]public function __construct_6 ($baseUri, $relativeUri){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\Uri $relativeUri
	 */
	#[MethodOverride]public function __construct_7 ($baseUri, $relativeUri){}
}
class Uri extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	use UriOverride;

	/**
	 * @field
	 * @var \System\UriParser
	 */
	protected $_syntax;
	/**
	 * @field
	 * @var \System\Uri+Flags
	 */
	protected $_flags;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeFile;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeFtp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeSftp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeFtps;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeGopher;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeHttp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeHttps;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeWs;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeWss;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeMailto;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeNews;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeNntp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeSsh;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeTelnet;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeNetTcp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $UriSchemeNetPipe;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $SchemeDelimiter;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AbsolutePath;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AbsoluteUri;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $LocalPath;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Authority;
	/**
	 * @property
	 * @var \System\UriHostNameType
	 * @since readonly
	 */
	public $HostNameType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDefaultPort;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFile;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLoopback;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PathAndQuery;
	/**
	 * @property
	 * @var \System\String[]|array
	 * @since readonly
	 */
	public $Segments;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUnc;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Host;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Port;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Query;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Fragment;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Scheme;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $OriginalString;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DnsSafeHost;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $IdnHost;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbsoluteUri;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $UserEscaped;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $UserInfo;
	private function InterlockedSetFlags($flags){}
	/**
	 * @param \System\UriParser $syntax
	 * @return \System\Boolean|bool
	 */
	protected static function IriParsingStatic($syntax){}
	private function NotAny($flags){}
	private function InFact($flags){}
	private static function StaticNotAny($allFlags, $checkFlags){}
	private static function StaticInFact($allFlags, $checkFlags){}
	private function EnsureUriInfo(){}
	private function EnsureParseRemaining(){}
	private function EnsureHostString($allowDnsOptimization){}
	/**
	 * @uses UriOverride::GetObjectData_1 <br>private , args: ($serializationInfo, $streamingContext)<br>
	 * @uses UriOverride::GetObjectData_2 <br>protected , args: ($serializationInfo, $streamingContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetObjectData (\override ...$args){}
	private function CreateUri($baseUri, $relativeUri, $dontEscape){}
	private static function GetCombinedString($baseUri, $relativeStr, $dontEscape, $result){}
	private static function GetException($err){}
	private static function StaticIsFile($syntax){}
	private function GetLocalPath(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\UriHostNameType
	 */
	public static function CheckHostName($name){}
	/**
	 * @param \System\UriPartial $part
	 * @return \System\String|string
	 */
	public function GetLeftPart($part){}
	/**
	 * @param \System\Char $character
	 * @return \System\String|string
	 */
	public static function HexEscape($character){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32& $index
	 * @return \System\Char
	 */
	public static function HexUnescape($pattern, $index){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	public static function IsHexEncoding($pattern, $index){}
	/**
	 * @param \System\String|string $schemeName
	 * @return \System\Boolean|bool
	 */
	public static function CheckSchemeName($schemeName){}
	/**
	 * @param \System\Char $character
	 * @return \System\Boolean|bool
	 */
	public static function IsHexDigit($character){}
	/**
	 * @param \System\Char $digit
	 * @return \System\Int32|int
	 */
	public static function FromHex($digit){}
	/**
	 * @param \System\Uri $uri1
	 * @param \System\Uri $uri2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($uri1, $uri2){}
	/**
	 * @param \System\Uri $uri1
	 * @param \System\Uri $uri2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($uri1, $uri2){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Uri
	 */
	public function MakeRelativeUri($uri){}
	private static function CheckForColonInFirstPathSegment($uriString){}
	/**
	 * @param \System\String|string $rawString
	 * @return \System\String|string
	 */
	protected static function InternalEscapeString($rawString){}
	private static function ParseScheme($uriString, $flags, $syntax){}
	/**
	 * @return \System\UriFormatException
	 */
	protected function ParseMinimal(){}
	private function PrivateParseMinimal(){}
	private function CreateUriInfo($cF){}
	private function CreateHostString(){}
	private static function CreateHostStringHelper($str, $idx, $end, $flags, $scopeId){}
	private function GetHostViaCustomSyntax(){}
	/**
	 * @param \System\UriComponents $uriParts
	 * @param \System\UriFormat $formatAs
	 * @return \System\String|string
	 */
	protected function GetParts($uriParts, $formatAs){}
	private function GetEscapedParts($uriParts){}
	private function GetUnescapedParts($uriParts, $formatAs){}
	private function ReCreateParts($parts, $nonCanonical, $formatAs){}
	private function GetUriPartsFromUserString($uriParts){}
	private static function GetLengthWithoutTrailingSpaces($str, $length, $idx){}
	private function ParseRemaining(){}
	private static function ParseSchemeCheckImplicitFile($uriString, $length, $err, $flags, $syntax){}
	private static function CheckSchemeSyntax($span, $syntax){}
	private function CheckAuthorityHelper($pString, $idx, $length, $err, $flags, $syntax, $newHost){}
	private static function CheckAuthorityHelperHandleDnsIri($pString, $start, $end, $hasUnicode, $flags, $justNormalized, $newHost, $err){}
	private function CheckCanonical($str, $idx, $end, $delim){}
	private function GetCanonicalPath($dest, $formatAs){}
	private static function UnescapeOnly($pch, $start, $end, $ch1, $ch2, $ch3){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UriOverride::Compress_1 <br>private , args: ($dest, $start, $destLength, $syntax)<br>
	 * @uses UriOverride::Compress_2 <br>private , args: ($span, $syntax)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function Compress (\override ...$args){}
	private static function CombineUri($basePart, $relativePart, $uriFormat){}
	private static function PathDifference($path1, $path2, $compareCase){}
	/**
	 * @param \System\Uri $toUri
	 * @return \System\String|string
	 */
	public function MakeRelative($toUri){}
	/**
	 * @return \System\Void|void
	 */
	protected function Canonicalize(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Parse(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Escape(){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	protected function Unescape($path){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	protected static function EscapeString($str){}
	/**
	 * @return \System\Void|void
	 */
	protected function CheckSecurity(){}
	/**
	 * @param \System\Char $character
	 * @return \System\Boolean|bool
	 */
	protected function IsReservedCharacter($character){}
	/**
	 * @param \System\Char $character
	 * @return \System\Boolean|bool
	 */
	protected static function IsExcludedCharacter($character){}
	/**
	 * @param \System\Char $character
	 * @return \System\Boolean|bool
	 */
	protected function IsBadFileSystemCharacter($character){}
	private function CreateThis($uri, $dontEscape, $uriKind, &$creationOptions){}
	private function InitializeUri($err, $uriKind, &$e){}
	private static function CheckForUnicodeOrEscapedUnreserved($data){}
	/**
	 * @uses UriOverride::TryCreate_1 <br>public , args: ($uriString, $uriKind, &$result)<br>
	 * @uses UriOverride::TryCreate_2 <br>public , args: ($uriString, &$creationOptions, &$result)<br>
	 * @uses UriOverride::TryCreate_3 <br>public , args: ($baseUri, $relativeUri, &$result)<br>
	 * @uses UriOverride::TryCreate_4 <br>public , args: ($baseUri, $relativeUri, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryCreate (\override ...$args){}
	/**
	 * @param \System\UriComponents $components
	 * @param \System\UriFormat $format
	 * @return \System\String|string
	 */
	public function GetComponents($components, $format){}
	private function InternalGetComponents($components, $format){}
	/**
	 * @param \System\Uri $uri1
	 * @param \System\Uri $uri2
	 * @param \System\UriComponents $partsToCompare
	 * @param \System\UriFormat $compareFormat
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	public static function Compare($uri1, $uri2, $partsToCompare, $compareFormat, $comparisonType){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsWellFormedOriginalString(){}
	/**
	 * @param \System\String|string $uriString
	 * @param \System\UriKind $uriKind
	 * @return \System\Boolean|bool
	 */
	public static function IsWellFormedUriString($uriString, $uriKind){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function InternalIsWellFormedOriginalString(){}
	/**
	 * @param \System\String|string $stringToUnescape
	 * @return \System\String|string
	 */
	public static function UnescapeDataString($stringToUnescape){}
	/**
	 * @param \System\String|string $stringToEscape
	 * @return \System\String|string
	 */
	public static function EscapeUriString($stringToEscape){}
	/**
	 * @param \System\String|string $stringToEscape
	 * @return \System\String|string
	 */
	public static function EscapeDataString($stringToEscape){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\UriComponents $component
	 * @return \System\String|string
	 */
	protected function EscapeUnescapeIri($input, $start, $end, $component){}
	/**
	 * @param \System\String|string $uriString
	 * @param \System\Boolean|bool $dontEscape
	 * @param \System\UriKind $uriKind
	 * @param \System\UriFormatException& $e
	 * @param \System\UriCreationOptions& &$creationOptions
	 * @return \System\Uri
	 */
	protected static function CreateHelper($uriString, $dontEscape, $uriKind, $e, &$creationOptions){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\Uri $relativeUri
	 * @param \System\String& $newUriString
	 * @param \System\Boolean& $userEscaped
	 * @return \System\Uri
	 */
	protected static function ResolveHelper($baseUri, $relativeUri, $newUriString, $userEscaped){}
	private function GetRelativeSerializationString($format){}
	/**
	 * @param \System\UriComponents $uriComponents
	 * @param \System\UriFormat $uriFormat
	 * @return \System\String|string
	 */
	protected function GetComponentsHelper($uriComponents, $uriFormat){}
	/**
	 * @param \System\Uri $uri
	 * @return \System\Boolean|bool
	 */
	public function IsBaseOf($uri){}
	/**
	 * @param \System\Uri $uriLink
	 * @return \System\Boolean|bool
	 */
	protected function IsBaseOfHelper($uriLink){}
	private function CreateThisFromUri($otherUri){}
	/**
	 * @uses UriOverride::__construct_1 <br>public , args: ($uriString)<br>
	 * @uses UriOverride::__construct_2 <br>public , args: ($uriString, $dontEscape)<br>
	 * @uses UriOverride::__construct_3 <br>public , args: ($baseUri, $relativeUri, $dontEscape)<br>
	 * @uses UriOverride::__construct_4 <br>public , args: ($uriString, $uriKind)<br>
	 * @uses UriOverride::__construct_5 <br>public , args: ($uriString, &$creationOptions)<br>
	 * @uses UriOverride::__construct_6 <br>public , args: ($baseUri, $relativeUri)<br>
	 * @uses UriOverride::__construct_7 <br>public , args: ($baseUri, $relativeUri)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
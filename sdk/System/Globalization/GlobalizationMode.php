<?php
namespace System\Globalization;
/**
 */
class GlobalizationMode extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected static function get_Invariant(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_PredefinedCulturesOnly(){}
	/**
	 * @param \System\String& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetAppLocalIcuSwitchValue($value){}
	/**
	 * @param \System\String|string $switchName
	 * @param \System\String|string $envVariable
	 * @param \System\String& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetStringValue($switchName, $envVariable, $value){}
	/**
	 * @param \System\String|string $icuSuffixAndVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadAppLocalIcu($icuSuffixAndVersion){}
	/**
	 * @param \System\ReadOnlySpan_1 $baseName
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\ReadOnlySpan_1 $extension
	 * @param \System\ReadOnlySpan_1 $version
	 * @param \System\Boolean $versionAtEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateLibraryName($baseName, $suffix, $extension, $version, $versionAtEnd){}
	/**
	 * @param \System\String|string $library
	 * @param \System\Boolean $failOnLoadFailure
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadLibrary($library, $failOnLoadFailure){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_UseNls(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadIcu(){}
	/**
	 * @param \System\ReadOnlySpan_1 $version
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadAppLocalIcuCore($version, $suffix){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

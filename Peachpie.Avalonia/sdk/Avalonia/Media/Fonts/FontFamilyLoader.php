<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontFamilyLoaderMethodsOverride
{
	/**
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride] private static function GetFileName_1($source, $location){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride] private static function GetFileName_2($path, $directorySeparator, $extensionLength){}
}
/**
 */
class FontFamilyLoader extends \System\Object
{
	/**
	 * @param \System\Uri $source
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function LoadFontAssets($source){}
	/**
	 * @param \System\Uri $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFontAssetsBySource($source){}
	/**
	 * @param \System\Uri $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFontAssetsByExpression($source){}
	/**
	 * @uses FontFamilyLoaderMethodsOverride::GetFileName_1 ($source, $location)
	 * @uses FontFamilyLoaderMethodsOverride::GetFileName_2 ($path, $directorySeparator, $extensionLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFileName(mixed ...$args){}
	/**
	 * @param \System\Uri $source
	 * @param \System\Uri $location
	 * @param \System\String|string $fileNameWithoutExtension
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateFilePattern($source, $location, $fileNameWithoutExtension){}
	/**
	 * @param \System\Uri $x
	 * @param \System\String|string $filePattern
	 * @param \System\String|string $fileExtension
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsContainsFile($x, $filePattern, $fileExtension){}
	/**
	 * @param \System\Uri $uri
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFontTtfOrOtf($uri){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Char $directorySeparator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFileNameAndExtension($path, $directorySeparator){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @param \System\Char $directorySeparator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPathRooted($path, $directorySeparator){}
	/**
	 * @param \System\ReadOnlySpan_1 $path
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFileExtension($path){}
	/**
	 * @param \System\String|string $path
	 * @param \System\Char $separator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSubString($path, $separator){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

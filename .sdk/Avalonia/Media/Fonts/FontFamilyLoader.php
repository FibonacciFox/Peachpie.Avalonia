<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FontFamilyLoaderOverride {
	/**
	 * @deprecated
	 * @param \System\Uri $source
	 * @param \System\Uri& &$location
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]private static function GetFileName_1 ($source, &$location){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $path [generic: System\Char]
	 * @param \System\Char $directorySeparator
	 * @param \System\Int32|int $extensionLength
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]private static function GetFileName_2 ($path, $directorySeparator, $extensionLength){}
}
class FontFamilyLoader extends \System\Object
{
	use FontFamilyLoaderOverride;

	/**
	 * @param \System\Uri $source
	 * @return \System\Collections\Generic\IEnumerable_1[System\Uri]
	 */
	public static function LoadFontAssets($source){}
	private static function GetFontAssetsBySource($source){}
	private static function GetFontAssetsByExpression($source){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FontFamilyLoaderOverride::GetFileName_1 <br>private , args: ($source, &$location)<br>
	 * @uses FontFamilyLoaderOverride::GetFileName_2 <br>private , args: ($path, $directorySeparator, $extensionLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ValueTuple_2|\System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePrivate]function GetFileName (\override ...$args){}
	private static function CreateFilePattern($source, $location, $fileNameWithoutExtension){}
	private static function IsContainsFile($x, $filePattern, $fileExtension){}
	private static function IsFontTtfOrOtf($uri){}
	private static function GetFileNameAndExtension($path, $directorySeparator){}
	private static function IsPathRooted($path, $directorySeparator){}
	private static function GetFileExtension($path){}
	private static function GetSubString($path, $separator){}
}
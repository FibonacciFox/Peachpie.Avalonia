<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvariantModeCasingOverride {
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function ToLower_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ToLower_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ToLower_3 ($source, $destination){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]protected static function ToUpper_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function ToUpper_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function ToUpper_3 ($source, $destination){}
}
class InvariantModeCasing extends \System\Object
{
	use InvariantModeCasingOverride;


	/**
	 * @uses InvariantModeCasingOverride::ToLower_1 <br>protected , args: ($c)<br>
	 * @uses InvariantModeCasingOverride::ToLower_2 <br>protected , args: ($s)<br>
	 * @uses InvariantModeCasingOverride::ToLower_3 <br>protected , args: ($source, $destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ToLower (\override ...$args){}
	/**
	 * @uses InvariantModeCasingOverride::ToUpper_1 <br>protected , args: ($c)<br>
	 * @uses InvariantModeCasingOverride::ToUpper_2 <br>protected , args: ($s)<br>
	 * @uses InvariantModeCasingOverride::ToUpper_3 <br>protected , args: ($source, $destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ToUpper (\override ...$args){}
	private static function GetScalar($source, $index, $length){}
	/**
	 * @param \System\Char& $strA
	 * @param \System\Int32|int $lengthA
	 * @param \System\Char& $strB
	 * @param \System\Int32|int $lengthB
	 * @return \System\Int32|int
	 */
	protected static function CompareStringIgnoreCase($strA, $lengthA, $strB, $lengthB){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function IndexOfIgnoreCase($source, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOfIgnoreCase($source, $value){}
}
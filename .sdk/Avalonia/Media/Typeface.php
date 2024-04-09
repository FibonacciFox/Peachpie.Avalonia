<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypefaceOverride {
	/**
	 * @param \Avalonia\Media\FontFamily $fontFamily
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 */
	#[MethodOverride]public function __construct_1 ($fontFamily, $style, $weight, $stretch){}
	/**
	 * @param \System\String|string $fontFamilyName
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 */
	#[MethodOverride]public function __construct_2 ($fontFamilyName, $style, $weight, $stretch){}
}
final class Typeface extends \System\ValueType implements
	\System\IEquatable_1
{
	use TypefaceOverride;
	/**
	 * @property
	 * @var \Avalonia\Media\Typeface
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 * @since readonly
	 */
	public $FontFamily;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStyle
	 * @since readonly
	 */
	public $Style;
	/**
	 * @property
	 * @var \Avalonia\Media\FontWeight
	 * @since readonly
	 */
	public $Weight;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStretch
	 * @since readonly
	 */
	public $Stretch;
	/**
	 * @property
	 * @var \Avalonia\Media\IGlyphTypeface
	 * @since readonly
	 */
	public $GlyphTypeface;
	/**
	 * @param \Avalonia\Media\Typeface $a
	 * @param \Avalonia\Media\Typeface $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\Typeface $a
	 * @param \Avalonia\Media\Typeface $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @uses TypefaceOverride::__construct_1 <br>public , args: ($fontFamily, $style, $weight, $stretch)<br>
	 * @uses TypefaceOverride::__construct_2 <br>public , args: ($fontFamilyName, $style, $weight, $stretch)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
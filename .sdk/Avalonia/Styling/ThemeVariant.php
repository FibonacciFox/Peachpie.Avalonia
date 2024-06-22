<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThemeVariantOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	#[MethodOverride]public static function op_Explicit_1 ($themeVariant){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\ThemeVariant $themeVariant
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function op_Explicit_2 ($themeVariant){}
}
final class ThemeVariant extends \System\Object implements
	\System\IEquatable_1
{
	use ThemeVariantOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 */
	protected static $ActualThemeVariantProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 */
	protected static $RequestedThemeVariantProperty;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $InheritVariant;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $Light;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $Dark;
	/**
	 * @uses ThemeVariantOverride::op_Explicit_1 <br>public , args: ($themeVariant)<br>
	 * @uses ThemeVariantOverride::op_Explicit_2 <br>public , args: ($themeVariant)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Styling\ThemeVariant|\System\Nullable_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $left
	 * @param \Avalonia\Styling\ThemeVariant $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $left
	 * @param \Avalonia\Styling\ThemeVariant $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $inheritVariant
	 */
	public function __construct($key, $inheritVariant){}
}
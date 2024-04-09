<?php
namespace Avalonia\Platform;
class PlatformColorValues extends \System\Object implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Platform\PlatformThemeVariant
	 */
	public $ThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Platform\ColorContrastPreference
	 */
	public $ContrastPreference;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $AccentColor1;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $AccentColor2;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $AccentColor3;
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean|bool
	 */
	protected function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $left
	 * @param \Avalonia\Platform\PlatformColorValues $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $left
	 * @param \Avalonia\Platform\PlatformColorValues $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 */
	public function __construct(){}
}
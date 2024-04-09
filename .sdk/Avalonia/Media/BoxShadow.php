<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BoxShadowOverride {
	/**
	 * @deprecated
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ToString_1 ($sb){}
}
final class BoxShadow extends \System\ValueType
{
	use BoxShadowOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OffsetX;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OffsetY;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Blur;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Spread;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $Color;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsInset;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\BoxShadow
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Rect& &$rect
	 * @return \Avalonia\Rect
	 */
	public function TransformBounds(&$rect){}
	/**
	 * @param \Avalonia\Media\BoxShadow $left
	 * @param \Avalonia\Media\BoxShadow $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\BoxShadow $left
	 * @param \Avalonia\Media\BoxShadow $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
}
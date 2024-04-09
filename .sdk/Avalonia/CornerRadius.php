<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CornerRadiusOverride {
	/**
	 * @param \System\Double|double $uniformRadius
	 */
	#[MethodOverride]public function __construct_1 ($uniformRadius){}
	/**
	 * @param \System\Double|double $top
	 * @param \System\Double|double $bottom
	 */
	#[MethodOverride]public function __construct_2 ($top, $bottom){}
	/**
	 * @param \System\Double|double $topLeft
	 * @param \System\Double|double $topRight
	 * @param \System\Double|double $bottomRight
	 * @param \System\Double|double $bottomLeft
	 */
	#[MethodOverride]public function __construct_3 ($topLeft, $topRight, $bottomRight, $bottomLeft){}
}
final class CornerRadius extends \System\ValueType implements
	\System\IEquatable_1
{
	use CornerRadiusOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TopLeft;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TopRight;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $BottomRight;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $BottomLeft;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUniform;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\CornerRadius
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\CornerRadius $left
	 * @param \Avalonia\CornerRadius $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\CornerRadius $left
	 * @param \Avalonia\CornerRadius $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses CornerRadiusOverride::__construct_1 <br>public , args: ($uniformRadius)<br>
	 * @uses CornerRadiusOverride::__construct_2 <br>public , args: ($top, $bottom)<br>
	 * @uses CornerRadiusOverride::__construct_3 <br>public , args: ($topLeft, $topRight, $bottomRight, $bottomLeft)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
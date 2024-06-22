<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThicknessOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \Avalonia\Thickness
	 */
	#[MethodOverride]public static function op_Addition_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Addition_2 ($size, $thickness){}
	/**
	 * @deprecated
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \Avalonia\Thickness
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Thickness $thickness
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public static function op_Subtraction_2 ($size, $thickness){}
	/**
	 * @param \System\Double|double $uniformLength
	 */
	#[MethodOverride]public function __construct_1 ($uniformLength){}
	/**
	 * @param \System\Double|double $horizontal
	 * @param \System\Double|double $vertical
	 */
	#[MethodOverride]public function __construct_2 ($horizontal, $vertical){}
	/**
	 * @param \System\Double|double $left
	 * @param \System\Double|double $top
	 * @param \System\Double|double $right
	 * @param \System\Double|double $bottom
	 */
	#[MethodOverride]public function __construct_3 ($left, $top, $right, $bottom){}
}
final class Thickness extends \System\ValueType implements
	\System\IEquatable_1
{
	use ThicknessOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Left;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Top;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Right;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Bottom;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUniform;
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \Avalonia\Thickness $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses ThicknessOverride::op_Addition_1 <br>public , args: ($a, $b)<br>
	 * @uses ThicknessOverride::op_Addition_2 <br>public , args: ($size, $thickness)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Thickness|\Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function op_Addition (\override ...$args){}
	/**
	 * @uses ThicknessOverride::op_Subtraction_1 <br>public , args: ($a, $b)<br>
	 * @uses ThicknessOverride::op_Subtraction_2 <br>public , args: ($size, $thickness)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Thickness|\Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @param \Avalonia\Thickness $a
	 * @param \System\Double|double $b
	 * @return \Avalonia\Thickness
	 */
	public static function op_Multiply($a, $b){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Thickness
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Double& &$left
	 * @param \System\Double& &$top
	 * @param \System\Double& &$right
	 * @param \System\Double& &$bottom
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$left, &$top, &$right, &$bottom){}
	/**
	 * @uses ThicknessOverride::__construct_1 <br>public , args: ($uniformLength)<br>
	 * @uses ThicknessOverride::__construct_2 <br>public , args: ($horizontal, $vertical)<br>
	 * @uses ThicknessOverride::__construct_3 <br>public , args: ($left, $top, $right, $bottom)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MatrixOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $xScale
	 * @param \System\Double|double $yScale
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride]public static function CreateScale_1 ($xScale, $yScale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $scales
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride]public static function CreateScale_2 ($scales){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $position
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride]public static function CreateTranslation_1 ($position){}
	/**
	 * @deprecated
	 * @param \System\Double|double $xPosition
	 * @param \System\Double|double $yPosition
	 * @return \Avalonia\Matrix
	 */
	#[MethodOverride]public static function CreateTranslation_2 ($xPosition, $yPosition){}
	/**
	 * @param \System\Double|double $scaleX
	 * @param \System\Double|double $skewY
	 * @param \System\Double|double $skewX
	 * @param \System\Double|double $scaleY
	 * @param \System\Double|double $offsetX
	 * @param \System\Double|double $offsetY
	 */
	#[MethodOverride]public function __construct_1 ($scaleX, $skewY, $skewX, $scaleY, $offsetX, $offsetY){}
	/**
	 * @param \System\Double|double $scaleX
	 * @param \System\Double|double $skewY
	 * @param \System\Double|double $perspX
	 * @param \System\Double|double $skewX
	 * @param \System\Double|double $scaleY
	 * @param \System\Double|double $perspY
	 * @param \System\Double|double $offsetX
	 * @param \System\Double|double $offsetY
	 * @param \System\Double|double $perspZ
	 */
	#[MethodOverride]public function __construct_2 ($scaleX, $skewY, $perspX, $skewX, $scaleY, $perspY, $offsetX, $offsetY, $perspZ){}
}
final class Matrix extends \System\ValueType implements
	\System\IEquatable_1
{
	use MatrixOverride;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Identity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsIdentity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasInverse;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M11;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M12;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M13;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M21;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M22;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M23;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M31;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M32;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $M33;
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \Avalonia\Matrix
	 */
	public static function op_Multiply($value1, $value2){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \Avalonia\Matrix $value1
	 * @param \Avalonia\Matrix $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @param \System\Double|double $radians
	 * @return \Avalonia\Matrix
	 */
	public static function CreateRotation($radians){}
	/**
	 * @param \System\Double|double $xAngle
	 * @param \System\Double|double $yAngle
	 * @return \Avalonia\Matrix
	 */
	public static function CreateSkew($xAngle, $yAngle){}
	/**
	 * @uses MatrixOverride::CreateScale_1 <br>public , args: ($xScale, $yScale)<br>
	 * @uses MatrixOverride::CreateScale_2 <br>public , args: ($scales)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Matrix|mixed|\override
	 */
	#[MethodOverridePublic]function CreateScale (\override ...$args){}
	/**
	 * @uses MatrixOverride::CreateTranslation_1 <br>public , args: ($position)<br>
	 * @uses MatrixOverride::CreateTranslation_2 <br>public , args: ($xPosition, $yPosition)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Matrix|mixed|\override
	 */
	#[MethodOverridePublic]function CreateTranslation (\override ...$args){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Double|double
	 */
	public static function ToRadians($angle){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public function Append($value){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \Avalonia\Matrix
	 */
	public function Prepend($value){}
	/**
	 * @return \System\Double|double
	 */
	public function GetDeterminant(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \Avalonia\Point
	 */
	public function Transform($p){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function ContainsPerspective(){}
	/**
	 * @param \Avalonia\Matrix& &$inverted
	 * @return \System\Boolean|bool
	 */
	public function TryInvert(&$inverted){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public function Invert(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Matrix
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @param \Avalonia\Matrix+Decomposed& &$decomposed
	 * @return \System\Boolean|bool
	 */
	public static function TryDecomposeTransform($matrix, &$decomposed){}
	/**
	 * @uses MatrixOverride::__construct_1 <br>public , args: ($scaleX, $skewY, $skewX, $scaleY, $offsetX, $offsetY)<br>
	 * @uses MatrixOverride::__construct_2 <br>public , args: ($scaleX, $skewY, $perspX, $skewX, $scaleY, $perspY, $offsetX, $offsetY, $perspZ)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
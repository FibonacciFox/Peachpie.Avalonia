<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeySplineOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $x1
	 * @param \System\Double|double $y1
	 * @param \System\Double|double $x2
	 * @param \System\Double|double $y2
	 */
	#[MethodOverride]public function __construct_2 ($x1, $y1, $x2, $y2){}
}
final class KeySpline extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use KeySplineOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ControlPointX1;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ControlPointY1;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ControlPointX2;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ControlPointY2;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\KeySpline
	 */
	public static function Parse($value, $culture){}
	/**
	 * @param \System\Double|double $linearProgress
	 * @return \System\Double|double
	 */
	public function GetSplineProgress($linearProgress){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsValid(){}
	private static function IsValidXValue($value){}
	private function Build(){}
	private static function GetBezierValue($b, $c, $t){}
	private function GetXAndDx($t, &$x, &$dx){}
	private function SetParameterFromX($time){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses KeySplineOverride::__construct_1 <br>public , args: ()<br>
	 * @uses KeySplineOverride::__construct_2 <br>public , args: ($x1, $y1, $x2, $y2)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeySplineTypeConverterOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $mass
	 * @param \System\Double|double $stiffness
	 * @param \System\Double|double $damping
	 * @param \System\Double|double $initialVelocity
	 */
	#[MethodOverride]public function __construct_2 ($mass, $stiffness, $damping, $initialVelocity){}
}
class Spring extends \System\Object
{
	use KeySplineTypeConverterOverride;

	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Mass;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Stiffness;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Damping;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $InitialVelocity;
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\Spring
	 */
	public static function Parse($value, $culture){}
	/**
	 * @param \System\Double|double $linearProgress
	 * @return \System\Double|double
	 */
	public function GetSpringProgress($linearProgress){}
	private function Build(){}
	/**
	 * @uses SpringOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SpringOverride::__construct_2 <br>public , args: ($mass, $stiffness, $damping, $initialVelocity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
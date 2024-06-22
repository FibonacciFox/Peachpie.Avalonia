<?php
namespace Avalonia\Animation\Easings;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EasingTypeConverterOverride {
	/**
	 * @param \System\Double|double $mass
	 * @param \System\Double|double $stiffness
	 * @param \System\Double|double $damping
	 * @param \System\Double|double $initialVelocity
	 */
	#[MethodOverride]public function __construct_1 ($mass, $stiffness, $damping, $initialVelocity){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
class SpringEasing extends \Avalonia\Animation\Easings\Easing implements
	\Avalonia\Animation\Easings\IEasing
{
	use EasingTypeConverterOverride;

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
	 * @uses SpringEasingOverride::__construct_1 <br>public , args: ($mass, $stiffness, $damping, $initialVelocity)<br>
	 * @uses SpringEasingOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
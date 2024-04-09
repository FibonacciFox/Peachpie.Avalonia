<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InterpolatingAnimator_1Override {
	/**
	 * @deprecated
	 * @return \Avalonia\Animation\IAnimator
	 */
	#[MethodOverride]private function CreateWrapper_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Animation\IAnimator
	 */
	#[MethodOverride]protected function CreateWrapper_2 (){}
}
class InterpolatingAnimator_1 extends \System\Object implements
	\Avalonia\Animation\ICustomAnimator
{
	use InterpolatingAnimator_1Override;

	/**
	 * @param \System\Double|double $progress
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \T|object
	 */
	abstract public function Interpolate($progress, $oldValue, $newValue);
	private function get_WrapperType(){}
	/**
	 * @uses InterpolatingAnimator_1Override::CreateWrapper_1 <br>private , args: ()<br>
	 * @uses InterpolatingAnimator_1Override::CreateWrapper_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Animation\IAnimator|mixed|\override
	 */
	#[MethodOverrideProtected]function CreateWrapper (){}
}
<?php
namespace Avalonia\Animation;
class CustomAnimatorBase_1 extends \Avalonia\Animation\CustomAnimatorBase
{


	/**
	 * @param \System\Double|double $progress
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \T|object
	 */
	abstract public function Interpolate($progress, $oldValue, $newValue);
}
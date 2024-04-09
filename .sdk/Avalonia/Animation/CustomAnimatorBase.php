<?php
namespace Avalonia\Animation;
class CustomAnimatorBase extends \System\Object
{

	/**
	 * @return \Avalonia\Animation\IAnimator
	 */
	abstract protected function CreateWrapper();
}
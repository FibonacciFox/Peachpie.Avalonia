<?php
namespace Avalonia\Animation;
interface ICustomAnimator
{


	/**
	 * @return \Avalonia\Animation\IAnimator
	 */
	protected function CreateWrapper();
}
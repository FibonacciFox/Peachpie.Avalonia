<?php
namespace Avalonia\Animation;
/**
 */
class CustomAnimatorBase extends \System\Object
{
	/**
	 * @return \Avalonia\Animation\IAnimator
	 */
	protected  function CreateWrapper(){}
	/**
	 * @return \System\Type
	 */
	protected  function get_WrapperType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

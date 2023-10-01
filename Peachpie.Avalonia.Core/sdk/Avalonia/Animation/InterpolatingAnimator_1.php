<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InterpolatingAnimator_1MethodsOverride
{
	/**
	 * @return \Avalonia\Animation\IAnimator
	 */
	#[MethodOverride] private  function CreateWrapper_1(){}
	/**
	 * @return \Avalonia\Animation\IAnimator
	 */
	#[MethodOverride] protected  function CreateWrapper_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class InterpolatingAnimator_1 extends \System\Object implements 
	\Avalonia\Animation\ICustomAnimator
{
	/**
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Animation\T $oldValue
	 * @param \Avalonia\Animation\T $newValue
	 * @return \Avalonia\Animation\T
	 */
	public  function Interpolate($progress, $oldValue, $newValue){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_WrapperType(){}
	/**
	 * @uses InterpolatingAnimator_1MethodsOverride::CreateWrapper_1 ()
	 * @uses InterpolatingAnimator_1MethodsOverride::CreateWrapper_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateWrapper(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

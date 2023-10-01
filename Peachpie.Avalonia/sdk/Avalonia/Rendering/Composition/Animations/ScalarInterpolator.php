<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class ScalarInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @param \System\Single $from
	 * @param \System\Single $to
	 * @param \System\Single $progress
	 * @return \System\Single
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ScalarInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

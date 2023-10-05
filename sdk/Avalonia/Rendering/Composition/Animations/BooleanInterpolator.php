<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class BooleanInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\BooleanInterpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Boolean $from
	 * @param \System\Boolean $to
	 * @param \System\Single $progress
	 * @return \System\Boolean
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\BooleanInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

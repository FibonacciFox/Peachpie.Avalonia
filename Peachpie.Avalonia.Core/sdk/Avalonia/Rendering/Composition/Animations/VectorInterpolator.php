<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class VectorInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @param \Avalonia\Vector $from
	 * @param \Avalonia\Vector $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Vector
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\VectorInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

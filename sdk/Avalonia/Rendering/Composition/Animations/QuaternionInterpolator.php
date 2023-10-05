<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class QuaternionInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\QuaternionInterpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Numerics\Quaternion $from
	 * @param \System\Numerics\Quaternion $to
	 * @param \System\Single $progress
	 * @return \System\Numerics\Quaternion
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\QuaternionInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

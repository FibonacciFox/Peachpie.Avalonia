<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class Vector3Interpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\Vector3Interpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Numerics\Vector3 $from
	 * @param \System\Numerics\Vector3 $to
	 * @param \System\Single $progress
	 * @return \System\Numerics\Vector3
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\Vector3Interpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

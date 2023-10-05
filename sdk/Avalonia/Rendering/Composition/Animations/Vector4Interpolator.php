<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class Vector4Interpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\Vector4Interpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Numerics\Vector4 $from
	 * @param \System\Numerics\Vector4 $to
	 * @param \System\Single $progress
	 * @return \System\Numerics\Vector4
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\Vector4Interpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class Vector3DInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\Vector3DInterpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \Avalonia\Vector3D $from
	 * @param \Avalonia\Vector3D $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Vector3D
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\Vector3DInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

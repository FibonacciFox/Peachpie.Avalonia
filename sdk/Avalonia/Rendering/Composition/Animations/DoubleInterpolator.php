<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class DoubleInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\DoubleInterpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Double|double $from
	 * @param \System\Double|double $to
	 * @param \System\Single $progress
	 * @return \System\Double|double
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\DoubleInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

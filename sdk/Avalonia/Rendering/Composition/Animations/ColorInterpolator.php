<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
class ColorInterpolator extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\ColorInterpolator
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @param \System\Single $a
	 * @param \System\Single $b
	 * @param \System\Single $p
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Lerp($a, $b, $p){}
	/**
	 * @param \Avalonia\Media\Color $to
	 * @param \Avalonia\Media\Color $from
	 * @param \System\Single $progress
	 * @return \Avalonia\Media\Color
	 */
	public static function LerpRGB($to, $from, $progress){}
	/**
	 * @param \Avalonia\Media\Color $from
	 * @param \Avalonia\Media\Color $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Media\Color
	 */
	public  function Interpolate($from, $to, $progress){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ColorInterpolator
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

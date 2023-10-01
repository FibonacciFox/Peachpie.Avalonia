<?php
namespace Avalonia\Animation\Easings;
/**
 */
class CubicBezierEasing extends \System\Object implements 
	\Avalonia\Animation\Easings\IEasing
{
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_ControlPoint2(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPoint2($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_ControlPoint1(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPoint1($value){}
	/**
	 * @return \Avalonia\Animation\Easings\IEasing
	 */
	protected static function get_Ease(){}
	/**
	 * @param \System\Double|double $progress
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Ease($progress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

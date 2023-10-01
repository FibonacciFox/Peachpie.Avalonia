<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 */
class VelocityTracker extends \System\Object
{
	/**
	 * @param \System\TimeSpan $time
	 * @param \Avalonia\Vector $position
	 * @return \System\Void|void
	 */
	public  function AddPosition($time, $position){}
	/**
	 * @return \Avalonia\Input\GestureRecognizers\VelocityEstimate
	 */
	protected  function GetVelocityEstimate(){}
	/**
	 * @return \Avalonia\Input\GestureRecognizers\Velocity
	 */
	protected  function GetVelocity(){}
	/**
	 * @return \Avalonia\Input\GestureRecognizers\Velocity
	 */
	protected  function GetFlingVelocity(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

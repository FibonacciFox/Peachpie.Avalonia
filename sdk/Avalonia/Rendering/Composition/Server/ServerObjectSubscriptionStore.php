<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class ServerObjectSubscriptionStore extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $IsValid;
	/**
	 * @var \Avalonia\Utilities\RefTrackingDictionary_1[Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	public $Subscribers;
	/**
	 * @return \System\Void|void
	 */
	public  function Invalidate(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

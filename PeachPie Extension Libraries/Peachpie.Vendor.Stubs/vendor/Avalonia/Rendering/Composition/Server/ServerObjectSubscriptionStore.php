<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerObjectSubscriptionStore extends \System\Object
{
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $IsValid;
	/**
	 * @field
	 * @var \Avalonia\Utilities\RefTrackingDictionary_1[Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	public $Subscribers;
	/**
	 * @return \System\Void|void
	 */
	public function Invalidate(){}
	/**
	 */
	public function __construct(){}
}
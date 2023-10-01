<?php
namespace Avalonia\Controls;
/**
 */
interface IResourceHost
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_ResourcesChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_ResourcesChanged($value);
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 */
	public function NotifyHostedResourcesChanged($e);
}

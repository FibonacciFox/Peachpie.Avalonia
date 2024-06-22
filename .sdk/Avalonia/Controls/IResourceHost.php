<?php
namespace Avalonia\Controls;
/**
 * @method \System\Void|void add_ResourcesChanged($value) [modifier: public]
 * @method \System\Void|void remove_ResourcesChanged($value) [modifier: public]
*/
interface IResourceHost
{


	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function NotifyHostedResourcesChanged($e);
}
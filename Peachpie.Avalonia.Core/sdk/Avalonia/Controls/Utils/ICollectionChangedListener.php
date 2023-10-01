<?php
namespace Avalonia\Controls\Utils;
/**
 */
interface ICollectionChangedListener
{
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 */
	public function PreChanged($sender, $e);
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 */
	public function Changed($sender, $e);
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 */
	public function PostChanged($sender, $e);
}

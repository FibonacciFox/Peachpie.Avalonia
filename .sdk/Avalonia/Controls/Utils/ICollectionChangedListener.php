<?php
namespace Avalonia\Controls\Utils;
interface ICollectionChangedListener
{


	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function PreChanged($sender, $e);
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function Changed($sender, $e);
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	public function PostChanged($sender, $e);
}
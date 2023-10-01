<?php
namespace Avalonia\Controls;
/**
 */
interface IResourceProvider
{
	/**
	 */
	public function get_Owner();
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_OwnerChanged($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_OwnerChanged($value);
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 */
	public function AddOwner($owner);
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 */
	public function RemoveOwner($owner);
}

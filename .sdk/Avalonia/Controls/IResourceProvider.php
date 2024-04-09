<?php
namespace Avalonia\Controls;
/**
 * @method \System\Void|void add_OwnerChanged($value) [modifier: public]
 * @method \System\Void|void remove_OwnerChanged($value) [modifier: public]
*/
interface IResourceProvider
{

	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @return \System\Void|void
	 */
	public function AddOwner($owner);
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @return \System\Void|void
	 */
	public function RemoveOwner($owner);
}
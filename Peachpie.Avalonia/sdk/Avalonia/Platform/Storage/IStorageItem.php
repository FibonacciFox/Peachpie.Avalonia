<?php
namespace Avalonia\Platform\Storage;
/**
 */
interface IStorageItem
{
	/**
	 */
	public function get_Name();
	/**
	 */
	public function get_Path();
	/**
	 */
	public function GetBasicPropertiesAsync();
	/**
	 */
	public function get_CanBookmark();
	/**
	 */
	public function SaveBookmarkAsync();
	/**
	 */
	public function GetParentAsync();
	/**
	 */
	public function DeleteAsync();
	/**
	 * @param \Avalonia\Platform\Storage\IStorageFolder $destination
	 */
	public function MoveAsync($destination);
}

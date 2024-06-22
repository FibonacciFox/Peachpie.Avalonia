<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BclStorageFileOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_1 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
}
class BclStorageFile extends \System\Object implements
	\Avalonia\Platform\Storage\IStorageBookmarkFile,
	\Avalonia\Platform\Storage\IStorageFile,
	\Avalonia\Platform\Storage\IStorageItem,
	\System\IDisposable,
	\Avalonia\Platform\Storage\IStorageBookmarkItem
{
	use BclStorageFileOverride;

	/**
	 * @property
	 * @var \System\IO\FileInfo
	 * @since readonly
	 */
	public $FileInfo;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanBookmark;
	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $Path;
	/**
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\StorageItemProperties]
	 */
	public function GetBasicPropertiesAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function GetParentAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[System\IO\Stream]
	 */
	public function OpenReadAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[System\IO\Stream]
	 */
	public function OpenWriteAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function SaveBookmarkAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function ReleaseBookmarkAsync(){}
	/**
	 * @uses BclStorageFileOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses BclStorageFileOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function DeleteAsync(){}
	/**
	 * @param \Avalonia\Platform\Storage\IStorageFolder $destination
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageItem]
	 */
	public function MoveAsync($destination){}
	/**
	 * @param \System\IO\FileInfo $fileInfo
	 */
	public function __construct($fileInfo){}
}
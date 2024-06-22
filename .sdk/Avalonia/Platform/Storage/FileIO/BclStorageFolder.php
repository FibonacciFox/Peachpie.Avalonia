<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BclStorageFolderOverride {
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
class BclStorageFolder extends \System\Object implements
	\Avalonia\Platform\Storage\IStorageBookmarkFolder,
	\Avalonia\Platform\Storage\IStorageFolder,
	\Avalonia\Platform\Storage\IStorageItem,
	\System\IDisposable,
	\Avalonia\Platform\Storage\IStorageBookmarkItem
{
	use BclStorageFolderOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\IO\DirectoryInfo
	 * @since readonly
	 */
	public $DirectoryInfo;
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
	 * @return \System\Collections\Generic\IAsyncEnumerable_1[Avalonia\Platform\Storage\IStorageItem]
	 */
	public function GetItemsAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function SaveBookmarkAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function ReleaseBookmarkAsync(){}
	/**
	 * @uses BclStorageFolderOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses BclStorageFolderOverride::Dispose_2 <br>public , args: ()<br>
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
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFile]
	 */
	public function CreateFileAsync($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Platform\Storage\IStorageFolder]
	 */
	public function CreateFolderAsync($name){}
	/**
	 * @param \System\IO\DirectoryInfo $directoryInfo
	 */
	public function __construct($directoryInfo){}
}
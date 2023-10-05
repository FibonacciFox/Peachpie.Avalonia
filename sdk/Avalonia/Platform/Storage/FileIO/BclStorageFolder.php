<?php
namespace Avalonia\Platform\Storage\FileIO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BclStorageFolderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class BclStorageFolder extends \System\Object implements 
	\Avalonia\Platform\Storage\IStorageBookmarkFolder,
	\Avalonia\Platform\Storage\IStorageFolder,
	\Avalonia\Platform\Storage\IStorageItem,
	\System\IDisposable,
	\Avalonia\Platform\Storage\IStorageBookmarkItem
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\IO\DirectoryInfo
	 * @property
	 */
	public readonly $DirectoryInfo;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanBookmark;
	/**
	 * @var \System\Uri
	 * @property
	 */
	public readonly $Path;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\IO\DirectoryInfo
	 */
	public  function get_DirectoryInfo(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanBookmark(){}
	/**
	 * @return \System\Uri
	 */
	public  function get_Path(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetBasicPropertiesAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetParentAsync(){}
	/**
	 * @return \System\Collections\Generic\IAsyncEnumerable_1
	 */
	public  function GetItemsAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function SaveBookmarkAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function ReleaseBookmarkAsync(){}
	/**
	 * @uses BclStorageFolderMethodsOverride::Dispose_1 ($disposing)
	 * @uses BclStorageFolderMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function DeleteAsync(){}
	/**
	 * @param \Avalonia\Platform\Storage\IStorageFolder $destination
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function MoveAsync($destination){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function CreateFileAsync($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function CreateFolderAsync($name){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Native;
/**
 */
class SystemDialogs extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanOpen;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanPickFolder;
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $fileTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PrepareFilterParameter($fileTypes){}
}

<?php
namespace Avalonia\FreeDesktop;
/**
 */
class DBusSystemDialog extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
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
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function TryCreateAsync($handle){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $fileTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFilters($fileTypes){}
}

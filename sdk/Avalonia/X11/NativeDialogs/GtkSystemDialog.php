<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
class GtkSystemDialog extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
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
	 * @param \Avalonia\X11\X11Window $window
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function TryCreate($window){}
	/**
	 * @param \System\String|string $title
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @param \Avalonia\X11\NativeDialogs\GtkFileChooserAction $action
	 * @param \System\Boolean $multiSelect
	 * @param \Avalonia\Platform\Storage\IStorageFolder $initialFolder
	 * @param \System\String|string $initialFileName
	 * @param \System\Collections\Generic\IEnumerable_1 $filters
	 * @param \System\String|string $defaultExtension
	 * @param \System\Boolean $overwritePrompt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowDialog($title, $parent, $action, $multiSelect, $initialFolder, $initialFileName, $filters, $defaultExtension, $overwritePrompt){}
	/**
	 * @param \System\IntPtr $chooser
	 * @param \Avalonia\Platform\IWindowImpl $parentWindow
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateParent($chooser, $parentWindow){}
}

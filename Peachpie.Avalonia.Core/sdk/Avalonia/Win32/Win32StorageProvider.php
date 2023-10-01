<?php
namespace Avalonia\Win32;
/**
 */
class Win32StorageProvider extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @param \System\Boolean $isOpenFile
	 * @param \System\Boolean $openFolder
	 * @param \System\Boolean $allowMultiple
	 * @param \System\Nullable_1 $showOverwritePrompt
	 * @param \System\String|string $title
	 * @param \System\String|string $suggestedFileName
	 * @param \Avalonia\Platform\Storage\IStorageFolder $folder
	 * @param \System\String|string $defaultExtension
	 * @param \System\Collections\Generic\IReadOnlyList_1 $filters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowFilePicker($isOpenFile, $openFolder, $allowMultiple, $showOverwritePrompt, $title, $suggestedFileName, $folder, $defaultExtension, $filters){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $shellItem
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAbsoluteFilePath($shellItem){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $filters
	 * @param \System\Int32& $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FiltersToPointer($filters, $length){}
}

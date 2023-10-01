<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IFileDialog
{
	/**
	 * @param \System\UInt16 $cFileTypes
	 * @param \System\Void* $rgFilterSpec
	 */
	public function SetFileTypes($cFileTypes, $rgFilterSpec);
	/**
	 * @param \System\UInt16 $iFileType
	 */
	public function SetFileTypeIndex($iFileType);
	/**
	 */
	public function get_FileTypeIndex();
	/**
	 * @param \System\Void* $pfde
	 */
	public function Advise($pfde);
	/**
	 * @param \System\Int32|int $dwCookie
	 */
	public function Unadvise($dwCookie);
	/**
	 * @param \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS $fos
	 */
	public function SetOptions($fos);
	/**
	 */
	public function get_Options();
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 */
	public function SetDefaultFolder($psi);
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 */
	public function SetFolder($psi);
	/**
	 */
	public function get_Folder();
	/**
	 */
	public function get_CurrentSelection();
	/**
	 * @param \System\Char* $pszName
	 */
	public function SetFileName($pszName);
	/**
	 */
	public function get_FileName();
	/**
	 * @param \System\Char* $pszTitle
	 */
	public function SetTitle($pszTitle);
	/**
	 * @param \System\Char* $pszText
	 */
	public function SetOkButtonLabel($pszText);
	/**
	 * @param \System\Char* $pszLabel
	 */
	public function SetFileNameLabel($pszLabel);
	/**
	 */
	public function get_Result();
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @param \System\Int32|int $fdap
	 */
	public function AddPlace($psi, $fdap);
	/**
	 * @param \System\Char* $pszDefaultExtension
	 */
	public function SetDefaultExtension($pszDefaultExtension);
	/**
	 * @param \System\Int32|int $hr
	 */
	public function Close($hr);
	/**
	 * @param \System\Guid* $guid
	 */
	public function SetClientGuid($guid);
	/**
	 */
	public function ClearClientData();
	/**
	 * @param \System\Void* $pFilter
	 */
	public function SetFilter($pFilter);
}

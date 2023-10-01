<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IVectorOfCompositionShape
{
	/**
	 */
	public function GetAt();
	/**
	 */
	public function GetSize();
	/**
	 */
	public function GetView();
	/**
	 */
	public function IndexOf();
	/**
	 */
	public function SetAt();
	/**
	 */
	public function InsertAt();
	/**
	 */
	public function RemoveAt();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionShape $value
	 */
	public function Append($value);
	/**
	 */
	public function RemoveAtEnd();
	/**
	 */
	public function Clear();
}

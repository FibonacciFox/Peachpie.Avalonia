<?php
namespace Avalonia\Win32;
/**
 */
class FramebufferData extends \System\ValueType
{
	/**
	 * @var \Avalonia\Platform\Internal\UnmanagedBlob
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RowBytes;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+BITMAPINFOHEADER
	 * @property
	 */
	public readonly $Header;
	/**
	 * @return \Avalonia\Platform\Internal\UnmanagedBlob
	 */
	public  function get_Data(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RowBytes(){}
	/**
	 * @return \Avalonia\Win32\Interop\BITMAPINFOHEADER
	 */
	public  function get_Header(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}

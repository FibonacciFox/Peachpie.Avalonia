<?php
namespace Avalonia\Win32\Interop;
/**
 */
class CANDIDATEFORM extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwStyle;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+POINT
	 * @field
	 */
	public $ptCurrentPos;
	/**
	 * @var \Avalonia\Win32\Interop\UnmanagedMethods+RECT
	 * @field
	 */
	public $rcArea;
}

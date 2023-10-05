<?php
namespace Avalonia\Native\Interop;
/**
 */
class AvnFramebuffer extends \System\ValueType
{
	/**
	 * @var \System\Void*
	 * @field
	 */
	public $Data;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Width;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Height;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Stride;
	/**
	 * @var \Avalonia\Native\Interop\AvnVector
	 * @field
	 */
	public $Dpi;
	/**
	 * @var \Avalonia\Native\Interop\AvnPixelFormat
	 * @field
	 */
	public $PixelFormat;
}

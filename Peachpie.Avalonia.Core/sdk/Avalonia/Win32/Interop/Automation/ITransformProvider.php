<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ITransformProvider
{
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 */
	public function Move($x, $y);
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 */
	public function Resize($width, $height);
	/**
	 * @param \System\Double|double $degrees
	 */
	public function Rotate($degrees);
	/**
	 */
	public function get_CanMove();
	/**
	 */
	public function get_CanResize();
	/**
	 */
	public function get_CanRotate();
}

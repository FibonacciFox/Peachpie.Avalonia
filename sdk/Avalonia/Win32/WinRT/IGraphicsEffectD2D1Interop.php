<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IGraphicsEffectD2D1Interop
{
	/**
	 */
	public function get_EffectId();
	/**
	 * @param \System\IntPtr $name
	 * @param \System\UInt32* $index
	 * @param \Avalonia\Win32\WinRT\GRAPHICS_EFFECT_PROPERTY_MAPPING* $mapping
	 */
	public function GetNamedPropertyMapping($name, $index, $mapping);
	/**
	 */
	public function get_PropertyCount();
	/**
	 * @param \System\UInt32 $index
	 */
	public function GetProperty($index);
	/**
	 * @param \System\UInt32 $index
	 */
	public function GetSource($index);
	/**
	 */
	public function get_SourceCount();
}

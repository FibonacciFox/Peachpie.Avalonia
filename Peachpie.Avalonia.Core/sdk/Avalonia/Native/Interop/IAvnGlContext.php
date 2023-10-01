<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnGlContext
{
	/**
	 */
	public function MakeCurrent();
	/**
	 */
	public function LegacyMakeCurrent();
	/**
	 */
	public function get_SampleCount();
	/**
	 */
	public function get_StencilSize();
	/**
	 */
	public function get_NativeHandle();
}

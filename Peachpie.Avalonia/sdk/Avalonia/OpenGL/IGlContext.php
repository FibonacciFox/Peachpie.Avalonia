<?php
namespace Avalonia\OpenGL;
/**
 */
interface IGlContext
{
	/**
	 */
	public function get_Version();
	/**
	 */
	public function get_GlInterface();
	/**
	 */
	public function get_SampleCount();
	/**
	 */
	public function get_StencilSize();
	/**
	 */
	public function MakeCurrent();
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 */
	public function IsSharedWith($context);
	/**
	 */
	public function get_CanCreateSharedContext();
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $preferredVersions
	 */
	public function CreateSharedContext($preferredVersions);
}

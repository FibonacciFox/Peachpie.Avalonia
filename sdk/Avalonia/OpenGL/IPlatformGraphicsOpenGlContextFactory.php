<?php
namespace Avalonia\OpenGL;
/**
 */
interface IPlatformGraphicsOpenGlContextFactory
{
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $versions
	 */
	public function CreateContext($versions);
}

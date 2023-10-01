<?php
namespace Avalonia\OpenGL\Surfaces;
/**
 */
interface IGlPlatformSurfaceRenderingSession
{
	/**
	 */
	public function get_Context();
	/**
	 */
	public function get_Size();
	/**
	 */
	public function get_Scaling();
	/**
	 */
	public function get_IsYFlipped();
}

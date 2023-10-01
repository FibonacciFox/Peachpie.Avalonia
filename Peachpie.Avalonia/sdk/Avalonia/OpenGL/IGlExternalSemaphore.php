<?php
namespace Avalonia\OpenGL;
/**
 */
interface IGlExternalSemaphore
{
	/**
	 * @param \Avalonia\OpenGL\IGlExternalImageTexture $texture
	 */
	public function WaitSemaphore($texture);
	/**
	 * @param \Avalonia\OpenGL\IGlExternalImageTexture $texture
	 */
	public function SignalSemaphore($texture);
}

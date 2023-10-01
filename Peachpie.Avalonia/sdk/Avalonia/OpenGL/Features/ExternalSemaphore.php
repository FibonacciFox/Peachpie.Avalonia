<?php
namespace Avalonia\OpenGL\Features;
/**
 */
class ExternalSemaphore extends \System\Object implements 
	\Avalonia\OpenGL\IGlExternalSemaphore,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\OpenGL\IGlExternalImageTexture $texture
	 * @return \System\Void|void
	 */
	public  function WaitSemaphore($texture){}
	/**
	 * @param \Avalonia\OpenGL\IGlExternalImageTexture $texture
	 * @return \System\Void|void
	 */
	public  function SignalSemaphore($texture){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

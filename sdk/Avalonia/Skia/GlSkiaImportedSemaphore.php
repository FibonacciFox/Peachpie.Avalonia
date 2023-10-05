<?php
namespace Avalonia\Skia;
/**
 */
class GlSkiaImportedSemaphore extends \System\Object implements 
	\Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore,
	\Avalonia\Platform\IPlatformRenderInterfaceImportedObject,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\OpenGL\IGlExternalSemaphore
	 * @property
	 */
	public readonly $Semaphore;
	/**
	 * @return \Avalonia\OpenGL\IGlExternalSemaphore
	 */
	public  function get_Semaphore(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

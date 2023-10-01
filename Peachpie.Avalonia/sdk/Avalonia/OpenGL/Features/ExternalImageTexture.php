<?php
namespace Avalonia\OpenGL\Features;
/**
 */
class ExternalImageTexture extends \System\Object implements 
	\Avalonia\OpenGL\IGlExternalImageTexture,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\UInt32 $key
	 * @return \System\Void|void
	 */
	public  function AcquireKeyedMutex($key){}
	/**
	 * @param \System\UInt32 $key
	 * @return \System\Void|void
	 */
	public  function ReleaseKeyedMutex($key){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextureId(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InternalFormat(){}
	/**
	 * @return \Avalonia\Platform\PlatformGraphicsExternalImageProperties
	 */
	public  function get_Properties(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

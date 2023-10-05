<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 */
class AngleExternalMemoryD3D11Texture2D extends \System\Object implements 
	\Avalonia\OpenGL\IGlExternalImageTexture,
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TextureId;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InternalFormat;
	/**
	 * @var \Avalonia\Platform\PlatformGraphicsExternalImageProperties
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Mutex(){}
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
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_TextureId($value){}
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

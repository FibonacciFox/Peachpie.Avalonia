<?php
namespace Avalonia\OpenGL;
/**
 */
interface IGlExternalImageTexture
{
	/**
	 * @param \System\UInt32 $key
	 */
	public function AcquireKeyedMutex($key);
	/**
	 * @param \System\UInt32 $key
	 */
	public function ReleaseKeyedMutex($key);
	/**
	 */
	public function get_TextureId();
	/**
	 */
	public function get_InternalFormat();
	/**
	 */
	public function get_Properties();
}

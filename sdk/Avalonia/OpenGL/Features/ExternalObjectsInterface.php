<?php
namespace Avalonia\OpenGL\Features;
/**
 */
class ExternalObjectsInterface extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsImportMemoryFdEXTAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsImportSemaphoreFdEXTAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGetUnsignedBytei_vEXTAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGetUnsignedBytevEXTAvailable;
	/**
	 * @param \System\UInt32 $memory
	 * @param \System\UInt64 $size
	 * @param \System\Int32|int $handleType
	 * @param \System\Int32|int $fd
	 * @return \System\Void|void
	 */
	public  function ImportMemoryFdEXT($memory, $size, $handleType, $fd){}
	/**
	 * @param \System\UInt32 $semaphore
	 * @param \System\Int32|int $handleType
	 * @param \System\Int32|int $fd
	 * @return \System\Void|void
	 */
	public  function ImportSemaphoreFdEXT($semaphore, $handleType, $fd){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\UInt32& $memoryObjects
	 * @return \System\Void|void
	 */
	public  function CreateMemoryObjectsEXT($n, $memoryObjects){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\UInt32& $objects
	 * @return \System\Void|void
	 */
	public  function DeleteMemoryObjectsEXT($n, $objects){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Int32|int $levels
	 * @param \System\Int32|int $internalFormat
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\UInt32 $memory
	 * @param \System\UInt64 $offset
	 * @return \System\Void|void
	 */
	public  function TexStorageMem2DEXT($target, $levels, $internalFormat, $width, $height, $memory, $offset){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\UInt32& $semaphores
	 * @return \System\Void|void
	 */
	public  function GenSemaphoresEXT($n, $semaphores){}
	/**
	 * @param \System\Int32|int $n
	 * @param \System\UInt32& $semaphores
	 * @return \System\Void|void
	 */
	public  function DeleteSemaphoresEXT($n, $semaphores){}
	/**
	 * @param \System\UInt32 $semaphore
	 * @param \System\UInt32 $numBufferBarriers
	 * @param \System\UInt32* $buffers
	 * @param \System\UInt32 $numTextureBarriers
	 * @param \System\Int32* $textures
	 * @param \System\Int32* $srcLayouts
	 * @return \System\Void|void
	 */
	public  function WaitSemaphoreEXT($semaphore, $numBufferBarriers, $buffers, $numTextureBarriers, $textures, $srcLayouts){}
	/**
	 * @param \System\UInt32 $semaphore
	 * @param \System\UInt32 $numBufferBarriers
	 * @param \System\UInt32* $buffers
	 * @param \System\UInt32 $numTextureBarriers
	 * @param \System\Int32* $textures
	 * @param \System\Int32* $dstLayouts
	 * @return \System\Void|void
	 */
	public  function SignalSemaphoreEXT($semaphore, $numBufferBarriers, $buffers, $numTextureBarriers, $textures, $dstLayouts){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\UInt32 $index
	 * @param \System\Byte* $data
	 * @return \System\Void|void
	 */
	public  function GetUnsignedBytei_vEXT($target, $index, $data){}
	/**
	 * @param \System\Int32|int $target
	 * @param \System\Byte* $data
	 * @return \System\Void|void
	 */
	public  function GetUnsignedBytevEXT($target, $data){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsImportMemoryFdEXTAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsImportSemaphoreFdEXTAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGetUnsignedBytei_vEXTAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGetUnsignedBytevEXTAvailable(){}
	/**
	 * @param \System\Func_2 $getProcAddress
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($getProcAddress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

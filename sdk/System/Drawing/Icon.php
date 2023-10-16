<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IconMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class Icon extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Height;
	/**
	 * @var \System\Drawing\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Width;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @return \System\Drawing\Size
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\String|string $filePath
	 * @return \System\Drawing\Icon
	 */
	public static function ExtractAssociatedIcon($filePath){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Drawing\Icon
	 */
	public static function FromHandle($handle){}
	/**
	 * @param \System\IO\Stream $outputStream
	 * @return \System\Void|void
	 */
	public  function Save($outputStream){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $si
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($si, $context){}
	/**
	 * @return \System\Drawing\Bitmap
	 */
	public  function ToBitmap(){}
	/**
	 * @uses IconMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses IconMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

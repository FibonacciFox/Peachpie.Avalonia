<?php
namespace System\Drawing\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MetafileMethodsOverride
{
	/**
	 * @return \System\Drawing\Imaging\MetafileHeader
	 */
	#[MethodOverride] public  function GetMetafileHeader_1(){}
	/**
	 * @return \System\Drawing\Imaging\MetafileHeader
	 */
	#[MethodOverride] public static function GetMetafileHeader_2($henhmetafile){}
	/**
	 * @return \System\Drawing\Imaging\MetafileHeader
	 */
	#[MethodOverride] public static function GetMetafileHeader_3($hmetafile, $wmfHeader){}
	/**
	 * @return \System\Drawing\Imaging\MetafileHeader
	 */
	#[MethodOverride] public static function GetMetafileHeader_4($stream){}
	/**
	 * @return \System\Drawing\Imaging\MetafileHeader
	 */
	#[MethodOverride] public static function GetMetafileHeader_5($fileName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_1($stream, $encoder, $encoderParams){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_2($stream, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_3($filename){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_4($filename, $encoder, $encoderParams){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_5($filename, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SaveAdd_1($image, $encoderParams){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SaveAdd_2($encoderParams){}
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
class Metafile extends \System\Drawing\Image implements 
	\System\ICloneable,
	\System\IDisposable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Flags;
	/**
	 * @var \System\Guid[]
	 * @property
	 */
	public readonly $FrameDimensionsList;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Height;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $HorizontalResolution;
	/**
	 * @var \System\Drawing\Imaging\ColorPalette
	 * @property
	 */
	public $Palette;
	/**
	 * @var \System\Drawing\SizeF
	 * @property
	 */
	public readonly $PhysicalDimension;
	/**
	 * @var \System\Drawing\Imaging\PixelFormat
	 * @property
	 */
	public readonly $PixelFormat;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public readonly $PropertyIdList;
	/**
	 * @var \System\Drawing\Imaging\PropertyItem[]
	 * @property
	 */
	public readonly $PropertyItems;
	/**
	 * @var \System\Drawing\Imaging\ImageFormat
	 * @property
	 */
	public readonly $RawFormat;
	/**
	 * @var \System\Drawing\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Tag;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $VerticalResolution;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Width;
	/**
	 * @return \System\IntPtr
	 */
	public  function GetHenhmetafile(){}
	/**
	 * @uses MetafileMethodsOverride::GetMetafileHeader_1 ()
	 * @uses MetafileMethodsOverride::GetMetafileHeader_2 ($henhmetafile)
	 * @uses MetafileMethodsOverride::GetMetafileHeader_3 ($hmetafile, $wmfHeader)
	 * @uses MetafileMethodsOverride::GetMetafileHeader_4 ($stream)
	 * @uses MetafileMethodsOverride::GetMetafileHeader_5 ($fileName)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMetafileHeader(mixed ...$args){}
	/**
	 * @param \System\Drawing\Imaging\EmfPlusRecordType $recordType
	 * @param \System\Int32|int $flags
	 * @param \System\Int32|int $dataSize
	 * @param \System\Byte[] $data
	 * @return \System\Void|void
	 */
	public  function PlayRecord($recordType, $flags, $dataSize, $data){}
	/**
	 * @uses MetafileMethodsOverride::Dispose_1 ()
	 * @uses MetafileMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses MetafileMethodsOverride::Save_1 ($stream, $encoder, $encoderParams)
	 * @uses MetafileMethodsOverride::Save_2 ($stream, $format)
	 * @uses MetafileMethodsOverride::Save_3 ($filename)
	 * @uses MetafileMethodsOverride::Save_4 ($filename, $encoder, $encoderParams)
	 * @uses MetafileMethodsOverride::Save_5 ($filename, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @uses MetafileMethodsOverride::SaveAdd_1 ($image, $encoderParams)
	 * @uses MetafileMethodsOverride::SaveAdd_2 ($encoderParams)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SaveAdd(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $si
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($si, $context){}
	/**
	 * @uses MetafileMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses MetafileMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

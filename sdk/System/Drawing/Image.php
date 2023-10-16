<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImageMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public static function FromFile_1($filename){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public static function FromFile_2($filename, $useEmbeddedColorManagement){}
	/**
	 * @return \System\Drawing\Bitmap
	 */
	#[MethodOverride] public static function FromHbitmap_1($hbitmap){}
	/**
	 * @return \System\Drawing\Bitmap
	 */
	#[MethodOverride] public static function FromHbitmap_2($hbitmap, $hpalette){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public static function FromStream_1($stream){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public static function FromStream_2($stream, $useEmbeddedColorManagement){}
	/**
	 * @return \System\Drawing\Image
	 */
	#[MethodOverride] public static function FromStream_3($stream, $useEmbeddedColorManagement, $validateImageData){}
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
class Image extends \System\MarshalByRefObject implements 
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
	 * @return \System\Int32|int
	 */
	public  function get_Flags(){}
	/**
	 * @return \System\Guid[]
	 */
	public  function get_FrameDimensionsList(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @return \System\Single
	 */
	public  function get_HorizontalResolution(){}
	/**
	 * @return \System\Drawing\Imaging\ColorPalette
	 */
	public  function get_Palette(){}
	/**
	 * @param \System\Drawing\Imaging\ColorPalette $value
	 * @return \System\Void|void
	 */
	public  function set_Palette($value){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	public  function get_PhysicalDimension(){}
	/**
	 * @return \System\Drawing\Imaging\PixelFormat
	 */
	public  function get_PixelFormat(){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_PropertyIdList(){}
	/**
	 * @return \System\Drawing\Imaging\PropertyItem[]
	 */
	public  function get_PropertyItems(){}
	/**
	 * @return \System\Drawing\Imaging\ImageFormat
	 */
	public  function get_RawFormat(){}
	/**
	 * @return \System\Drawing\Size
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Tag(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Tag($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_VerticalResolution(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses ImageMethodsOverride::Dispose_1 ()
	 * @uses ImageMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses ImageMethodsOverride::FromFile_1 ($filename)
	 * @uses ImageMethodsOverride::FromFile_2 ($filename, $useEmbeddedColorManagement)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromFile(mixed ...$args){}
	/**
	 * @uses ImageMethodsOverride::FromHbitmap_1 ($hbitmap)
	 * @uses ImageMethodsOverride::FromHbitmap_2 ($hbitmap, $hpalette)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromHbitmap(mixed ...$args){}
	/**
	 * @uses ImageMethodsOverride::FromStream_1 ($stream)
	 * @uses ImageMethodsOverride::FromStream_2 ($stream, $useEmbeddedColorManagement)
	 * @uses ImageMethodsOverride::FromStream_3 ($stream, $useEmbeddedColorManagement, $validateImageData)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromStream(mixed ...$args){}
	/**
	 * @param \System\Drawing\GraphicsUnit& $pageUnit
	 * @return \System\Drawing\RectangleF
	 */
	public  function GetBounds($pageUnit){}
	/**
	 * @param \System\Guid $encoder
	 * @return \System\Drawing\Imaging\EncoderParameters
	 */
	public  function GetEncoderParameterList($encoder){}
	/**
	 * @param \System\Drawing\Imaging\FrameDimension $dimension
	 * @return \System\Int32|int
	 */
	public  function GetFrameCount($dimension){}
	/**
	 * @param \System\Drawing\Imaging\PixelFormat $pixfmt
	 * @return \System\Int32|int
	 */
	public static function GetPixelFormatSize($pixfmt){}
	/**
	 * @param \System\Int32|int $propid
	 * @return \System\Drawing\Imaging\PropertyItem
	 */
	public  function GetPropertyItem($propid){}
	/**
	 * @param \System\Int32|int $thumbWidth
	 * @param \System\Int32|int $thumbHeight
	 * @param \System\Drawing\GetThumbnailImageAbort $callback
	 * @param \System\IntPtr $callbackData
	 * @return \System\Drawing\Image
	 */
	public  function GetThumbnailImage($thumbWidth, $thumbHeight, $callback, $callbackData){}
	/**
	 * @param \System\Drawing\Imaging\PixelFormat $pixfmt
	 * @return \System\Boolean
	 */
	public static function IsAlphaPixelFormat($pixfmt){}
	/**
	 * @param \System\Drawing\Imaging\PixelFormat $pixfmt
	 * @return \System\Boolean
	 */
	public static function IsCanonicalPixelFormat($pixfmt){}
	/**
	 * @param \System\Drawing\Imaging\PixelFormat $pixfmt
	 * @return \System\Boolean
	 */
	public static function IsExtendedPixelFormat($pixfmt){}
	/**
	 * @param \System\Int32|int $propid
	 * @return \System\Void|void
	 */
	public  function RemovePropertyItem($propid){}
	/**
	 * @param \System\Drawing\RotateFlipType $rotateFlipType
	 * @return \System\Void|void
	 */
	public  function RotateFlip($rotateFlipType){}
	/**
	 * @uses ImageMethodsOverride::Save_1 ($stream, $encoder, $encoderParams)
	 * @uses ImageMethodsOverride::Save_2 ($stream, $format)
	 * @uses ImageMethodsOverride::Save_3 ($filename)
	 * @uses ImageMethodsOverride::Save_4 ($filename, $encoder, $encoderParams)
	 * @uses ImageMethodsOverride::Save_5 ($filename, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @uses ImageMethodsOverride::SaveAdd_1 ($image, $encoderParams)
	 * @uses ImageMethodsOverride::SaveAdd_2 ($encoderParams)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SaveAdd(mixed ...$args){}
	/**
	 * @param \System\Drawing\Imaging\FrameDimension $dimension
	 * @param \System\Int32|int $frameIndex
	 * @return \System\Int32|int
	 */
	public  function SelectActiveFrame($dimension, $frameIndex){}
	/**
	 * @param \System\Drawing\Imaging\PropertyItem $propitem
	 * @return \System\Void|void
	 */
	public  function SetPropertyItem($propitem){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $si
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($si, $context){}
	/**
	 * @uses ImageMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses ImageMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

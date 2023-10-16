<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BitmapMethodsOverride
{
	/**
	 * @return \System\Drawing\Bitmap
	 */
	#[MethodOverride] public  function Clone_1($rect, $format){}
	/**
	 * @return \System\Drawing\Bitmap
	 */
	#[MethodOverride] public  function Clone_2($rect, $format){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Clone_3(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public  function GetHbitmap_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public  function GetHbitmap_2($background){}
	/**
	 * @return \System\Drawing\Imaging\BitmapData
	 */
	#[MethodOverride] public  function LockBits_1($rect, $flags, $format){}
	/**
	 * @return \System\Drawing\Imaging\BitmapData
	 */
	#[MethodOverride] public  function LockBits_2($rect, $flags, $format, $bitmapData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MakeTransparent_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MakeTransparent_2($transparentColor){}
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
class Bitmap extends \System\Drawing\Image implements 
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
	 * @uses BitmapMethodsOverride::Clone_1 ($rect, $format)
	 * @uses BitmapMethodsOverride::Clone_2 ($rect, $format)
	 * @uses BitmapMethodsOverride::Clone_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clone(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hicon
	 * @return \System\Drawing\Bitmap
	 */
	public static function FromHicon($hicon){}
	/**
	 * @param \System\IntPtr $hinstance
	 * @param \System\String|string $bitmapName
	 * @return \System\Drawing\Bitmap
	 */
	public static function FromResource($hinstance, $bitmapName){}
	/**
	 * @uses BitmapMethodsOverride::GetHbitmap_1 ()
	 * @uses BitmapMethodsOverride::GetHbitmap_2 ($background)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHbitmap(mixed ...$args){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetHicon(){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Drawing\Color
	 */
	public  function GetPixel($x, $y){}
	/**
	 * @uses BitmapMethodsOverride::LockBits_1 ($rect, $flags, $format)
	 * @uses BitmapMethodsOverride::LockBits_2 ($rect, $flags, $format, $bitmapData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LockBits(mixed ...$args){}
	/**
	 * @uses BitmapMethodsOverride::MakeTransparent_1 ()
	 * @uses BitmapMethodsOverride::MakeTransparent_2 ($transparentColor)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeTransparent(mixed ...$args){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Drawing\Color $color
	 * @return \System\Void|void
	 */
	public  function SetPixel($x, $y, $color){}
	/**
	 * @param \System\Single $xDpi
	 * @param \System\Single $yDpi
	 * @return \System\Void|void
	 */
	public  function SetResolution($xDpi, $yDpi){}
	/**
	 * @param \System\Drawing\Imaging\BitmapData $bitmapdata
	 * @return \System\Void|void
	 */
	public  function UnlockBits($bitmapdata){}
	/**
	 * @uses BitmapMethodsOverride::Dispose_1 ()
	 * @uses BitmapMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses BitmapMethodsOverride::Save_1 ($stream, $encoder, $encoderParams)
	 * @uses BitmapMethodsOverride::Save_2 ($stream, $format)
	 * @uses BitmapMethodsOverride::Save_3 ($filename)
	 * @uses BitmapMethodsOverride::Save_4 ($filename, $encoder, $encoderParams)
	 * @uses BitmapMethodsOverride::Save_5 ($filename, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @uses BitmapMethodsOverride::SaveAdd_1 ($image, $encoderParams)
	 * @uses BitmapMethodsOverride::SaveAdd_2 ($encoderParams)
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
	 * @uses BitmapMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses BitmapMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

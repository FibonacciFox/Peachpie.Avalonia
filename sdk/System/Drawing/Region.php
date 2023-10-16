<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RegionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Complement_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Complement_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Complement_3($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Complement_4($region){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($region, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exclude_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exclude_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exclude_3($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Exclude_4($region){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Intersect_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Intersect_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Intersect_3($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Intersect_4($region){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_1($point){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_2($point, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_3($point){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_4($point, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_5($rect){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_6($rect, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_7($rect){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_8($rect, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_9($x, $y, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_10($x, $y, $width, $height){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_11($x, $y, $width, $height, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_12($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_13($x, $y, $g){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_14($x, $y, $width, $height){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_15($x, $y, $width, $height, $g){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Translate_1($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Translate_2($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Union_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Union_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Union_3($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Union_4($region){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Xor_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Xor_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Xor_3($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Xor_4($region){}
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
class Region extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @return \System\Drawing\Region
	 */
	public  function Clone(){}
	/**
	 * @uses RegionMethodsOverride::Complement_1 ($path)
	 * @uses RegionMethodsOverride::Complement_2 ($rect)
	 * @uses RegionMethodsOverride::Complement_3 ($rect)
	 * @uses RegionMethodsOverride::Complement_4 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Complement(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses RegionMethodsOverride::Equals_1 ($region, $g)
	 * @uses RegionMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses RegionMethodsOverride::Exclude_1 ($path)
	 * @uses RegionMethodsOverride::Exclude_2 ($rect)
	 * @uses RegionMethodsOverride::Exclude_3 ($rect)
	 * @uses RegionMethodsOverride::Exclude_4 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Exclude(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hrgn
	 * @return \System\Drawing\Region
	 */
	public static function FromHrgn($hrgn){}
	/**
	 * @param \System\Drawing\Graphics $g
	 * @return \System\Drawing\RectangleF
	 */
	public  function GetBounds($g){}
	/**
	 * @param \System\Drawing\Graphics $g
	 * @return \System\IntPtr
	 */
	public  function GetHrgn($g){}
	/**
	 * @return \System\Drawing\Drawing2D\RegionData
	 */
	public  function GetRegionData(){}
	/**
	 * @param \System\Drawing\Drawing2D\Matrix $matrix
	 * @return \System\Drawing\RectangleF[]
	 */
	public  function GetRegionScans($matrix){}
	/**
	 * @uses RegionMethodsOverride::Intersect_1 ($path)
	 * @uses RegionMethodsOverride::Intersect_2 ($rect)
	 * @uses RegionMethodsOverride::Intersect_3 ($rect)
	 * @uses RegionMethodsOverride::Intersect_4 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Intersect(mixed ...$args){}
	/**
	 * @param \System\Drawing\Graphics $g
	 * @return \System\Boolean
	 */
	public  function IsEmpty($g){}
	/**
	 * @param \System\Drawing\Graphics $g
	 * @return \System\Boolean
	 */
	public  function IsInfinite($g){}
	/**
	 * @uses RegionMethodsOverride::IsVisible_1 ($point)
	 * @uses RegionMethodsOverride::IsVisible_2 ($point, $g)
	 * @uses RegionMethodsOverride::IsVisible_3 ($point)
	 * @uses RegionMethodsOverride::IsVisible_4 ($point, $g)
	 * @uses RegionMethodsOverride::IsVisible_5 ($rect)
	 * @uses RegionMethodsOverride::IsVisible_6 ($rect, $g)
	 * @uses RegionMethodsOverride::IsVisible_7 ($rect)
	 * @uses RegionMethodsOverride::IsVisible_8 ($rect, $g)
	 * @uses RegionMethodsOverride::IsVisible_9 ($x, $y, $g)
	 * @uses RegionMethodsOverride::IsVisible_10 ($x, $y, $width, $height)
	 * @uses RegionMethodsOverride::IsVisible_11 ($x, $y, $width, $height, $g)
	 * @uses RegionMethodsOverride::IsVisible_12 ($x, $y)
	 * @uses RegionMethodsOverride::IsVisible_13 ($x, $y, $g)
	 * @uses RegionMethodsOverride::IsVisible_14 ($x, $y, $width, $height)
	 * @uses RegionMethodsOverride::IsVisible_15 ($x, $y, $width, $height, $g)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsVisible(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function MakeEmpty(){}
	/**
	 * @return \System\Void|void
	 */
	public  function MakeInfinite(){}
	/**
	 * @param \System\IntPtr $regionHandle
	 * @return \System\Void|void
	 */
	public  function ReleaseHrgn($regionHandle){}
	/**
	 * @param \System\Drawing\Drawing2D\Matrix $matrix
	 * @return \System\Void|void
	 */
	public  function Transform($matrix){}
	/**
	 * @uses RegionMethodsOverride::Translate_1 ($dx, $dy)
	 * @uses RegionMethodsOverride::Translate_2 ($dx, $dy)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Translate(mixed ...$args){}
	/**
	 * @uses RegionMethodsOverride::Union_1 ($path)
	 * @uses RegionMethodsOverride::Union_2 ($rect)
	 * @uses RegionMethodsOverride::Union_3 ($rect)
	 * @uses RegionMethodsOverride::Union_4 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Union(mixed ...$args){}
	/**
	 * @uses RegionMethodsOverride::Xor_1 ($path)
	 * @uses RegionMethodsOverride::Xor_2 ($rect)
	 * @uses RegionMethodsOverride::Xor_3 ($rect)
	 * @uses RegionMethodsOverride::Xor_4 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Xor(mixed ...$args){}
	/**
	 * @uses RegionMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses RegionMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

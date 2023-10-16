<?php
namespace System\Drawing\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImageAttributesMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearColorKey_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearColorKey_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearColorMatrix_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearColorMatrix_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearGamma_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearGamma_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearNoOp_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearNoOp_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearOutputChannel_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearOutputChannel_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearOutputChannelColorProfile_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearOutputChannelColorProfile_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearRemapTable_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearRemapTable_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearThreshold_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearThreshold_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorKey_1($colorLow, $colorHigh){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorKey_2($colorLow, $colorHigh, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrices_1($newColorMatrix, $grayMatrix){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrices_2($newColorMatrix, $grayMatrix, $flags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrices_3($newColorMatrix, $grayMatrix, $mode, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrix_1($newColorMatrix){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrix_2($newColorMatrix, $flags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetColorMatrix_3($newColorMatrix, $mode, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetGamma_1($gamma){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetGamma_2($gamma, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetNoOp_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetNoOp_2($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOutputChannel_1($flags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOutputChannel_2($flags, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOutputChannelColorProfile_1($colorProfileFilename){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOutputChannelColorProfile_2($colorProfileFilename, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetRemapTable_1($map){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetRemapTable_2($map, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetThreshold_1($threshold){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetThreshold_2($threshold, $type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetWrapMode_1($mode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetWrapMode_2($mode, $color){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetWrapMode_3($mode, $color, $clamp){}
}
/**
 */
class ImageAttributes extends \System\Object implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function ClearBrushRemapTable(){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearColorKey_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearColorKey_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearColorKey(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearColorMatrix_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearColorMatrix_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearColorMatrix(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearGamma_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearGamma_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearGamma(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearNoOp_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearNoOp_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearNoOp(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearOutputChannel_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearOutputChannel_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearOutputChannel(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearOutputChannelColorProfile_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearOutputChannelColorProfile_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearOutputChannelColorProfile(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearRemapTable_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearRemapTable_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearRemapTable(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::ClearThreshold_1 ()
	 * @uses ImageAttributesMethodsOverride::ClearThreshold_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearThreshold(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Drawing\Imaging\ColorPalette $palette
	 * @param \System\Drawing\Imaging\ColorAdjustType $type
	 * @return \System\Void|void
	 */
	public  function GetAdjustedPalette($palette, $type){}
	/**
	 * @param \System\Drawing\Imaging\ColorMap[] $map
	 * @return \System\Void|void
	 */
	public  function SetBrushRemapTable($map){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetColorKey_1 ($colorLow, $colorHigh)
	 * @uses ImageAttributesMethodsOverride::SetColorKey_2 ($colorLow, $colorHigh, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetColorKey(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetColorMatrices_1 ($newColorMatrix, $grayMatrix)
	 * @uses ImageAttributesMethodsOverride::SetColorMatrices_2 ($newColorMatrix, $grayMatrix, $flags)
	 * @uses ImageAttributesMethodsOverride::SetColorMatrices_3 ($newColorMatrix, $grayMatrix, $mode, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetColorMatrices(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetColorMatrix_1 ($newColorMatrix)
	 * @uses ImageAttributesMethodsOverride::SetColorMatrix_2 ($newColorMatrix, $flags)
	 * @uses ImageAttributesMethodsOverride::SetColorMatrix_3 ($newColorMatrix, $mode, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetColorMatrix(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetGamma_1 ($gamma)
	 * @uses ImageAttributesMethodsOverride::SetGamma_2 ($gamma, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetGamma(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetNoOp_1 ()
	 * @uses ImageAttributesMethodsOverride::SetNoOp_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetNoOp(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetOutputChannel_1 ($flags)
	 * @uses ImageAttributesMethodsOverride::SetOutputChannel_2 ($flags, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetOutputChannel(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetOutputChannelColorProfile_1 ($colorProfileFilename)
	 * @uses ImageAttributesMethodsOverride::SetOutputChannelColorProfile_2 ($colorProfileFilename, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetOutputChannelColorProfile(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetRemapTable_1 ($map)
	 * @uses ImageAttributesMethodsOverride::SetRemapTable_2 ($map, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetRemapTable(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetThreshold_1 ($threshold)
	 * @uses ImageAttributesMethodsOverride::SetThreshold_2 ($threshold, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetThreshold(mixed ...$args){}
	/**
	 * @uses ImageAttributesMethodsOverride::SetWrapMode_1 ($mode)
	 * @uses ImageAttributesMethodsOverride::SetWrapMode_2 ($mode, $color)
	 * @uses ImageAttributesMethodsOverride::SetWrapMode_3 ($mode, $color, $clamp)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetWrapMode(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

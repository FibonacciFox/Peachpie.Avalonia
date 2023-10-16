<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GraphicsMethodsOverride
{
	/**
	 * @return \System\Drawing\Drawing2D\GraphicsContainer
	 */
	#[MethodOverride] public  function BeginContainer_1(){}
	/**
	 * @return \System\Drawing\Drawing2D\GraphicsContainer
	 */
	#[MethodOverride] public  function BeginContainer_2($dstrect, $srcrect, $unit){}
	/**
	 * @return \System\Drawing\Drawing2D\GraphicsContainer
	 */
	#[MethodOverride] public  function BeginContainer_3($dstrect, $srcrect, $unit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyFromScreen_1($upperLeftSource, $upperLeftDestination, $blockRegionSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyFromScreen_2($upperLeftSource, $upperLeftDestination, $blockRegionSize, $copyPixelOperation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyFromScreen_3($sourceX, $sourceY, $destinationX, $destinationY, $blockRegionSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyFromScreen_4($sourceX, $sourceY, $destinationX, $destinationY, $blockRegionSize, $copyPixelOperation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawArc_1($pen, $rect, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawArc_2($pen, $rect, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawArc_3($pen, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawArc_4($pen, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBezier_1($pen, $pt1, $pt2, $pt3, $pt4){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBezier_2($pen, $pt1, $pt2, $pt3, $pt4){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBezier_3($pen, $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBeziers_1($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBeziers_2($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawClosedCurve_1($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawClosedCurve_2($pen, $points, $tension, $fillmode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawClosedCurve_3($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawClosedCurve_4($pen, $points, $tension, $fillmode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_1($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_2($pen, $points, $offset, $numberOfSegments){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_3($pen, $points, $offset, $numberOfSegments, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_4($pen, $points, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_5($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_6($pen, $points, $offset, $numberOfSegments, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawCurve_7($pen, $points, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_1($pen, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_2($pen, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_3($pen, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_4($pen, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawIcon_1($icon, $targetRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawIcon_2($icon, $x, $y){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_1($image, $point){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_2($image, $point){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_3($image, $destPoints){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_4($image, $destPoints, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_5($image, $destPoints, $srcRect, $srcUnit, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_6($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_7($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_8($image, $destPoints){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_9($image, $destPoints, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_10($image, $destPoints, $srcRect, $srcUnit, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_11($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_12($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_13($image, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_14($image, $destRect, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_15($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_16($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_17($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttr, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_18($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_19($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_20($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_21($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_22($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_23($image, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_24($image, $destRect, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_25($image, $x, $y){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_26($image, $x, $y, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_27($image, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_28($image, $x, $y){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_29($image, $x, $y, $srcRect, $srcUnit){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_30($image, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImageUnscaled_1($image, $point){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImageUnscaled_2($image, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImageUnscaled_3($image, $x, $y){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImageUnscaled_4($image, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLine_1($pen, $pt1, $pt2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLine_2($pen, $pt1, $pt2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLine_3($pen, $x1, $y1, $x2, $y2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLine_4($pen, $x1, $y1, $x2, $y2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLines_1($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawLines_2($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPie_1($pen, $rect, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPie_2($pen, $rect, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPie_3($pen, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPie_4($pen, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPolygon_1($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawPolygon_2($pen, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_1($pen, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($pen, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_3($pen, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangles_1($pen, $rects){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangles_2($pen, $rects){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_1($s, $font, $brush, $point){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_2($s, $font, $brush, $point, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_3($s, $font, $brush, $layoutRectangle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_4($s, $font, $brush, $layoutRectangle, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_5($s, $font, $brush, $x, $y){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawString_6($s, $font, $brush, $x, $y, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_1($metafile, $destPoint, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_2($metafile, $destPoint, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_3($metafile, $destPoint, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_4($metafile, $destPoint, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_5($metafile, $destPoint, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_6($metafile, $destPoint, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_7($metafile, $destPoint, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_8($metafile, $destPoint, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_9($metafile, $destPoint, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_10($metafile, $destPoint, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_11($metafile, $destPoint, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_12($metafile, $destPoint, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_13($metafile, $destPoints, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_14($metafile, $destPoints, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_15($metafile, $destPoints, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_16($metafile, $destPoints, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_17($metafile, $destPoints, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_18($metafile, $destPoints, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_19($metafile, $destPoints, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_20($metafile, $destPoints, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_21($metafile, $destPoints, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_22($metafile, $destPoints, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_23($metafile, $destPoints, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_24($metafile, $destPoints, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_25($metafile, $destRect, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_26($metafile, $destRect, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_27($metafile, $destRect, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_28($metafile, $destRect, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_29($metafile, $destRect, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_30($metafile, $destRect, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_31($metafile, $destRect, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_32($metafile, $destRect, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_33($metafile, $destRect, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_34($metafile, $destRect, $srcRect, $srcUnit, $callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_35($metafile, $destRect, $srcRect, $srcUnit, $callback, $callbackData){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnumerateMetafile_36($metafile, $destRect, $srcRect, $unit, $callback, $callbackData, $imageAttr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ExcludeClip_1($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ExcludeClip_2($region){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_1($brush, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_2($brush, $points, $fillmode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_3($brush, $points, $fillmode, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_4($brush, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_5($brush, $points, $fillmode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillClosedCurve_6($brush, $points, $fillmode, $tension){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillEllipse_1($brush, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillEllipse_2($brush, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillEllipse_3($brush, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillEllipse_4($brush, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPie_1($brush, $rect, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPie_2($brush, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPie_3($brush, $x, $y, $width, $height, $startAngle, $sweepAngle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPolygon_1($brush, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPolygon_2($brush, $points, $fillMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPolygon_3($brush, $points){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillPolygon_4($brush, $points, $fillMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangle_1($brush, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangle_2($brush, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangle_3($brush, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangle_4($brush, $x, $y, $width, $height){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangles_1($brush, $rects){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function FillRectangles_2($brush, $rects){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Flush_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Flush_2($intention){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public static function FromHdc_1($hdc){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public static function FromHdc_2($hdc, $hdevice){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetContextInfo_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function GetContextInfo_2($offset){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function GetContextInfo_3($offset, $clip){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function IntersectClip_1($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function IntersectClip_2($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function IntersectClip_3($region){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_1($point){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_2($point){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_3($rect){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_4($rect){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_5($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_6($x, $y, $width, $height){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_7($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsVisible_8($x, $y, $width, $height){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_1($text, $font){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_2($text, $font, $origin, $stringFormat){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_3($text, $font, $layoutArea){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_4($text, $font, $layoutArea, $stringFormat){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_5($text, $font, $layoutArea, $stringFormat, $charactersFitted, $linesFilled){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_6($text, $font, $width){}
	/**
	 * @return \System\Drawing\SizeF
	 */
	#[MethodOverride] public  function MeasureString_7($text, $font, $width, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MultiplyTransform_1($matrix){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MultiplyTransform_2($matrix, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReleaseHdc_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReleaseHdc_2($hdc){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateTransform_1($angle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RotateTransform_2($angle, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScaleTransform_1($sx, $sy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScaleTransform_2($sx, $sy, $order){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_2($path, $combineMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_3($g){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_4($g, $combineMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_5($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_6($rect, $combineMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_7($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_8($rect, $combineMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetClip_9($region, $combineMode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformPoints_1($destSpace, $srcSpace, $pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TransformPoints_2($destSpace, $srcSpace, $pts){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateClip_1($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateClip_2($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_1($dx, $dy){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TranslateTransform_2($dx, $dy, $order){}
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
class Graphics extends \System\MarshalByRefObject implements 
	\System\Drawing\IDeviceContext,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Region
	 * @property
	 */
	public $Clip;
	/**
	 * @var \System\Drawing\RectangleF
	 * @property
	 */
	public readonly $ClipBounds;
	/**
	 * @var \System\Drawing\Drawing2D\CompositingMode
	 * @property
	 */
	public $CompositingMode;
	/**
	 * @var \System\Drawing\Drawing2D\CompositingQuality
	 * @property
	 */
	public $CompositingQuality;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $DpiX;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $DpiY;
	/**
	 * @var \System\Drawing\Drawing2D\InterpolationMode
	 * @property
	 */
	public $InterpolationMode;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClipEmpty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVisibleClipEmpty;
	/**
	 * @var \System\Single
	 * @property
	 */
	public $PageScale;
	/**
	 * @var \System\Drawing\GraphicsUnit
	 * @property
	 */
	public $PageUnit;
	/**
	 * @var \System\Drawing\Drawing2D\PixelOffsetMode
	 * @property
	 */
	public $PixelOffsetMode;
	/**
	 * @var \System\Drawing\Point
	 * @property
	 */
	public $RenderingOrigin;
	/**
	 * @var \System\Drawing\Drawing2D\SmoothingMode
	 * @property
	 */
	public $SmoothingMode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TextContrast;
	/**
	 * @var \System\Drawing\Text\TextRenderingHint
	 * @property
	 */
	public $TextRenderingHint;
	/**
	 * @var \System\Drawing\Drawing2D\Matrix
	 * @property
	 */
	public $Transform;
	/**
	 * @var \System\Drawing\RectangleF
	 * @property
	 */
	public readonly $VisibleClipBounds;
	/**
	 * @var \System\Numerics\Matrix3x2
	 * @property
	 */
	public $TransformElements;
	/**
	 * @return \System\Drawing\Region
	 */
	public  function get_Clip(){}
	/**
	 * @param \System\Drawing\Region $value
	 * @return \System\Void|void
	 */
	public  function set_Clip($value){}
	/**
	 * @return \System\Drawing\RectangleF
	 */
	public  function get_ClipBounds(){}
	/**
	 * @return \System\Drawing\Drawing2D\CompositingMode
	 */
	public  function get_CompositingMode(){}
	/**
	 * @param \System\Drawing\Drawing2D\CompositingMode $value
	 * @return \System\Void|void
	 */
	public  function set_CompositingMode($value){}
	/**
	 * @return \System\Drawing\Drawing2D\CompositingQuality
	 */
	public  function get_CompositingQuality(){}
	/**
	 * @param \System\Drawing\Drawing2D\CompositingQuality $value
	 * @return \System\Void|void
	 */
	public  function set_CompositingQuality($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_DpiX(){}
	/**
	 * @return \System\Single
	 */
	public  function get_DpiY(){}
	/**
	 * @return \System\Drawing\Drawing2D\InterpolationMode
	 */
	public  function get_InterpolationMode(){}
	/**
	 * @param \System\Drawing\Drawing2D\InterpolationMode $value
	 * @return \System\Void|void
	 */
	public  function set_InterpolationMode($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClipEmpty(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVisibleClipEmpty(){}
	/**
	 * @return \System\Single
	 */
	public  function get_PageScale(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	public  function set_PageScale($value){}
	/**
	 * @return \System\Drawing\GraphicsUnit
	 */
	public  function get_PageUnit(){}
	/**
	 * @param \System\Drawing\GraphicsUnit $value
	 * @return \System\Void|void
	 */
	public  function set_PageUnit($value){}
	/**
	 * @return \System\Drawing\Drawing2D\PixelOffsetMode
	 */
	public  function get_PixelOffsetMode(){}
	/**
	 * @param \System\Drawing\Drawing2D\PixelOffsetMode $value
	 * @return \System\Void|void
	 */
	public  function set_PixelOffsetMode($value){}
	/**
	 * @return \System\Drawing\Point
	 */
	public  function get_RenderingOrigin(){}
	/**
	 * @param \System\Drawing\Point $value
	 * @return \System\Void|void
	 */
	public  function set_RenderingOrigin($value){}
	/**
	 * @return \System\Drawing\Drawing2D\SmoothingMode
	 */
	public  function get_SmoothingMode(){}
	/**
	 * @param \System\Drawing\Drawing2D\SmoothingMode $value
	 * @return \System\Void|void
	 */
	public  function set_SmoothingMode($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextContrast(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_TextContrast($value){}
	/**
	 * @return \System\Drawing\Text\TextRenderingHint
	 */
	public  function get_TextRenderingHint(){}
	/**
	 * @param \System\Drawing\Text\TextRenderingHint $value
	 * @return \System\Void|void
	 */
	public  function set_TextRenderingHint($value){}
	/**
	 * @return \System\Drawing\Drawing2D\Matrix
	 */
	public  function get_Transform(){}
	/**
	 * @param \System\Drawing\Drawing2D\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
	/**
	 * @return \System\Drawing\RectangleF
	 */
	public  function get_VisibleClipBounds(){}
	/**
	 * @param \System\Byte[] $data
	 * @return \System\Void|void
	 */
	public  function AddMetafileComment($data){}
	/**
	 * @uses GraphicsMethodsOverride::BeginContainer_1 ()
	 * @uses GraphicsMethodsOverride::BeginContainer_2 ($dstrect, $srcrect, $unit)
	 * @uses GraphicsMethodsOverride::BeginContainer_3 ($dstrect, $srcrect, $unit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BeginContainer(mixed ...$args){}
	/**
	 * @param \System\Drawing\Color $color
	 * @return \System\Void|void
	 */
	public  function Clear($color){}
	/**
	 * @uses GraphicsMethodsOverride::CopyFromScreen_1 ($upperLeftSource, $upperLeftDestination, $blockRegionSize)
	 * @uses GraphicsMethodsOverride::CopyFromScreen_2 ($upperLeftSource, $upperLeftDestination, $blockRegionSize, $copyPixelOperation)
	 * @uses GraphicsMethodsOverride::CopyFromScreen_3 ($sourceX, $sourceY, $destinationX, $destinationY, $blockRegionSize)
	 * @uses GraphicsMethodsOverride::CopyFromScreen_4 ($sourceX, $sourceY, $destinationX, $destinationY, $blockRegionSize, $copyPixelOperation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyFromScreen(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses GraphicsMethodsOverride::DrawArc_1 ($pen, $rect, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawArc_2 ($pen, $rect, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawArc_3 ($pen, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawArc_4 ($pen, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawArc(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawBezier_1 ($pen, $pt1, $pt2, $pt3, $pt4)
	 * @uses GraphicsMethodsOverride::DrawBezier_2 ($pen, $pt1, $pt2, $pt3, $pt4)
	 * @uses GraphicsMethodsOverride::DrawBezier_3 ($pen, $x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawBezier(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawBeziers_1 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawBeziers_2 ($pen, $points)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawBeziers(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawClosedCurve_1 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawClosedCurve_2 ($pen, $points, $tension, $fillmode)
	 * @uses GraphicsMethodsOverride::DrawClosedCurve_3 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawClosedCurve_4 ($pen, $points, $tension, $fillmode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawClosedCurve(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawCurve_1 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawCurve_2 ($pen, $points, $offset, $numberOfSegments)
	 * @uses GraphicsMethodsOverride::DrawCurve_3 ($pen, $points, $offset, $numberOfSegments, $tension)
	 * @uses GraphicsMethodsOverride::DrawCurve_4 ($pen, $points, $tension)
	 * @uses GraphicsMethodsOverride::DrawCurve_5 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawCurve_6 ($pen, $points, $offset, $numberOfSegments, $tension)
	 * @uses GraphicsMethodsOverride::DrawCurve_7 ($pen, $points, $tension)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawCurve(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawEllipse_1 ($pen, $rect)
	 * @uses GraphicsMethodsOverride::DrawEllipse_2 ($pen, $rect)
	 * @uses GraphicsMethodsOverride::DrawEllipse_3 ($pen, $x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::DrawEllipse_4 ($pen, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawEllipse(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawIcon_1 ($icon, $targetRect)
	 * @uses GraphicsMethodsOverride::DrawIcon_2 ($icon, $x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawIcon(mixed ...$args){}
	/**
	 * @param \System\Drawing\Icon $icon
	 * @param \System\Drawing\Rectangle $targetRect
	 * @return \System\Void|void
	 */
	public  function DrawIconUnstretched($icon, $targetRect){}
	/**
	 * @uses GraphicsMethodsOverride::DrawImage_1 ($image, $point)
	 * @uses GraphicsMethodsOverride::DrawImage_2 ($image, $point)
	 * @uses GraphicsMethodsOverride::DrawImage_3 ($image, $destPoints)
	 * @uses GraphicsMethodsOverride::DrawImage_4 ($image, $destPoints, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_5 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr)
	 * @uses GraphicsMethodsOverride::DrawImage_6 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback)
	 * @uses GraphicsMethodsOverride::DrawImage_7 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::DrawImage_8 ($image, $destPoints)
	 * @uses GraphicsMethodsOverride::DrawImage_9 ($image, $destPoints, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_10 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr)
	 * @uses GraphicsMethodsOverride::DrawImage_11 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback)
	 * @uses GraphicsMethodsOverride::DrawImage_12 ($image, $destPoints, $srcRect, $srcUnit, $imageAttr, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::DrawImage_13 ($image, $rect)
	 * @uses GraphicsMethodsOverride::DrawImage_14 ($image, $destRect, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_15 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_16 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttr)
	 * @uses GraphicsMethodsOverride::DrawImage_17 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttr, $callback)
	 * @uses GraphicsMethodsOverride::DrawImage_18 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::DrawImage_19 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_20 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs)
	 * @uses GraphicsMethodsOverride::DrawImage_21 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback)
	 * @uses GraphicsMethodsOverride::DrawImage_22 ($image, $destRect, $srcX, $srcY, $srcWidth, $srcHeight, $srcUnit, $imageAttrs, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::DrawImage_23 ($image, $rect)
	 * @uses GraphicsMethodsOverride::DrawImage_24 ($image, $destRect, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_25 ($image, $x, $y)
	 * @uses GraphicsMethodsOverride::DrawImage_26 ($image, $x, $y, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_27 ($image, $x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::DrawImage_28 ($image, $x, $y)
	 * @uses GraphicsMethodsOverride::DrawImage_29 ($image, $x, $y, $srcRect, $srcUnit)
	 * @uses GraphicsMethodsOverride::DrawImage_30 ($image, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImage(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawImageUnscaled_1 ($image, $point)
	 * @uses GraphicsMethodsOverride::DrawImageUnscaled_2 ($image, $rect)
	 * @uses GraphicsMethodsOverride::DrawImageUnscaled_3 ($image, $x, $y)
	 * @uses GraphicsMethodsOverride::DrawImageUnscaled_4 ($image, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImageUnscaled(mixed ...$args){}
	/**
	 * @param \System\Drawing\Image $image
	 * @param \System\Drawing\Rectangle $rect
	 * @return \System\Void|void
	 */
	public  function DrawImageUnscaledAndClipped($image, $rect){}
	/**
	 * @uses GraphicsMethodsOverride::DrawLine_1 ($pen, $pt1, $pt2)
	 * @uses GraphicsMethodsOverride::DrawLine_2 ($pen, $pt1, $pt2)
	 * @uses GraphicsMethodsOverride::DrawLine_3 ($pen, $x1, $y1, $x2, $y2)
	 * @uses GraphicsMethodsOverride::DrawLine_4 ($pen, $x1, $y1, $x2, $y2)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawLine(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawLines_1 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawLines_2 ($pen, $points)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawLines(mixed ...$args){}
	/**
	 * @param \System\Drawing\Pen $pen
	 * @param \System\Drawing\Drawing2D\GraphicsPath $path
	 * @return \System\Void|void
	 */
	public  function DrawPath($pen, $path){}
	/**
	 * @uses GraphicsMethodsOverride::DrawPie_1 ($pen, $rect, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawPie_2 ($pen, $rect, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawPie_3 ($pen, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::DrawPie_4 ($pen, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawPie(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawPolygon_1 ($pen, $points)
	 * @uses GraphicsMethodsOverride::DrawPolygon_2 ($pen, $points)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawPolygon(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawRectangle_1 ($pen, $rect)
	 * @uses GraphicsMethodsOverride::DrawRectangle_2 ($pen, $x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::DrawRectangle_3 ($pen, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawRectangles_1 ($pen, $rects)
	 * @uses GraphicsMethodsOverride::DrawRectangles_2 ($pen, $rects)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangles(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::DrawString_1 ($s, $font, $brush, $point)
	 * @uses GraphicsMethodsOverride::DrawString_2 ($s, $font, $brush, $point, $format)
	 * @uses GraphicsMethodsOverride::DrawString_3 ($s, $font, $brush, $layoutRectangle)
	 * @uses GraphicsMethodsOverride::DrawString_4 ($s, $font, $brush, $layoutRectangle, $format)
	 * @uses GraphicsMethodsOverride::DrawString_5 ($s, $font, $brush, $x, $y)
	 * @uses GraphicsMethodsOverride::DrawString_6 ($s, $font, $brush, $x, $y, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawString(mixed ...$args){}
	/**
	 * @param \System\Drawing\Drawing2D\GraphicsContainer $container
	 * @return \System\Void|void
	 */
	public  function EndContainer($container){}
	/**
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_1 ($metafile, $destPoint, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_2 ($metafile, $destPoint, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_3 ($metafile, $destPoint, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_4 ($metafile, $destPoint, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_5 ($metafile, $destPoint, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_6 ($metafile, $destPoint, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_7 ($metafile, $destPoint, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_8 ($metafile, $destPoint, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_9 ($metafile, $destPoint, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_10 ($metafile, $destPoint, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_11 ($metafile, $destPoint, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_12 ($metafile, $destPoint, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_13 ($metafile, $destPoints, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_14 ($metafile, $destPoints, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_15 ($metafile, $destPoints, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_16 ($metafile, $destPoints, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_17 ($metafile, $destPoints, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_18 ($metafile, $destPoints, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_19 ($metafile, $destPoints, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_20 ($metafile, $destPoints, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_21 ($metafile, $destPoints, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_22 ($metafile, $destPoints, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_23 ($metafile, $destPoints, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_24 ($metafile, $destPoints, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_25 ($metafile, $destRect, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_26 ($metafile, $destRect, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_27 ($metafile, $destRect, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_28 ($metafile, $destRect, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_29 ($metafile, $destRect, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_30 ($metafile, $destRect, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_31 ($metafile, $destRect, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_32 ($metafile, $destRect, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_33 ($metafile, $destRect, $callback, $callbackData, $imageAttr)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_34 ($metafile, $destRect, $srcRect, $srcUnit, $callback)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_35 ($metafile, $destRect, $srcRect, $srcUnit, $callback, $callbackData)
	 * @uses GraphicsMethodsOverride::EnumerateMetafile_36 ($metafile, $destRect, $srcRect, $unit, $callback, $callbackData, $imageAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnumerateMetafile(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::ExcludeClip_1 ($rect)
	 * @uses GraphicsMethodsOverride::ExcludeClip_2 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ExcludeClip(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FillClosedCurve_1 ($brush, $points)
	 * @uses GraphicsMethodsOverride::FillClosedCurve_2 ($brush, $points, $fillmode)
	 * @uses GraphicsMethodsOverride::FillClosedCurve_3 ($brush, $points, $fillmode, $tension)
	 * @uses GraphicsMethodsOverride::FillClosedCurve_4 ($brush, $points)
	 * @uses GraphicsMethodsOverride::FillClosedCurve_5 ($brush, $points, $fillmode)
	 * @uses GraphicsMethodsOverride::FillClosedCurve_6 ($brush, $points, $fillmode, $tension)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillClosedCurve(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FillEllipse_1 ($brush, $rect)
	 * @uses GraphicsMethodsOverride::FillEllipse_2 ($brush, $rect)
	 * @uses GraphicsMethodsOverride::FillEllipse_3 ($brush, $x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::FillEllipse_4 ($brush, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillEllipse(mixed ...$args){}
	/**
	 * @param \System\Drawing\Brush $brush
	 * @param \System\Drawing\Drawing2D\GraphicsPath $path
	 * @return \System\Void|void
	 */
	public  function FillPath($brush, $path){}
	/**
	 * @uses GraphicsMethodsOverride::FillPie_1 ($brush, $rect, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::FillPie_2 ($brush, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @uses GraphicsMethodsOverride::FillPie_3 ($brush, $x, $y, $width, $height, $startAngle, $sweepAngle)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillPie(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FillPolygon_1 ($brush, $points)
	 * @uses GraphicsMethodsOverride::FillPolygon_2 ($brush, $points, $fillMode)
	 * @uses GraphicsMethodsOverride::FillPolygon_3 ($brush, $points)
	 * @uses GraphicsMethodsOverride::FillPolygon_4 ($brush, $points, $fillMode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillPolygon(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FillRectangle_1 ($brush, $rect)
	 * @uses GraphicsMethodsOverride::FillRectangle_2 ($brush, $rect)
	 * @uses GraphicsMethodsOverride::FillRectangle_3 ($brush, $x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::FillRectangle_4 ($brush, $x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillRectangle(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FillRectangles_1 ($brush, $rects)
	 * @uses GraphicsMethodsOverride::FillRectangles_2 ($brush, $rects)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FillRectangles(mixed ...$args){}
	/**
	 * @param \System\Drawing\Brush $brush
	 * @param \System\Drawing\Region $region
	 * @return \System\Void|void
	 */
	public  function FillRegion($brush, $region){}
	/**
	 * @uses GraphicsMethodsOverride::Flush_1 ()
	 * @uses GraphicsMethodsOverride::Flush_2 ($intention)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Flush(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::FromHdc_1 ($hdc)
	 * @uses GraphicsMethodsOverride::FromHdc_2 ($hdc, $hdevice)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromHdc(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\Drawing\Graphics
	 */
	public static function FromHdcInternal($hdc){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @return \System\Drawing\Graphics
	 */
	public static function FromHwnd($hwnd){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @return \System\Drawing\Graphics
	 */
	public static function FromHwndInternal($hwnd){}
	/**
	 * @param \System\Drawing\Image $image
	 * @return \System\Drawing\Graphics
	 */
	public static function FromImage($image){}
	/**
	 * @uses GraphicsMethodsOverride::GetContextInfo_1 ()
	 * @uses GraphicsMethodsOverride::GetContextInfo_2 ($offset)
	 * @uses GraphicsMethodsOverride::GetContextInfo_3 ($offset, $clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetContextInfo(mixed ...$args){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetHalftonePalette(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetHdc(){}
	/**
	 * @param \System\Drawing\Color $color
	 * @return \System\Drawing\Color
	 */
	public  function GetNearestColor($color){}
	/**
	 * @uses GraphicsMethodsOverride::IntersectClip_1 ($rect)
	 * @uses GraphicsMethodsOverride::IntersectClip_2 ($rect)
	 * @uses GraphicsMethodsOverride::IntersectClip_3 ($region)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IntersectClip(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::IsVisible_1 ($point)
	 * @uses GraphicsMethodsOverride::IsVisible_2 ($point)
	 * @uses GraphicsMethodsOverride::IsVisible_3 ($rect)
	 * @uses GraphicsMethodsOverride::IsVisible_4 ($rect)
	 * @uses GraphicsMethodsOverride::IsVisible_5 ($x, $y)
	 * @uses GraphicsMethodsOverride::IsVisible_6 ($x, $y, $width, $height)
	 * @uses GraphicsMethodsOverride::IsVisible_7 ($x, $y)
	 * @uses GraphicsMethodsOverride::IsVisible_8 ($x, $y, $width, $height)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsVisible(mixed ...$args){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Drawing\Font $font
	 * @param \System\Drawing\RectangleF $layoutRect
	 * @param \System\Drawing\StringFormat $stringFormat
	 * @return \System\Drawing\Region[]
	 */
	public  function MeasureCharacterRanges($text, $font, $layoutRect, $stringFormat){}
	/**
	 * @uses GraphicsMethodsOverride::MeasureString_1 ($text, $font)
	 * @uses GraphicsMethodsOverride::MeasureString_2 ($text, $font, $origin, $stringFormat)
	 * @uses GraphicsMethodsOverride::MeasureString_3 ($text, $font, $layoutArea)
	 * @uses GraphicsMethodsOverride::MeasureString_4 ($text, $font, $layoutArea, $stringFormat)
	 * @uses GraphicsMethodsOverride::MeasureString_5 ($text, $font, $layoutArea, $stringFormat, $charactersFitted, $linesFilled)
	 * @uses GraphicsMethodsOverride::MeasureString_6 ($text, $font, $width)
	 * @uses GraphicsMethodsOverride::MeasureString_7 ($text, $font, $width, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MeasureString(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::MultiplyTransform_1 ($matrix)
	 * @uses GraphicsMethodsOverride::MultiplyTransform_2 ($matrix, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MultiplyTransform(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::ReleaseHdc_1 ()
	 * @uses GraphicsMethodsOverride::ReleaseHdc_2 ($hdc)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReleaseHdc(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\Void|void
	 */
	public  function ReleaseHdcInternal($hdc){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetClip(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetTransform(){}
	/**
	 * @param \System\Drawing\Drawing2D\GraphicsState $gstate
	 * @return \System\Void|void
	 */
	public  function Restore($gstate){}
	/**
	 * @uses GraphicsMethodsOverride::RotateTransform_1 ($angle)
	 * @uses GraphicsMethodsOverride::RotateTransform_2 ($angle, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RotateTransform(mixed ...$args){}
	/**
	 * @return \System\Drawing\Drawing2D\GraphicsState
	 */
	public  function Save(){}
	/**
	 * @uses GraphicsMethodsOverride::ScaleTransform_1 ($sx, $sy)
	 * @uses GraphicsMethodsOverride::ScaleTransform_2 ($sx, $sy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScaleTransform(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::SetClip_1 ($path)
	 * @uses GraphicsMethodsOverride::SetClip_2 ($path, $combineMode)
	 * @uses GraphicsMethodsOverride::SetClip_3 ($g)
	 * @uses GraphicsMethodsOverride::SetClip_4 ($g, $combineMode)
	 * @uses GraphicsMethodsOverride::SetClip_5 ($rect)
	 * @uses GraphicsMethodsOverride::SetClip_6 ($rect, $combineMode)
	 * @uses GraphicsMethodsOverride::SetClip_7 ($rect)
	 * @uses GraphicsMethodsOverride::SetClip_8 ($rect, $combineMode)
	 * @uses GraphicsMethodsOverride::SetClip_9 ($region, $combineMode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetClip(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::TransformPoints_1 ($destSpace, $srcSpace, $pts)
	 * @uses GraphicsMethodsOverride::TransformPoints_2 ($destSpace, $srcSpace, $pts)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TransformPoints(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::TranslateClip_1 ($dx, $dy)
	 * @uses GraphicsMethodsOverride::TranslateClip_2 ($dx, $dy)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateClip(mixed ...$args){}
	/**
	 * @uses GraphicsMethodsOverride::TranslateTransform_1 ($dx, $dy)
	 * @uses GraphicsMethodsOverride::TranslateTransform_2 ($dx, $dy, $order)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TranslateTransform(mixed ...$args){}
	/**
	 * @return \System\Numerics\Matrix3x2
	 */
	public  function get_TransformElements(){}
	/**
	 * @param \System\Numerics\Matrix3x2 $value
	 * @return \System\Void|void
	 */
	public  function set_TransformElements($value){}
	/**
	 * @uses GraphicsMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses GraphicsMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}

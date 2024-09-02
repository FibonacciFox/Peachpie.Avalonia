<?php
namespace Avalonia\Media\Transformation;
class InterpolationUtilities extends \System\Object
{

	/**
	 * @param \System\Double|double $from
	 * @param \System\Double|double $to
	 * @param \System\Double|double $progress
	 * @return \System\Double|double
	 */
	public static function InterpolateScalars($from, $to, $progress){}
	/**
	 * @param \Avalonia\Vector $from
	 * @param \Avalonia\Vector $to
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Vector
	 */
	public static function InterpolateVectors($from, $to, $progress){}
	/**
	 * @param \Avalonia\Matrix+Decomposed $decomposed
	 * @return \Avalonia\Matrix
	 */
	public static function ComposeTransform($decomposed){}
	/**
	 * @param \Avalonia\Matrix+Decomposed& $from
	 * @param \Avalonia\Matrix+Decomposed& $to
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Matrix+Decomposed
	 */
	public static function InterpolateDecomposedTransforms($from, $to, $progress){}
}
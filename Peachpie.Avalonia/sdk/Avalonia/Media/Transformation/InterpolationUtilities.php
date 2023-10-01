<?php
namespace Avalonia\Media\Transformation;
/**
 */
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
	 * @param \Avalonia\Decomposed $decomposed
	 * @return \Avalonia\Matrix
	 */
	public static function ComposeTransform($decomposed){}
	/**
	 * @param \Avalonia\Decomposed& $from
	 * @param \Avalonia\Decomposed& $to
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Decomposed
	 */
	public static function InterpolateDecomposedTransforms($from, $to, $progress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

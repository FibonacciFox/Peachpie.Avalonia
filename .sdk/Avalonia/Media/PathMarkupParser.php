<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PathMarkupParserOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
}
class PathMarkupParser extends \System\Object implements
	\System\IDisposable
{
	use PathMarkupParserOverride;


	/**
	 * @uses PathMarkupParserOverride::Dispose_1 <br>private , args: ()<br>
	 * @uses PathMarkupParserOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Dispose (\override ...$args){}
	private static function MirrorControlPoint($controlPoint, $center){}
	/**
	 * @param \System\String|string $pathData
	 * @return \System\Void|void
	 */
	public function Parse($pathData){}
	private function CreateFigure(){}
	private function SetFillRule($span){}
	private function CloseFigure(){}
	private function AddMove($span, $relative){}
	private function AddLine($span, $relative){}
	private function AddHorizontalLine($span, $relative){}
	private function AddVerticalLine($span, $relative){}
	private function AddCubicBezierCurve($span, $relative){}
	private function AddQuadraticBezierCurve($span, $relative){}
	private function AddSmoothCubicBezierCurve($span, $relative){}
	private function AddSmoothQuadraticBezierCurve($span, $relative){}
	private function AddArc($span, $relative){}
	private static function PeekArgument($span){}
	private static function ReadArgument($remaining, &$argument){}
	private static function ReadSeparator($span){}
	private static function SkipWhitespace($span){}
	private static function ReadBool($span){}
	private static function ReadDouble($span){}
	private static function ReadSize($span){}
	private static function ReadPoint($span){}
	private static function ReadRelativePoint($span, $origin){}
	private static function ReadCommand($span, &$command, &$relative){}
	private function ThrowIfDisposed(){}
	/**
	 * @param \Avalonia\Platform\IGeometryContext $geometryContext
	 */
	public function __construct($geometryContext){}
}
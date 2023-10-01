<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathMarkupParserMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class PathMarkupParser extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @uses PathMarkupParserMethodsOverride::Dispose_1 ()
	 * @uses PathMarkupParserMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \Avalonia\Point $controlPoint
	 * @param \Avalonia\Point $center
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MirrorControlPoint($controlPoint, $center){}
	/**
	 * @param \System\String|string $pathData
	 * @return \System\Void|void
	 */
	public  function Parse($pathData){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFigure(){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFillRule($span){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseFigure(){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddMove($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddLine($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddHorizontalLine($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddVerticalLine($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddCubicBezierCurve($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddQuadraticBezierCurve($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSmoothCubicBezierCurve($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSmoothQuadraticBezierCurve($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \System\Boolean $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddArc($span, $relative){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PeekArgument($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $remaining
	 * @param \System\ReadOnlySpan_1& $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadArgument($remaining, $argument){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadSeparator($span){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SkipWhitespace($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadBool($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadDouble($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadSize($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadPoint($span){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \Avalonia\Point $origin
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadRelativePoint($span, $origin){}
	/**
	 * @param \System\ReadOnlySpan_1& $span
	 * @param \Avalonia\Media\Command& $command
	 * @param \System\Boolean& $relative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadCommand($span, $command, $relative){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

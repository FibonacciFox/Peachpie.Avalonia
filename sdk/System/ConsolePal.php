<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConsolePalMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Beep_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Beep_2($frequency, $duration){}
	/**
	 * @return \\CONSOLE_SCREEN_BUFFER_INFO
	 */
	#[MethodOverride] private static function GetBufferInfo_1(){}
	/**
	 * @return \\CONSOLE_SCREEN_BUFFER_INFO
	 */
	#[MethodOverride] private static function GetBufferInfo_2($throwOnNoConsole, $succeeded){}
}
/**
 */
class ConsolePal extends \System\Object
{
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $InputEncoding;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $OutputEncoding;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NumberLock;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CapsLock;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $KeyAvailable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $TreatControlCAsInput;
	/**
	 * @var \System\ConsoleColor
	 * @property
	 */
	public $BackgroundColor;
	/**
	 * @var \System\ConsoleColor
	 * @property
	 */
	public $ForegroundColor;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CursorSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $CursorVisible;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Title;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $BufferWidth;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $BufferHeight;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LargestWindowWidth;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LargestWindowHeight;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WindowLeft;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WindowTop;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WindowWidth;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WindowHeight;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_InvalidHandleValue(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function EnsureConsoleInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWindows7(){}
	/**
	 * @return \System\IO\Stream
	 */
	public static function OpenStandardInput(){}
	/**
	 * @return \System\IO\Stream
	 */
	public static function OpenStandardOutput(){}
	/**
	 * @return \System\IO\Stream
	 */
	public static function OpenStandardError(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_InputHandle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_OutputHandle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_ErrorHandle(){}
	/**
	 * @param \System\Int32|int $handleType
	 * @param \System\IO\FileAccess $access
	 * @param \System\Boolean $useFileAPIs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStandardFile($handleType, $access, $useFileAPIs){}
	/**
	 * @param \System\IntPtr $outErrHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConsoleHandleIsWritable($outErrHandle){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_InputEncoding(){}
	/**
	 * @param \System\Text\Encoding $enc
	 * @return \System\Void|void
	 */
	public static function SetConsoleInputEncoding($enc){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_OutputEncoding(){}
	/**
	 * @param \System\Text\Encoding $enc
	 * @return \System\Void|void
	 */
	public static function SetConsoleOutputEncoding($enc){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsInputRedirectedCore(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsOutputRedirectedCore(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsErrorRedirectedCore(){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsHandleRedirected($handle){}
	/**
	 * @return \System\IO\TextReader
	 */
	protected static function GetOrCreateReader(){}
	/**
	 * @param \\INPUT_RECORD $ir
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsKeyDownEvent($ir){}
	/**
	 * @param \\INPUT_RECORD $ir
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsModKey($ir){}
	/**
	 * @param \\INPUT_RECORD $ir
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsAltKeyDown($ir){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_NumberLock(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_CapsLock(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_KeyAvailable(){}
	/**
	 * @param \System\Boolean $intercept
	 * @return \System\ConsoleKeyInfo
	 */
	public static function ReadKey($intercept){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_TreatControlCAsInput(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function set_TreatControlCAsInput($value){}
	/**
	 * @return \System\ConsoleColor
	 */
	public static function get_BackgroundColor(){}
	/**
	 * @param \System\ConsoleColor $value
	 * @return \System\Void|void
	 */
	public static function set_BackgroundColor($value){}
	/**
	 * @return \System\ConsoleColor
	 */
	public static function get_ForegroundColor(){}
	/**
	 * @param \System\ConsoleColor $value
	 * @return \System\Void|void
	 */
	public static function set_ForegroundColor($value){}
	/**
	 * @return \System\Void|void
	 */
	public static function ResetColor(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_CursorSize(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_CursorSize($value){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_CursorVisible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function set_CursorVisible($value){}
	/**
	 * @return \System\ValueTuple_2
	 */
	public static function GetCursorPosition(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_Title(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function set_Title($value){}
	/**
	 * @uses ConsolePalMethodsOverride::Beep_1 ()
	 * @uses ConsolePalMethodsOverride::Beep_2 ($frequency, $duration)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Beep(mixed ...$args){}
	/**
	 * @param \System\Int32|int $sourceLeft
	 * @param \System\Int32|int $sourceTop
	 * @param \System\Int32|int $sourceWidth
	 * @param \System\Int32|int $sourceHeight
	 * @param \System\Int32|int $targetLeft
	 * @param \System\Int32|int $targetTop
	 * @param \System\Char $sourceChar
	 * @param \System\ConsoleColor $sourceForeColor
	 * @param \System\ConsoleColor $sourceBackColor
	 * @return \System\Void|void
	 */
	public static function MoveBufferArea($sourceLeft, $sourceTop, $sourceWidth, $sourceHeight, $targetLeft, $targetTop, $sourceChar, $sourceForeColor, $sourceBackColor){}
	/**
	 * @return \System\Void|void
	 */
	public static function Clear(){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $top
	 * @return \System\Void|void
	 */
	public static function SetCursorPosition($left, $top){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_BufferWidth(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_BufferWidth($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_BufferHeight(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_BufferHeight($value){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Void|void
	 */
	public static function SetBufferSize($width, $height){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_LargestWindowWidth(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_LargestWindowHeight(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_WindowLeft(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_WindowLeft($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_WindowTop(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_WindowTop($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_WindowWidth(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_WindowWidth($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_WindowHeight(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_WindowHeight($value){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $top
	 * @return \System\Void|void
	 */
	public static function SetWindowPosition($left, $top){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @return \System\Void|void
	 */
	public static function SetWindowSize($width, $height){}
	/**
	 * @param \System\ConsoleColor $color
	 * @param \System\Boolean $isBackground
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConsoleColorToColorAttribute($color, $isBackground){}
	/**
	 * @param \\Color $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ColorAttributeToConsoleColor($c){}
	/**
	 * @uses ConsolePalMethodsOverride::GetBufferInfo_1 ()
	 * @uses ConsolePalMethodsOverride::GetBufferInfo_2 ($throwOnNoConsole, $succeeded)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBufferInfo(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

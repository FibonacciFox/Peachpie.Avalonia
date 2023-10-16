<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConsoleMethodsOverride
{
	/**
	 * @return \System\ConsoleKeyInfo
	 */
	#[MethodOverride] public static function ReadKey_1(){}
	/**
	 * @return \System\ConsoleKeyInfo
	 */
	#[MethodOverride] public static function ReadKey_2($intercept){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Beep_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Beep_2($frequency, $duration){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MoveBufferArea_1($sourceLeft, $sourceTop, $sourceWidth, $sourceHeight, $targetLeft, $targetTop){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MoveBufferArea_2($sourceLeft, $sourceTop, $sourceWidth, $sourceHeight, $targetLeft, $targetTop, $sourceChar, $sourceForeColor, $sourceBackColor){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardInput_1(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardInput_2($bufferSize){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardOutput_1(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardOutput_2($bufferSize){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardError_1(){}
	/**
	 * @return \System\IO\Stream
	 */
	#[MethodOverride] public static function OpenStandardError_2($bufferSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_4($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_5($buffer, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_6($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_7($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_8($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_9($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_10($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_11($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_12($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_13($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_14($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_15($format, $arg0){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_16($format, $arg0, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_17($format, $arg0, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteLine_18($format, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_1($format, $arg0){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_2($format, $arg0, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_3($format, $arg0, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_4($format, $arg){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_5($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_6($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_7($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_8($buffer, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_9($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_10($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_11($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_12($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_13($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_14($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_15($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_16($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_17($value){}
}
/**
 */
class Console extends \System\Object
{
	/**
	 * @var \System\IO\TextReader
	 * @property
	 */
	public readonly $In;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public $InputEncoding;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public $OutputEncoding;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $KeyAvailable;
	/**
	 * @var \System\IO\TextWriter
	 * @property
	 */
	public readonly $Out;
	/**
	 * @var \System\IO\TextWriter
	 * @property
	 */
	public readonly $Error;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInputRedirected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsOutputRedirected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsErrorRedirected;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CursorSize;
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
	 * @var \System\Boolean
	 * @property
	 */
	public $CursorVisible;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CursorLeft;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CursorTop;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Title;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $TreatControlCAsInput;
	/**
	 * @return \System\IO\TextReader
	 */
	public static function get_In(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_InputEncoding(){}
	/**
	 * @param \System\Text\Encoding $value
	 * @return \System\Void|void
	 */
	public static function set_InputEncoding($value){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_OutputEncoding(){}
	/**
	 * @param \System\Text\Encoding $value
	 * @return \System\Void|void
	 */
	public static function set_OutputEncoding($value){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_KeyAvailable(){}
	/**
	 * @uses ConsoleMethodsOverride::ReadKey_1 ()
	 * @uses ConsoleMethodsOverride::ReadKey_2 ($intercept)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadKey(mixed ...$args){}
	/**
	 * @return \System\IO\TextWriter
	 */
	public static function get_Out(){}
	/**
	 * @return \System\IO\TextWriter
	 */
	public static function get_Error(){}
	/**
	 * @param \System\IO\Stream $outputStream
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateOutputWriter($outputStream){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsInputRedirected(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsOutputRedirected(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsErrorRedirected(){}
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
	public static function get_NumberLock(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_CapsLock(){}
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
	 * @return \System\Int32|int
	 */
	public static function get_LargestWindowWidth(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_LargestWindowHeight(){}
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
	 * @return \System\Int32|int
	 */
	public static function get_CursorLeft(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_CursorLeft($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_CursorTop(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_CursorTop($value){}
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
	 * @uses ConsoleMethodsOverride::Beep_1 ()
	 * @uses ConsoleMethodsOverride::Beep_2 ($frequency, $duration)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Beep(mixed ...$args){}
	/**
	 * @uses ConsoleMethodsOverride::MoveBufferArea_1 ($sourceLeft, $sourceTop, $sourceWidth, $sourceHeight, $targetLeft, $targetTop)
	 * @uses ConsoleMethodsOverride::MoveBufferArea_2 ($sourceLeft, $sourceTop, $sourceWidth, $sourceHeight, $targetLeft, $targetTop, $sourceChar, $sourceForeColor, $sourceBackColor)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MoveBufferArea(mixed ...$args){}
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
	 * @param \System\ConsoleCancelEventHandler $value
	 * @return \System\Void|void
	 */
	public static function add_CancelKeyPress($value){}
	/**
	 * @param \System\ConsoleCancelEventHandler $value
	 * @return \System\Void|void
	 */
	public static function remove_CancelKeyPress($value){}
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
	 * @uses ConsoleMethodsOverride::OpenStandardInput_1 ()
	 * @uses ConsoleMethodsOverride::OpenStandardInput_2 ($bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OpenStandardInput(mixed ...$args){}
	/**
	 * @uses ConsoleMethodsOverride::OpenStandardOutput_1 ()
	 * @uses ConsoleMethodsOverride::OpenStandardOutput_2 ($bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OpenStandardOutput(mixed ...$args){}
	/**
	 * @uses ConsoleMethodsOverride::OpenStandardError_1 ()
	 * @uses ConsoleMethodsOverride::OpenStandardError_2 ($bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OpenStandardError(mixed ...$args){}
	/**
	 * @param \System\IO\TextReader $newIn
	 * @return \System\Void|void
	 */
	public static function SetIn($newIn){}
	/**
	 * @param \System\IO\TextWriter $newOut
	 * @return \System\Void|void
	 */
	public static function SetOut($newOut){}
	/**
	 * @param \System\IO\TextWriter $newError
	 * @return \System\Void|void
	 */
	public static function SetError($newError){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $paramName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckNonNull($obj, $paramName){}
	/**
	 * @return \System\Int32|int
	 */
	public static function Read(){}
	/**
	 * @return \System\String|string
	 */
	public static function ReadLine(){}
	/**
	 * @uses ConsoleMethodsOverride::WriteLine_1 ()
	 * @uses ConsoleMethodsOverride::WriteLine_2 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_3 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_4 ($buffer)
	 * @uses ConsoleMethodsOverride::WriteLine_5 ($buffer, $index, $count)
	 * @uses ConsoleMethodsOverride::WriteLine_6 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_7 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_8 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_9 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_10 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_11 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_12 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_13 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_14 ($value)
	 * @uses ConsoleMethodsOverride::WriteLine_15 ($format, $arg0)
	 * @uses ConsoleMethodsOverride::WriteLine_16 ($format, $arg0, $arg1)
	 * @uses ConsoleMethodsOverride::WriteLine_17 ($format, $arg0, $arg1, $arg2)
	 * @uses ConsoleMethodsOverride::WriteLine_18 ($format, $arg)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteLine(mixed ...$args){}
	/**
	 * @uses ConsoleMethodsOverride::Write_1 ($format, $arg0)
	 * @uses ConsoleMethodsOverride::Write_2 ($format, $arg0, $arg1)
	 * @uses ConsoleMethodsOverride::Write_3 ($format, $arg0, $arg1, $arg2)
	 * @uses ConsoleMethodsOverride::Write_4 ($format, $arg)
	 * @uses ConsoleMethodsOverride::Write_5 ($value)
	 * @uses ConsoleMethodsOverride::Write_6 ($value)
	 * @uses ConsoleMethodsOverride::Write_7 ($buffer)
	 * @uses ConsoleMethodsOverride::Write_8 ($buffer, $index, $count)
	 * @uses ConsoleMethodsOverride::Write_9 ($value)
	 * @uses ConsoleMethodsOverride::Write_10 ($value)
	 * @uses ConsoleMethodsOverride::Write_11 ($value)
	 * @uses ConsoleMethodsOverride::Write_12 ($value)
	 * @uses ConsoleMethodsOverride::Write_13 ($value)
	 * @uses ConsoleMethodsOverride::Write_14 ($value)
	 * @uses ConsoleMethodsOverride::Write_15 ($value)
	 * @uses ConsoleMethodsOverride::Write_16 ($value)
	 * @uses ConsoleMethodsOverride::Write_17 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Write(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\PosixSignalContext $ctx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlePosixSignal($ctx){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

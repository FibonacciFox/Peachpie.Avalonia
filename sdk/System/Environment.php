<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnvironmentMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function FailFast_1($message){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function FailFast_2($message, $exception){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function FailFast_3($message, $exception, $errorMessage){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetEnvironmentVariable_1($variable){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetEnvironmentVariable_2($variable, $target){}
	/**
	 * @return \System\Collections\IDictionary
	 */
	#[MethodOverride] public static function GetEnvironmentVariables_1($target){}
	/**
	 * @return \System\Collections\IDictionary
	 */
	#[MethodOverride] public static function GetEnvironmentVariables_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetEnvironmentVariable_1($variable, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetEnvironmentVariable_2($variable, $value, $target){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFolderPath_1($folder){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFolderPath_2($folder, $option){}
}
/**
 */
class Environment extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentManagedThreadId;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ExitCode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TickCount;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $TickCount64;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ProcessorCount;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasShutdownStarted;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CommandLine;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CurrentDirectory;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ProcessId;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ProcessPath;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Is64BitProcess;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Is64BitOperatingSystem;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $NewLine;
	/**
	 * @var \System\OperatingSystem
	 * @property
	 */
	public readonly $OSVersion;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StackTrace;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $SystemPageSize;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $UserName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $UserDomainName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $MachineName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $SystemDirectory;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UserInteractive;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $WorkingSet;
	/**
	 * @return \System\Int32|int
	 */
	public static function get_CurrentManagedThreadId(){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _Exit($exitCode){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Void|void
	 */
	public static function Exit($exitCode){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_ExitCode(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function set_ExitCode($value){}
	/**
	 * @uses EnvironmentMethodsOverride::FailFast_1 ($message)
	 * @uses EnvironmentMethodsOverride::FailFast_2 ($message, $exception)
	 * @uses EnvironmentMethodsOverride::FailFast_3 ($message, $exception, $errorMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FailFast(mixed ...$args){}
	/**
	 * @return \System\String[]
	 */
	public static function GetCommandLineArgs(){}
	/**
	 * @param \System\Char* $exePath
	 * @param \System\Int32|int $argc
	 * @param \System\Char** $argv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeCommandLineArgs($exePath, $argc, $argv){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetProcessorCount(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\String|string
	 */
	protected static function GetResourceStringLocal($key){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_TickCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_TickCount64(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_ProcessorCount(){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsSingleProcessor(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_HasShutdownStarted(){}
	/**
	 * @uses EnvironmentMethodsOverride::GetEnvironmentVariable_1 ($variable)
	 * @uses EnvironmentMethodsOverride::GetEnvironmentVariable_2 ($variable, $target)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEnvironmentVariable(mixed ...$args){}
	/**
	 * @uses EnvironmentMethodsOverride::GetEnvironmentVariables_1 ($target)
	 * @uses EnvironmentMethodsOverride::GetEnvironmentVariables_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEnvironmentVariables(mixed ...$args){}
	/**
	 * @uses EnvironmentMethodsOverride::SetEnvironmentVariable_1 ($variable, $value)
	 * @uses EnvironmentMethodsOverride::SetEnvironmentVariable_2 ($variable, $value, $target)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetEnvironmentVariable(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public static function get_CommandLine(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_CurrentDirectory(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function set_CurrentDirectory($value){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public static function ExpandEnvironmentVariables($name){}
	/**
	 * @uses EnvironmentMethodsOverride::GetFolderPath_1 ($folder)
	 * @uses EnvironmentMethodsOverride::GetFolderPath_2 ($folder, $option)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFolderPath(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_ProcessId(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_ProcessPath(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_Is64BitProcess(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_Is64BitOperatingSystem(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_NewLine(){}
	/**
	 * @return \System\OperatingSystem
	 */
	public static function get_OSVersion(){}
	/**
	 * @return \System\Version
	 */
	public static function get_Version(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_StackTrace(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_SystemPageSize(){}
	/**
	 * @param \System\EnvironmentVariableTarget $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateAndConvertRegistryTarget($target){}
	/**
	 * @param \System\String|string $variable
	 * @param \System\String& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateVariableAndValue($variable, $value){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsWindows8OrAbove(){}
	/**
	 * @param \System\String|string $variable
	 * @param \System\Boolean $fromMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnvironmentVariableFromRegistry($variable, $fromMachine){}
	/**
	 * @param \System\String|string $variable
	 * @param \System\String|string $value
	 * @param \System\Boolean $fromMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetEnvironmentVariableFromRegistry($variable, $value, $fromMachine){}
	/**
	 * @param \System\Boolean $fromMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnvironmentVariablesFromRegistry($fromMachine){}
	/**
	 * @param \System\Boolean $fromMachine
	 * @param \System\Boolean $writable
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenEnvironmentKeyIfExists($fromMachine, $writable){}
	/**
	 * @return \System\String|string
	 */
	public static function get_UserName(){}
	/**
	 * @param \System\Text\ValueStringBuilder& $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUserName($builder){}
	/**
	 * @return \System\String|string
	 */
	public static function get_UserDomainName(){}
	/**
	 * @param \System\SpecialFolder $folder
	 * @param \System\SpecialFolderOption $option
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFolderPathCore($folder, $option){}
	/**
	 * @param \System\String|string $folderGuid
	 * @param \System\SpecialFolderOption $option
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetKnownFolderPath($folderGuid, $option){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CurrentDirectoryCore(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function set_CurrentDirectoryCore($value){}
	/**
	 * @return \System\String[]
	 */
	public static function GetLogicalDrives(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSystemPageSize(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExpandEnvironmentVariablesCore($name){}
	/**
	 * @return \System\String|string
	 */
	public static function get_MachineName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetProcessId(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetProcessPath(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOSVersion(){}
	/**
	 * @return \System\String|string
	 */
	public static function get_SystemDirectory(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_UserInteractive(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function get_WorkingSet(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCommandLineArgsNative(){}
	/**
	 * @param \System\String|string $variable
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnvironmentVariableCore($variable){}
	/**
	 * @param \System\String|string $variable
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetEnvironmentVariableCore($variable, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

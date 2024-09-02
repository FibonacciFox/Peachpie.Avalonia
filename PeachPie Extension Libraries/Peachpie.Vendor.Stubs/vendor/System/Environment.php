<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnvironmentOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function FailFast_1 ($message){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function FailFast_2 ($message, $exception){}
	/**
	 * @deprecated
	 * @param \System\String|string $message
	 * @param \System\Exception $exception
	 * @param \System\String|string $errorMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function FailFast_3 ($message, $exception, $errorMessage){}
	/**
	 * @deprecated
	 * @param \System\String|string $variable
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetEnvironmentVariable_1 ($variable){}
	/**
	 * @deprecated
	 * @param \System\String|string $variable
	 * @param \System\EnvironmentVariableTarget $target
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetEnvironmentVariable_2 ($variable, $target){}
	/**
	 * @deprecated
	 * @param \System\EnvironmentVariableTarget $target
	 * @return \System\Collections\IDictionary
	 */
	#[MethodOverride]public static function GetEnvironmentVariables_1 ($target){}
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionary
	 */
	#[MethodOverride]public static function GetEnvironmentVariables_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $variable
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetEnvironmentVariable_1 ($variable, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $variable
	 * @param \System\String|string $value
	 * @param \System\EnvironmentVariableTarget $target
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetEnvironmentVariable_2 ($variable, $value, $target){}
	/**
	 * @deprecated
	 * @param \System\Environment+SpecialFolder $folder
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFolderPath_1 ($folder){}
	/**
	 * @deprecated
	 * @param \System\Environment+SpecialFolder $folder
	 * @param \System\Environment+SpecialFolderOption $option
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetFolderPath_2 ($folder, $option){}
}
class Environment extends \System\Object
{
	use EnvironmentOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CurrentManagedThreadId;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ExitCode;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TickCount;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $TickCount64;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ProcessorCount;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasShutdownStarted;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CommandLine;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CurrentDirectory;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ProcessId;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ProcessPath;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Is64BitProcess;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Is64BitOperatingSystem;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $NewLine;
	/**
	 * @property
	 * @var \System\OperatingSystem
	 * @since readonly
	 */
	public $OSVersion;
	/**
	 * @property
	 * @var \System\Version
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $SystemPageSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $UserInteractive;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SystemDirectory;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $UserDomainName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $MachineName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $UserName;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $WorkingSet;
	private static function _Exit($exitCode){}
	/**
	 * @param \System\Int32|int $exitCode
	 * @return \System\Void|void
	 */
	public static function Exit($exitCode){}
	/**
	 * @uses EnvironmentOverride::FailFast_1 <br>public , args: ($message)<br>
	 * @uses EnvironmentOverride::FailFast_2 <br>public , args: ($message, $exception)<br>
	 * @uses EnvironmentOverride::FailFast_3 <br>public , args: ($message, $exception, $errorMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function FailFast (\override ...$args){}
	/**
	 * @return \System\String[]|array
	 */
	public static function GetCommandLineArgs(){}
	private static function InitializeCommandLineArgs($exePath, $argc, $argv){}
	private static function GetProcessorCount(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\String|string
	 */
	protected static function GetResourceStringLocal($key){}
	/**
	 * @uses EnvironmentOverride::GetEnvironmentVariable_1 <br>public , args: ($variable)<br>
	 * @uses EnvironmentOverride::GetEnvironmentVariable_2 <br>public , args: ($variable, $target)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnvironmentVariable (\override ...$args){}
	/**
	 * @uses EnvironmentOverride::GetEnvironmentVariables_1 <br>public , args: ($target)<br>
	 * @uses EnvironmentOverride::GetEnvironmentVariables_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IDictionary|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnvironmentVariables (\override ...$args){}
	/**
	 * @uses EnvironmentOverride::SetEnvironmentVariable_1 <br>public , args: ($variable, $value)<br>
	 * @uses EnvironmentOverride::SetEnvironmentVariable_2 <br>public , args: ($variable, $value, $target)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetEnvironmentVariable (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public static function ExpandEnvironmentVariables($name){}
	/**
	 * @uses EnvironmentOverride::GetFolderPath_1 <br>public , args: ($folder)<br>
	 * @uses EnvironmentOverride::GetFolderPath_2 <br>public , args: ($folder, $option)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetFolderPath (\override ...$args){}
	private static function ValidateAndConvertRegistryTarget($target){}
	private static function ValidateVariableAndValue($variable, $value){}
	private static function GetEnvironmentVariableCore($variable){}
	private static function SetEnvironmentVariableCore($variable, $value){}
	private static function GetEnvironmentVariableFromRegistry($variable, $fromMachine){}
	private static function GetEnvironmentVariablesFromRegistry($fromMachine){}
	private static function ExpandEnvironmentVariablesCore($name){}
	private static function GetSystemPageSize(){}
	private static function CheckedSysConf($name){}
	private static function GetFolderPathCore($folder, $option){}
	private static function GetFolderPathCoreWithoutValidation($folder){}
	private static function GetXdgConfig($home){}
	private static function ReadXdgDirectory($homeDir, $key, $fallback){}
	private static function SkipWhitespace($line, $pos){}
	/**
	 * @return \System\String[]|array
	 */
	public static function GetLogicalDrives(){}
	private static function GetProcessId(){}
	private static function GetProcessPath(){}
	private static function GetCommandLineArgsNative(){}
	private static function GetOSVersion(){}
	private static function GetOperatingSystem($release){}
	private static function FindAndParseNextNumber($text, $pos){}
}
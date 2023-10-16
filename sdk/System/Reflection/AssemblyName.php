<?php
namespace System\Reflection;
/**
 */
class AssemblyName extends \System\Object implements 
	\System\ICloneable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\Version
	 * @property
	 */
	public $Version;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $CultureInfo;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CultureName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CodeBase;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EscapedCodeBase;
	/**
	 * @var \System\Reflection\ProcessorArchitecture
	 * @property
	 */
	public $ProcessorArchitecture;
	/**
	 * @var \System\Reflection\AssemblyContentType
	 * @property
	 */
	public $ContentType;
	/**
	 * @var \System\Reflection\AssemblyNameFlags
	 * @property
	 */
	public $Flags;
	/**
	 * @var \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 * @property
	 */
	public $HashAlgorithm;
	/**
	 * @var \System\Configuration\Assemblies\AssemblyVersionCompatibility
	 * @property
	 */
	public $VersionCompatibility;
	/**
	 * @var \System\Reflection\StrongNameKeyPair
	 * @property
	 */
	public $KeyPair;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_RawPublicKey(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_RawPublicKeyToken(){}
	/**
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	protected  function get_RawFlags(){}
	/**
	 * @param \System\Reflection\AssemblyNameFlags $value
	 * @return \System\Void|void
	 */
	protected  function set_RawFlags($value){}
	/**
	 * @param \System\Reflection\PortableExecutableKinds $pek
	 * @param \System\Reflection\ImageFileMachine $ifm
	 * @return \System\Void|void
	 */
	protected  function SetProcArchIndex($pek, $ifm){}
	/**
	 * @param \System\Reflection\PortableExecutableKinds $pek
	 * @param \System\Reflection\ImageFileMachine $ifm
	 * @param \System\Reflection\AssemblyNameFlags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CalculateProcArchIndex($pek, $ifm, $flags){}
	/**
	 * @param \System\Char* $pAssemblyName
	 * @param \System\Void* $pAssemblySpec
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseAsAssemblySpec($pAssemblyName, $pAssemblySpec){}
	/**
	 * @param \System\Reflection\NativeAssemblyNameParts* $pAssemblyNameParts
	 * @param \System\Void* $pAssemblySpec
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeAssemblySpec($pAssemblyNameParts, $pAssemblySpec){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\Version
	 */
	public  function get_Version(){}
	/**
	 * @param \System\Version $value
	 * @return \System\Void|void
	 */
	public  function set_Version($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_CultureInfo(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public  function set_CultureInfo($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CultureName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CultureName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CodeBase(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CodeBase($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EscapedCodeBase(){}
	/**
	 * @return \System\Reflection\ProcessorArchitecture
	 */
	public  function get_ProcessorArchitecture(){}
	/**
	 * @param \System\Reflection\ProcessorArchitecture $value
	 * @return \System\Void|void
	 */
	public  function set_ProcessorArchitecture($value){}
	/**
	 * @return \System\Reflection\AssemblyContentType
	 */
	public  function get_ContentType(){}
	/**
	 * @param \System\Reflection\AssemblyContentType $value
	 * @return \System\Void|void
	 */
	public  function set_ContentType($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitGetAssemblyName(){}
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\AssemblyName
	 */
	public static function GetAssemblyName($assemblyFile){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetPublicKey(){}
	/**
	 * @param \System\Byte[] $publicKey
	 * @return \System\Void|void
	 */
	public  function SetPublicKey($publicKey){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetPublicKeyToken(){}
	/**
	 * @param \System\Byte[] $publicKeyToken
	 * @return \System\Void|void
	 */
	public  function SetPublicKeyToken($publicKeyToken){}
	/**
	 * @return \System\Reflection\AssemblyNameFlags
	 */
	public  function get_Flags(){}
	/**
	 * @param \System\Reflection\AssemblyNameFlags $value
	 * @return \System\Void|void
	 */
	public  function set_Flags($value){}
	/**
	 * @return \System\Configuration\Assemblies\AssemblyHashAlgorithm
	 */
	public  function get_HashAlgorithm(){}
	/**
	 * @param \System\Configuration\Assemblies\AssemblyHashAlgorithm $value
	 * @return \System\Void|void
	 */
	public  function set_HashAlgorithm($value){}
	/**
	 * @return \System\Configuration\Assemblies\AssemblyVersionCompatibility
	 */
	public  function get_VersionCompatibility(){}
	/**
	 * @param \System\Configuration\Assemblies\AssemblyVersionCompatibility $value
	 * @return \System\Void|void
	 */
	public  function set_VersionCompatibility($value){}
	/**
	 * @return \System\Reflection\StrongNameKeyPair
	 */
	public  function get_KeyPair(){}
	/**
	 * @param \System\Reflection\StrongNameKeyPair $value
	 * @return \System\Void|void
	 */
	public  function set_KeyPair($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullName(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public  function OnDeserialization($sender){}
	/**
	 * @param \System\Reflection\AssemblyName $reference
	 * @param \System\Reflection\AssemblyName $definition
	 * @return \System\Boolean
	 */
	public static function ReferenceMatchesDefinition($reference, $definition){}
	/**
	 * @param \System\String|string $codebase
	 * @return \System\String|string
	 */
	protected static function EscapeCodeBase($codebase){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Char[] $dest
	 * @param \System\Int32& $destPos
	 * @param \System\Boolean $isUriString
	 * @param \System\Char $force1
	 * @param \System\Char $force2
	 * @param \System\Char $rsvd
	 * @return \System\Char[]
	 */
	protected static function EscapeString($input, $start, $end, $dest, $destPos, $isUriString, $force1, $force2, $rsvd){}
	/**
	 * @param \System\Char* $pStr
	 * @param \System\Char[] $dest
	 * @param \System\Int32|int $currentInputPos
	 * @param \System\Int16 $charsToAdd
	 * @param \System\Int16 $minReallocateChars
	 * @param \System\Int32& $destPos
	 * @param \System\Int32|int $prevInputPos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureDestinationSize($pStr, $dest, $currentInputPos, $charsToAdd, $minReallocateChars, $destPos, $prevInputPos){}
	/**
	 * @param \System\Char $ch
	 * @param \System\Char[] $to
	 * @param \System\Int32& $pos
	 * @return \System\Void|void
	 */
	protected static function EscapeAsciiChar($ch, $to, $pos){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsReservedUnreservedOrHash($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	protected static function IsUnreserved($c){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

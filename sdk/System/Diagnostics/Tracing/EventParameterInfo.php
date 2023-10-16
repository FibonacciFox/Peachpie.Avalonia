<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventParameterInfo extends \System\ValueType
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $ParameterName;
	/**
	 * @var \System\Type
	 * @field
	 */
	protected $ParameterType;
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 * @field
	 */
	protected $TypeInfo;
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @return \System\Void|void
	 */
	protected  function SetInfo($name, $type, $typeInfo){}
	/**
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @return \System\Boolean
	 */
	protected  function GenerateMetadata($pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Diagnostics\Tracing\PropertyAnalysis $property
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateMetadataForProperty($property, $pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @return \System\Boolean
	 */
	protected  function GenerateMetadataV2($pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateMetadataForNamedTypeV2($name, $typeInfo, $pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateMetadataForTypeV2($typeInfo, $pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Type $type
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo& $typeInfo
	 * @return \System\Boolean
	 */
	protected static function GetTypeInfoFromType($type, $typeInfo){}
	/**
	 * @param \System\UInt32& $size
	 * @return \System\Boolean
	 */
	protected  function GetMetadataLength($size){}
	/**
	 * @param \System\Diagnostics\Tracing\PropertyAnalysis $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMetadataLengthForProperty($property){}
	/**
	 * @param \System\Type $parameterType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTypeCodeExtended($parameterType){}
	/**
	 * @param \System\UInt32& $size
	 * @return \System\Boolean
	 */
	protected  function GetMetadataLengthV2($size){}
	/**
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @param \System\UInt32& $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMetadataLengthForTypeV2($typeInfo, $size){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @param \System\UInt32& $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMetadataLengthForNamedTypeV2($name, $typeInfo, $size){}
}

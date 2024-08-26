<?php
namespace System\Diagnostics\Tracing;
final class EventParameterInfo extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $ParameterName;
	/**
	 * @field
	 * @var \System\Type
	 */
	protected $ParameterType;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	protected $TypeInfo;
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @return \System\Void|void
	 */
	protected function SetInfo($name, $type, $typeInfo){}
	/**
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @return \System\Boolean|bool
	 */
	protected function GenerateMetadata($pMetadataBlob, $offset, $blobSize){}
	private static function GenerateMetadataForProperty($property, $pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Byte* $pMetadataBlob
	 * @param \System\UInt32& $offset
	 * @param \System\UInt32 $blobSize
	 * @return \System\Boolean|bool
	 */
	protected function GenerateMetadataV2($pMetadataBlob, $offset, $blobSize){}
	private static function GenerateMetadataForNamedTypeV2($name, $typeInfo, $pMetadataBlob, $offset, $blobSize){}
	private static function GenerateMetadataForTypeV2($typeInfo, $pMetadataBlob, $offset, $blobSize){}
	/**
	 * @param \System\Type $type
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo& &$typeInfo
	 * @return \System\Boolean|bool
	 */
	protected static function GetTypeInfoFromType($type, &$typeInfo){}
	/**
	 * @param \System\UInt32& &$size
	 * @return \System\Boolean|bool
	 */
	protected function GetMetadataLength(&$size){}
	private static function GetMetadataLengthForProperty($property){}
	private static function GetTypeCodeExtended($parameterType){}
	/**
	 * @param \System\UInt32& &$size
	 * @return \System\Boolean|bool
	 */
	protected function GetMetadataLengthV2(&$size){}
	private static function GetMetadataLengthForTypeV2($typeInfo, &$size){}
	private static function GetMetadataLengthForNamedTypeV2($name, $typeInfo, &$size){}
}
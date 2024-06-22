<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BidiAlgorithmOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiData $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Process_1 ($data){}
	/**
	 * @deprecated
	 * @param \Avalonia\Utilities\ArraySlice_1 $types [generic: Avalonia\Media\TextFormatting\Unicode\BidiClass]
	 * @param \Avalonia\Utilities\ArraySlice_1 $pairedBracketTypes [generic: Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType]
	 * @param \Avalonia\Utilities\ArraySlice_1 $pairedBracketValues [generic: System\Int32]
	 * @param \System\SByte $paragraphEmbeddingLevel
	 * @param \System\Nullable_1 $hasBrackets [generic: System\Boolean]
	 * @param \System\Nullable_1 $hasEmbeddings [generic: System\Boolean]
	 * @param \System\Nullable_1 $hasIsolates [generic: System\Boolean]
	 * @param \System\Nullable_1 $outLevels [generic: Avalonia\Utilities\ArraySlice_1[System\SByte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Process_2 ($types, $pairedBracketTypes, $pairedBracketValues, $paragraphEmbeddingLevel, $hasBrackets, $hasEmbeddings, $hasIsolates, $outLevels){}
}
final class BidiAlgorithm extends \System\Object
{
	use BidiAlgorithmOverride;

	/**
	 * @property
	 * @var \Avalonia\Utilities\ArraySlice_1[System\SByte]
	 * @since readonly
	 */
	public $ResolvedLevels;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ResolvedParagraphEmbeddingLevel;
	/**
	 * @uses BidiAlgorithmOverride::Process_1 <br>public , args: ($data)<br>
	 * @uses BidiAlgorithmOverride::Process_2 <br>public , args: ($types, $pairedBracketTypes, $pairedBracketValues, $paragraphEmbeddingLevel, $hasBrackets, $hasEmbeddings, $hasIsolates, $outLevels)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Process (\override ...$args){}
	/**
	 * @param \Avalonia\Utilities\ArraySlice_1 $data [generic: Avalonia\Media\TextFormatting\Unicode\BidiClass]
	 * @return \System\SByte
	 */
	public function ResolveEmbeddingLevel($data){}
	private static function IsIsolateStart($type){}
	private function FindIsolatePairs(){}
	private function ResolveExplicitEmbeddingLevels(){}
	private function BuildX9RemovalMap(){}
	private function MapX9($index){}
	private function AddLevelRun($start, $length, $level){}
	private function FindLevelRuns(){}
	private function FindRunForIndex($index){}
	private function ProcessIsolatedRunSequences(){}
	private function ProcessIsolatedRunSequence($sos, $eos, $runLevel){}
	private function LocatePairedBrackets(){}
	private function InspectPairedBracket(&$bracketPair){}
	private function InspectBeforePairedBracket(&$bracketPair, $sos){}
	private function SetPairedBracketDirection(&$pairedBracket, $direction){}
	private function ResetWhitespaceLevels(){}
	private function AssignLevelsToCodePointsRemovedByX9(){}
	private static function IsWhitespace($biDiClass){}
	private static function DirectionFromLevel($level){}
	private static function IsRemovedByX9($biDiClass){}
	private static function IsNeutralClass($direction){}
	private static function GetStrongClassN0($direction){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 */
	public function __construct(){}
}
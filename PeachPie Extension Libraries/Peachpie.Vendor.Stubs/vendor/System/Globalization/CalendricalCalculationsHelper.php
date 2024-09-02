<?php
namespace System\Globalization;
class CalendricalCalculationsHelper extends \System\Object
{

	private static function RadiansFromDegrees($degree){}
	private static function SinOfDegree($degree){}
	private static function CosOfDegree($degree){}
	private static function TanOfDegree($degree){}
	/**
	 * @param \System\Int32|int $degrees
	 * @param \System\Int32|int $minutes
	 * @param \System\Double|double $seconds
	 * @return \System\Double|double
	 */
	public static function Angle($degrees, $minutes, $seconds){}
	private static function Obliquity($julianCenturies){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int64|int
	 */
	protected static function GetNumberOfDays($date){}
	private static function GetGregorianYear($numberOfDays){}
	private static function Reminder($divisor, $dividend){}
	private static function NormalizeLongitude($longitude){}
	/**
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function AsDayFraction($longitude){}
	private static function PolynomialSum($coefficients, $indeterminate){}
	private static function CenturiesFrom1900($gregorianYear){}
	private static function DefaultEphemerisCorrection($gregorianYear){}
	private static function EphemerisCorrection1988to2019($gregorianYear){}
	private static function EphemerisCorrection1900to1987($gregorianYear){}
	private static function EphemerisCorrection1800to1899($gregorianYear){}
	private static function EphemerisCorrection1700to1799($gregorianYear){}
	private static function EphemerisCorrection1620to1699($gregorianYear){}
	private static function EphemerisCorrection($time){}
	/**
	 * @param \System\Double|double $moment
	 * @return \System\Double|double
	 */
	public static function JulianCenturies($moment){}
	private static function EquationOfTime($time){}
	private static function AsLocalTime($apparentMidday, $longitude){}
	/**
	 * @param \System\Double|double $date
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function Midday($date, $longitude){}
	private static function InitLongitude($longitude){}
	/**
	 * @param \System\Double|double $date
	 * @return \System\Double|double
	 */
	public static function MiddayAtPersianObservationSite($date){}
	private static function PeriodicTerm($julianCenturies, $x, $y, $z){}
	private static function SumLongSequenceOfPeriodicTerms($julianCenturies){}
	private static function Aberration($julianCenturies){}
	private static function Nutation($julianCenturies){}
	/**
	 * @param \System\Double|double $time
	 * @return \System\Double|double
	 */
	public static function Compute($time){}
	/**
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function AsSeason($longitude){}
	private static function EstimatePrior($longitude, $time){}
	/**
	 * @param \System\Int64|int $numberOfDays
	 * @return \System\Int64|int
	 */
	protected static function PersianNewYearOnOrBefore($numberOfDays){}
}
<?php
namespace System;
enum TokenType
{
	
	case NumberToken = '1';
	case YearNumberToken = '2';
	case Am = '3';
	case Pm = '4';
	case MonthToken = '5';
	case EndOfString = '6';
	case DayOfWeekToken = '7';
	case TimeZoneToken = '8';
	case EraToken = '9';
	case DateWordToken = '10';
	case UnknownToken = '11';
	case HebrewNumber = '12';
	case JapaneseEraToken = '13';
	case TEraToken = '14';
	case IgnorableSymbol = '15';
	case SEP_Unk = '256';
	case SEP_End = '512';
	case SEP_Space = '768';
	case SEP_Am = '1024';
	case SEP_Pm = '1280';
	case SEP_Date = '1536';
	case SEP_Time = '1792';
	case SEP_YearSuff = '2048';
	case SEP_MonthSuff = '2304';
	case SEP_DaySuff = '2560';
	case SEP_HourSuff = '2816';
	case SEP_MinuteSuff = '3072';
	case SEP_SecondSuff = '3328';
	case SEP_LocalTimeMark = '3584';
	case SEP_DateOrOffset = '3840';
	case RegularTokenMask = '255';
	case SeparatorTokenMask = '65280';

}
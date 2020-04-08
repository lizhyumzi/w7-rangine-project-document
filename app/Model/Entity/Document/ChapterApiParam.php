<?php

/**
 * WeEngine Document System
 *
 * (c) We7Team 2019 <https://www.w7.cc>
 *
 * This is not a free software
 * Using it under the license terms
 * visited https://www.w7.cc for more details
 */

namespace W7\App\Model\Entity\Document;

use W7\App\Model\Entity\BaseModel;

class ChapterApiParam extends BaseModel
{
	protected $table = 'document_chapter_api_param';
	protected $primaryKey = 'chapter_id';

	const ENABLED_NO = 1;
	const ENABLED_YES = 2;

	const TYPE_STRING = 1;
	const TYPE_NUMBER = 2;
	const TYPE_BOOLEAN = 3;
	const TYPE_OBJECT = 4;
	const TYPE_ARRAY = 5;
	const TYPE_FUNCTION = 6;
	const TYPE_REGEXP = 7;
	const TYPE_NULL = 8;

	const LOCATION_REQUEST_HEADER = 1;
	const LOCATION_REQUEST_QUERY = 2;
	const LOCATION_REQUEST_BODY_FROM = 3;
	const LOCATION_REQUEST_BODY_FROM_URLENCODED = 4;
	const LOCATION_REQUEST_BODY_RAW = 5;
	const LOCATION_REQUEST_BODY_BINARY = 6;
	const LOCATION_REPONSE_HEADER = 7;
	const LOCATION_REPONSE_BODY_FROM = 8;
	const LOCATION_REPONSE_BODY_FROM_URLENCODED = 9;
	const LOCATION_REPONSE_BODY_RAW = 10;
	const LOCATION_REPONSE_BODY_BINARY = 11;

	public static function getLocationLabel()
	{
		return [
			self::LOCATION_REQUEST_HEADER => 'Request.Header',
			self::LOCATION_REQUEST_QUERY => 'Request.Query',
			self::LOCATION_REQUEST_BODY_FROM => 'Request.Body.form-data',
			self::LOCATION_REQUEST_BODY_FROM_URLENCODED => 'Request.Body.x-www-form-urlencoded',
			self::LOCATION_REQUEST_BODY_RAW => 'Request.Body.raw',
			self::LOCATION_REQUEST_BODY_BINARY => 'Request.Body.binary',
			self::LOCATION_REPONSE_HEADER => 'Reponse.Header',
			self::LOCATION_REPONSE_BODY_FROM => 'Reponse.Body.form-data',
			self::LOCATION_REPONSE_BODY_FROM_URLENCODED => 'Reponse.Body.x-www-form-urlencoded',
			self::LOCATION_REPONSE_BODY_RAW => 'Reponse.Body.raw',
			self::LOCATION_REPONSE_BODY_BINARY => 'Reponse.Body.binary',
		];
	}

	public static function getEnabledLabel()
	{
		return [
			self::ENABLED_NO => 'False',
			self::ENABLED_YES => 'Ture',
		];
	}

	public static function getTypeLabel()
	{
		return [
			self::TYPE_STRING => 'String',
			self::TYPE_NUMBER => 'Number',
			self::TYPE_BOOLEAN => 'Boolean',
			self::TYPE_OBJECT => 'Object',
			self::TYPE_ARRAY => 'Array',
			self::TYPE_FUNCTION => 'Function',
			self::TYPE_REGEXP => 'RegExp',
			self::TYPE_NULL => 'Null',
		];
	}
}

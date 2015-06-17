<?php
/**
Copyright 2012-2014 Nick Korbel

This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

class ReservationFilter
{
	/**
	 * @var Date|null
	 */
	private $startDate = null;

	/**
	 * @var Date|null
	 */
	private $endDate = null;

	/**
	 * @var null|string
	 */
	private $referenceNumber = null;

	/**
	 * @var int|null
	 */
	private $scheduleId = null;

	/**
	 * @var int|null
	 */
	private $resourceId = null;

	/**
	 * @var int|null
	 */
	private $userId = null;

	/**
	 * @var int|null
	 */
	private $statusId = null;

	/**
	 * @var int|null
	 */
	private $resourceStatusId = null;

	/**
	 * @var int|null
	 */
	private $resourceStatusReasonId = null;

	/**
	 * @var Attribute[]|null
	 */
	private $attributes = null;

	/**
	 * @var array|ISqlFilter[]
	 */
	private $_and = array();

	/**
	 * @param Date $startDate
	 * @param Date $endDate
	 * @param string $referenceNumber
	 * @param int $scheduleId
	 * @param int $resourceId
	 * @param int $userId
	 * @param int $statusId
	 * @param int $resourceStatusId
	 * @param int $resourceStatusReasonId
	 * @param Attribute[] $attributes
	 */
	public function __construct($startDate = null,
								$endDate = null,
								$referenceNumber = null,
								$scheduleId = null,
								$resourceId = null,
								$userId = null,
								$statusId = null,
								$resourceStatusId = null,
								$resourceStatusReasonId = null,
								$attributes = null)
	{
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->referenceNumber = $referenceNumber;
		$this->scheduleId = $scheduleId;
		$this->resourceId = $resourceId;
		$this->userId = $userId;
		$this->statusId = $statusId;
		$this->resourceStatusId = $resourceStatusId;
		$this->resourceStatusReasonId = $resourceStatusReasonId;
		$this->attributes = $attributes;
	}

	/**
	 * @param ISqlFilter $filter
	 * @return ReservationFilter
	 */
	public function _And(ISqlFilter $filter)
	{
		$this->_and[] = $filter;
		return $this;
	}

	public function GetFilter()
	{
		$filter = new SqlFilterNull();

		if (!empty($this->startDate)) {
			$filter->_And(new SqlFilterGreaterThan(ColumnNames::RESERVATION_START, $this->startDate->ToDatabase(), true));
		}
		if (!empty($this->endDate)) {
			$filter->_And(new SqlFilterLessThan(ColumnNames::RESERVATION_END, $this->endDate->AddDays(1)->ToDatabase(), true));
		}
		if (!empty($this->referenceNumber)) {
			$filter->_And(new SqlFilterEquals(ColumnNames::REFERENCE_NUMBER, $this->referenceNumber));
		}
		if (!empty($this->scheduleId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::RESOURCES, ColumnNames::SCHEDULE_ID), $this->scheduleId));
		}
		if (!empty($this->resourceId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::RESOURCES, ColumnNames::RESOURCE_ID), $this->resourceId));
		}
		if (!empty($this->userId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::USERS, ColumnNames::USER_ID), $this->userId));
		}
		if (!empty($this->statusId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::RESERVATION_SERIES_ALIAS, ColumnNames::RESERVATION_STATUS), $this->statusId));
		}
		if (!empty($this->resourceStatusId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::RESOURCES, ColumnNames::RESOURCE_STATUS_ID), $this->resourceStatusId));
		}
		if (!empty($this->resourceStatusReasonId)) {
			$filter->_And(new SqlFilterEquals(new SqlFilterColumn(TableNames::RESOURCES, ColumnNames::RESOURCE_STATUS_REASON_ID), $this->resourceStatusReasonId));
		}
		if (!empty($this->attributes))
		{
			$filteringAttributes = false;

			$f  = new SqlFilterFreeForm(TableNames::RESERVATION_SERIES_ALIAS . '.' . ColumnNames::SERIES_ID . ' IN (SELECT a0.' . ColumnNames::ATTRIBUTE_ENTITY_ID . ' FROM ' . TableNames::CUSTOM_ATTRIBUTE_VALUES . ' a0 ');

			$attributeFragment = new SqlFilterNull();

			/** @var $attribute Attribute */
			foreach ($this->attributes as $i => $attribute)
			{
				if ($attribute->Value() == null || $attribute->Value() == '')
				{
					continue;
				}
				$id = $attribute->Id();
				$filteringAttributes = true;
				$attributeId = new SqlRepeatingFilterColumn("a$id", ColumnNames::CUSTOM_ATTRIBUTE_ID, $id);
				$attributeValue = new SqlRepeatingFilterColumn("a$id", ColumnNames::CUSTOM_ATTRIBUTE_VALUE, $id);

				$idEquals = new SqlFilterEquals($attributeId, $attribute->Id());
				$f->AppendSql('LEFT JOIN ' . TableNames::CUSTOM_ATTRIBUTE_VALUES . ' a' . $id . ' ON a0.entity_id = a' . $id . '.entity_id ');
				if ($attribute->Type() == CustomAttributeTypes::MULTI_LINE_TEXTBOX || $attribute->Type() == CustomAttributeTypes::SINGLE_LINE_TEXTBOX)
				{
					$attributeFragment->_And($idEquals->_And(new SqlFilterLike($attributeValue, $attribute->Value())));
				}
				else
				{
					$attributeFragment->_And($idEquals->_And(new SqlFilterEquals($attributeValue, $attribute->Value())));
				}
			}

			$f->AppendSql("WHERE [attribute_list_token] )");
			$f->Substitute('attribute_list_token', $attributeFragment);

			if ($filteringAttributes)
			{
				$filter->_And($f);
			}
		}

		foreach ($this->_and as $and)
		{
			$filter->_And($and);
		}

		return $filter;
	}
}
<?php
/**
 * This source file is part of the open source project
 * ExpressionEngine (https://expressionengine.com)
 *
 * @link      https://expressionengine.com/
 * @copyright Copyright (c) 2003-2019, EllisLab Corp. (https://ellislab.com)
 * @license   https://expressionengine.com/license Licensed under Apache License, Version 2.0
 */

namespace EllisLab\ExpressionEngine\Library\CP\EntryManager\Columns;

use EllisLab\ExpressionEngine\Library\CP\EntryManager\Columns\Column;
use EllisLab\ExpressionEngine\Library\CP\Table;
use Mexitek\PHPColors\Color;

/**
 * Status Column
 */
class Status extends Column
{
	public function getTableColumnLabel()
	{
		return 'column_status';
	}

	public function getTableColumnConfig()
	{
		return [
			'type'	=> Table::COL_STATUS
		];
	}

	public function renderTableCell($entry)
	{
		$statuses = $this->getStatuses();

		if (isset($statuses[$entry->status]))
		{
			$status = $statuses[$entry->status];

			$highlight = new Color($status->highlight);
			$color = ($highlight->isLight())
				? $highlight->darken(100)
				: $highlight->lighten(100);

			return [
				'content'          => (in_array($status->status, ['open', 'closed']))
					? lang($status->status)
					: $status->status,
				'status'           => $status->status,
				'color'            => $color,
				'background-color' => $status->highlight
			];
		}

		return (in_array($entry->status, ['open', 'closed']))
				? lang($entry->status)
				: $entry->status;
	}

	private function getStatuses()
	{
		static $statuses;

		if ( ! $statuses)
		{
			$statuses = ee('Model')->get('Status')->all()->indexBy('status');
		}

		return $statuses;
	}
}
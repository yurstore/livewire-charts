<?php

namespace Yurstore\LivewireCharts\Facades;

use Yurstore\LivewireCharts\Models\AreaChartModel;
use Yurstore\LivewireCharts\Models\ColumnChartModel;
use Yurstore\LivewireCharts\Models\LineChartModel;
use Yurstore\LivewireCharts\Models\PieChartModel;
use Yurstore\LivewireCharts\Models\RadarChartModel;
use Yurstore\LivewireCharts\Models\TreeMapChartModel;
use Illuminate\Support\Facades\Facade;

/**
 * Class LivewireCharts
 * @package Yurstore\LivewireCharts\Facades
 * @method static LineChartModel lineChartModel()
 * @method static LineChartModel multiLineChartModel()
 * @method static ColumnChartModel columnChartModel()
 * @method static ColumnChartModel multiColumnChartModel()
 * @method static AreaChartModel areaChartModel()
 * @method static PieChartModel pieChartModel()
 * @method static RadarChartModel radarChartModel()
 * @method static TreeMapChartModel treeMapChartModel()
 */
class LivewireCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewirecharts';
    }
}

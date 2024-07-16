<?php


namespace Yurstore\LivewireCharts;


use Yurstore\LivewireCharts\Models\AreaChartModel;
use Yurstore\LivewireCharts\Models\ColumnChartModel;
use Yurstore\LivewireCharts\Models\LineChartModel;
use Yurstore\LivewireCharts\Models\PieChartModel;
use Yurstore\LivewireCharts\Models\RadarChartModel;
use Yurstore\LivewireCharts\Models\TreeMapChartModel;

class LivewireCharts
{
    public function lineChartModel()
    {
        return (new LineChartModel)
            ->singleLine();
    }

    public function multiLineChartModel()
    {
        return (new LineChartModel)
            ->multiLine();
    }

    public function columnChartModel()
    {
        return (new ColumnChartModel)
            ->singleColumn();
    }

    public function multiColumnChartModel()
    {
        return (new ColumnChartModel)
            ->multiColumn();
    }

    public function areaChartModel()
    {
        return new AreaChartModel;
    }

    public function pieChartModel()
    {
        return new PieChartModel;
    }

    public function radarChartModel()
    {
        return new RadarChartModel();
    }

    public function treeMapChartModel()
    {
        return new TreeMapChartModel();
    }
}

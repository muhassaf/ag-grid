<?php
$pageTitle = "Charting: Charting Grid Data";
$pageDescription = "ag-Grid is a feature-rich data grid that can also chart data out of the box. Learn how to chart data directly from inside ag-Grid.";
$pageKeyboards = "Javascript Grid Charting";
$pageGroup = "feature";
include '../documentation-main/documentation_header.php';
?>

    <h1 class="heading-enterprise">Customising Bar Charts</h1>

    <p class="lead">
        This sections details how to customise bar charts in your applications.
    </p>

    <h3>Bar Chart Option Interfaces</h3>

    <p>
        The interfaces for bar chart options are shown below:
    </p>

    <snippet>
export interface BarChartOptions {
    parent?: HTMLElement;
    width?: number;
    height?: number;
    series?: any[];
    data?: any;
    padding?:  {
        top: number;
        right: number;
        bottom: number;
        left: number;
    };
    legendPosition?: 'top' | 'right' | 'bottom' | 'left';
    legendPadding?: number;
    tooltipClass?: string;
    legend?: {
        markerLineWidth?: number;
        markerSize?: number;
        markerPadding?: number;
        itemPaddingX?: number;
        itemPaddingY?: number;
        labelFont?: string;
        labelColor?: string;
    };
    xAxis: AxisOptions;
    yAxis: AxisOptions;
    seriesDefaults?: {
        type?: string;
        data?: any[];
        title?: string;
        titleEnabled?: boolean;
        titleFont?: string;
        visible?: boolean;
        showInLegend?: boolean;
        tooltipEnabled?: boolean;
        xField?: string;
        yFields?: string[];
        yFieldNames?: string[];
        grouped?: boolean;
        fills?: string[];
        strokes?: string[];
        lineWidth?: number;
        shadow?: {
            color?: string;
            offset?: [number, number];
            blur?: number;
        };
        labelEnabled?: boolean;
        labelFont?: string;
        labelColor?: string;
        labelPadding?: {x: number, y: number};
        tooltipRenderer?: (params: BarTooltipRendererParams) => string;
    };
}

export interface BarTooltipRendererParams {
    datum: any;
    xField: string;
    yField: string;
}

export interface AxisOptions {
    type?: 'category' | 'number';

    lineWidth?: number;
    lineColor?: string;

    tickWidth?: number;
    tickSize?: number;
    tickPadding?: number;
    tickColor?: string;

    labelFont?: string;
    labelColor?: string;
    labelRotation?: number;
    mirrorLabels?: boolean;
    parallelLabels?: boolean;
    labelFormatter?: (value: any, fractionDigits?: number) => string;
    gridStyle?: IGridStyle[];
}

export interface IGridStyle {
    strokeStyle: string | null;
    lineDash: number[] | null;
}
</snippet>


<h3>Default Bar Options</h3>

<p>
    The default values for the bar chart options are shown below:
</p>

    <snippet>{
    parent: this.chartProxyParams.parentElement,
    width: this.chartProxyParams.width,
    height: this.chartProxyParams.height,
    padding: {
        top: 20,
        right: 20,
        bottom: 20,
        left: 20
    },
    xAxis: {
        type: 'category',
        labelFont: '12px Verdana, sans-serif',
        labelColor: this.getLabelColor(),
        tickSize: 6,
        tickWidth: 1,
        tickPadding: 5,
        lineColor: 'rgba(195, 195, 195, 1)',
        lineWidth: 1,
        gridStyle: [{
            strokeStyle: this.getAxisGridColor(),
            lineDash: [4, 2]
        }]
    },
    yAxis: {
        type: 'number',
        labelFont: '12px Verdana, sans-serif',
        labelColor: this.getLabelColor(),
        tickSize: 6,
        tickWidth: 1,
        tickPadding: 5,
        lineColor: 'rgba(195, 195, 195, 1)',
        lineWidth: 1,
        gridStyle: [{
            strokeStyle: this.getAxisGridColor(),
            lineDash: [4, 2]
        }]
    },
    legend: {
        labelFont: '12px Verdana, sans-serif',
        labelColor: this.getLabelColor(),
        itemPaddingX: 16,
        itemPaddingY: 8,
        markerPadding: 4,
        markerSize: 14,
        markerLineWidth: 1
    },
    seriesDefaults: {
        type: 'bar',
        fills: palette.fills,
        strokes: palette.strokes,
        grouped: this.chartProxyParams.chartType === ChartType.GroupedBar,
        lineWidth: 1,
        tooltipEnabled: true,
        labelEnabled: false,
        labelFont: '12px Verdana, sans-serif',
        labelColor: this.getLabelColor(),
        labelPadding: {x: 10, y: 10},
        tooltipRenderer: undefined,
        showInLegend: true,
        title: '',
        titleEnabled: true,
        titleFont: 'bold 12px Verdana, sans-serif'
    }
}
</snippet>

    <?= example('Provided Container', 'provided-container', 'generated', array("enterprise" => true)) ?>

<?php include '../documentation-main/documentation_footer.php'; ?>
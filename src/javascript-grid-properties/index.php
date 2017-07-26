<?php
$key = "Properties";
$pageTitle = "ag-Grid Properties";
$pageDescription = "Learn how each property impacts ag-Grid.";
$pageKeyboards = "javascript data grid ag-Grid properties";
$pageGroup = "reference";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h1 id="properties" class="first-h1">Grid Properties</h1>

    <table class="table">
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Columns</td>
        </tr>
        <tr>
            <th>columnDefs</th>
            <td>Array of <a href="../javascript-grid-column-definitions/">Column Definitions</a>.</td>
        </tr>
        <tr>
            <th>defaultColDef</th>
            <td>A <a href="../javascript-grid-column-definitions/#default-column-definitions">default column</a>
                definition.</td>
        </tr>
        <tr>
            <th>defaultColGroupDef</th>
            <td>A <a href="../javascript-grid-column-definitions/#default-column-definitions">default column group</a>
                definition. All column group definitions will use these properties. Items defined in the
                actual column group definition get precedence.</td>
        </tr>
        <tr>
            <th>enableColResize</th>
            <td>Set to true to allow <a href="../javascript-grid-resizing/">column resizing</a> by dragging the mouse
                at a columns headers edge.</td>
        </tr>
        <tr>
            <th>suppressAutoSize</th>
            <td>Suppresses <a href="../javascript-grid-resizing/#auto-size-columns">auto-sizing columns</a> for columns.
                In other words, double clicking a columns headers edge will not auto-size.</td>
        </tr>
        <tr>
            <th>autoSizePadding</th>
            <td>How many pixels to add to a column width after the <a href="../javascript-grid-resizing/#auto-size-columns">
                auto-sizing</a> calculation. The default is 4 pixels. Set this if you want to add extra room to accommodate
                (for example) sort icons, or some other dynamic nature of the header.</td>
        </tr>
        <tr>
            <th>suppressColumnMoveAnimation</th>
            <td>If true, the <code>ag-column-moving</code> class is not added to the grid while columns are moving.
                In the default <a href="../javascript-grid-styling/">themes</a>, this transpires to no animation for
                moving columns.</td>
        </tr>
        <tr>
            <th>suppressMovableColumns</th>
            <td>
                Set to true to suppress column moving. In other words, set to true to make the columns fixed position.
            </td>
        </tr>
        <tr>
            <th>suppressFieldDotNotation</th>
            <td>If true, then dots (eg <code>address.firstline</code>) in field names are not treated as deep references.
                Allows you to use dots in your field name if you prefer.</td>
        </tr>
        <tr>
            <th>unSortIcon</th>
            <td>
                Set to true to show the 'no sort' icon. See
                <a href="../javascript-grid-sorting/#example-custom-sorting">Example Custom Sorting</a>.
            </td>
        </tr>
        <tr>
            <th>suppressMultiSort</th>
            <td>Set to true to suppress multi-sort when the user shift-clicks a column header.</td>
        </tr>
        <tr>
            <th>suppressMenuHide</th>
            <td>Set to true to always show the column menu button, rather than only showing when the mouse is
                over the column header.</td>
        </tr>
        <tr>
            <th>autoGroupColumnDef</th>
            <td>Allows specifying the group 'auto column' if you are not happy with the default. If grouping, this column def is included as the first column definition in the grid. If not grouping,
                this column is not included.</td>
        </tr>

        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Sort & Filter</td>
        </tr>
        <tr>
            <th>enableSorting</th>
            <td>Set to true when using <a href="../javascript-grid-in-memory/">In Memory</a> Row Model to enable
                <a href="../javascript-grid-sorting/">Row Sorting</a>. Clicking a column header will cause the grid
                to sort the data.</td>
        </tr>
        <tr>
            <th>enableServerSideSorting</th>
            <td>Set to true when using <a href="../javascript-grid-in-memory/">Infinite</a>,
                <a href="../javascript-grid-in-memory/">Enterprise</a> or
                <a href="../javascript-grid-viewport/">Viewport</a> Row Models to enable
                <a href="../javascript-grid-sorting/">Row Sorting</a>. Clicking a column header will
                result in your datasource getting asked for the data again with the new sort order.</td>
        </tr>
        <tr>
            <th>enableFilter</th>
            <td>Set to true when using <a href="../javascript-grid-in-memory/">In Memory</a> Row Model to enable
                <a href="../javascript-grid-filtering/">Row Filtering</a>.</td>
        </tr>
        <tr>
            <th>enableServerSideFilter</th>
            <td>Set to true when using <a href="../javascript-grid-in-memory/">Infinite</a>,
                <a href="../javascript-grid-in-memory/">Enterprise</a> or
                <a href="../javascript-grid-viewport/">Viewport</a> Row Models to enable
                <a href="../javascript-grid-filtering/">Row Filtering</a>.
                A change in filter will result in your datasource getting asked for the
                data again with the new filter.</td>
        </tr>
        <tr>
            <th>quickFilterText</th>
            <td>Rows are filtered using this text as a <a href="../javascript-grid-filter-quick/">quick filter</a>.</td>
        </tr>
        <tr>
            <th>cacheQuickFilter</th>
            <td>Set to true to turn on the <a href="../javascript-grid-filter-quick/#quick-filter-cache">
                    quick filter cache</a>, used for a performance gain when using the quick filter.</td>
        </tr>
        <tr>
            <th>sortingOrder</th>
            <td>
                Array defining the order in which sorting occurs (if sorting is enabled). Values can be <code>asc</code>,
                <code>desc</code> or <code>null</code>. For example: <code>sortingOrder: ['asc', 'desc']</code>.
                See <a href="../javascript-grid-sorting/#example-sorting-order-and-animation">Example
                Sorting Order and Animation</a>.
            </td>
        </tr>
        <tr>
            <th>accentedSort</th>
            <td>
                Set to true to specify that the sort should take into account accented characters, if this feature is
                turned on the sort will perform slower. See
                <a href="../javascript-grid-sorting/#accentedSort">Accented Sort</a>
            </td>
        </tr>

        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Selection</td>
        </tr>

        <tr>
            <th>suppressRowClickSelection</th>
            <td>
                If true, <a href="../javascript-grid-selection/">row selection</a>
                won't happen when rows are clicked. Use when you want checkbox selection exclusively.
            </td>
        </tr>
        <tr>
            <th>suppressCellSelection</th>
            <td>If true, cells won't be selectable. This means cells will not get keyboard focus when you
                click on them.</td>
        </tr>
        <tr>
            <th>enableRangeSelection</th>
            <td>Set to true to enable <a href="../javascript-grid-range-selection/">Range Selection</a>.</td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Editing</td>
        </tr>
        <tr>
            <th>singleClickEdit</th>
            <td>Set to true to enable <a href="../javascript-grid-cell-editing/#singleClickEditing">Single
                Click Editing</a> for cells, to start editing with a single click.</td>
        </tr>
        <tr>
            <th>suppressClickEdit</th>
            <td>
                Set to true so that neither single or double click starts editing.
                See <a href="../javascript-grid-cell-editing/#singleClickEditing">Single Click, Double Click,
                    No Click Editing</a>
            </td>
        </tr>
        <tr>
            <th>enableGroupEdit</th>
            <td>
                Set to true to enable <a href="../javascript-grid-cell-editing/#groupEditing">Group Editing</a>,
                otherwise by default, row groups cannot be edited.
            </td>
        </tr>
        <tr>
            <th>editType</th>
            <td>
                Set to 'fullRow' to enable <a href="../javascript-grid-cell-editing/#fullRowEdit">Full Row Editing</a>.
                Otherwise leave blank to edit one cell at a time.
            </td>
        </tr>
        <tr>
            <th>enableCellChangeFlash</th>
            <td>Set to true to have cells flash after data changes.
                See <a href="../javascript-grid-data-update/#flashing">Flashing Data Changes</a>.</td>
        </tr>
        <tr>
            <th>stopEditingWhenGridLosesFocus</th>
            <td>
                Set this to true to <a href="../javascript-grid-cell-editing/#losingFocusStopsEditing">
                stop cell editing when grid loses focus</a>. The default is the grid stays editing
                until focus goes onto another cell. For inline (non-popup) editors only.
            </td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Headers</td>
        </tr>
        <?php include '../javascript-grid-column-header/headerHeightProperties.php' ?>
        <?php printPropertiesRowsWithHelp($headerHeightProperties) ?>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Row Grouping & Pivoting</td>
        </tr>
        <?php include '../javascript-grid-grouping/rowGroupingProperties.php' ?>
        <?php printPropertiesRowsWithHelp($rowGroupingProperties) ?>
        <tr>
            <th>pivotMode</th>
            <td>Set to true to enable pivot mode. See <a href="../javascript-grid-pivoting/">Pivoting</a>.</td>
        </tr>
        <tr>
            <th>pivotPanelShow</th>
            <td>When to show the 'pivot panel' (where you drag rows to pivot) at the top. Default
                is never. Set to either 'always' or 'onlyWhenPivoting'. Note that the pivot panel
                will never show if pivotMode is off.</td>
        </tr>
        <tr>
            <th>rememberGroupStateWhenNewData</th>
            <td>When true, if you set new data into the grid and have groups open, the grid will keep
                groups open if they exist in the new dataset.
                See <a href="../javascript-grid-grouping/#keeping-group-state">Keeping Group State</a>.</td>
        </tr>
        <tr>
            <th>suppressAggFuncInHeader</th>
            <td>When true, column headers won't include the aggFunc, eg 'sum(Bank Balance)' will
                just be 'Bank Balance'.</td>
        </tr>
        <tr>
            <th>suppressAggAtRootLevel</th>
            <td>When true, the aggregations won't be computed for root node of the grid.</td>
        </tr>
        <tr>
            <th>aggregateOnlyChangedColumns</th>
            <td>When using <a href="../javascript-grid-change-detection/#tree-path-selection">change detection</a>,
                only the updated column with get re-aggregated.</td>
        </tr>
        <tr>
            <th>functionsReadOnly</th>
            <td>If true, then row group, pivot and value aggregation will be read only from the gui. The grid will display
                what values are used for each, but will not allow the use to change the selection. See
            <a href="../javascript-grid-tool-panel/#read-only-functions">Read Only Functions</a>.</td>
        </tr>
        <tr>
            <th>aggFuncs</th>
            <td>A map of 'function name' to 'function' for custom aggregation functions.
                See example <a href="../javascript-grid-aggregation/#custom-aggregation-functions">Custom Aggregation Functions</a>.
            </td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Tool Panel</td>
        </tr>
        <tr>
            <th>toolPanelSuppressRowGroups, toolPanelSuppressValues, toolPanelSuppressPivots, toolPanelSuppressPivotMode</th>
            <td>Set to true to hide the relevant sections in the <a href="../javascript-grid-tool-panel">Tool Panel</a>.
            See example <a href="../javascript-grid-tool-panel/#suppressExample">Suppress Panels</a></td>
        </tr>
        <tr>
            <th>showToolPanel</th>
            <td>Set to true to show the <a href="../javascript-grid-tool-panel">Tool Panel</a> by default.</td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Data & Row Models</td>
        </tr>
        <tr>
            <th>rowModelType</th>
            <td>Sets the <a href="../javascript-grid-row-models/">Row Model</a> type.
                Defaults to 'inMemory'. Valid options are [inMemory,infinite,viewport,enterprise].</td>
        </tr>
        <tr>
            <th>rowData</th>
            <td><a href="../javascript-grid-in-memory/">In Memory</a> row model only - set the data to be displayed as rows in the grid.</td>
        </tr>
        <tr>
            <th>deltaRowDataMode</th>
            <td><a href="../javascript-grid-in-memory/">In Memory</a> row model only - enables <a href="../javascript-grid-data-update/#delta-row-data">delta row data mode</a>, for compatibility with immutable stores.</td>
        </tr>
        <tr>
            <th>pinnedTopRowData</th>
            <td>Data to be displayed as <a href="../javascript-grid-row-pinning/">Pinned Top Rows</a> in the grid.</td>
        </tr>
        <tr>
            <th>pinnedBottomRowData</th>
            <td>Data to be displayed as <a href="../javascript-grid-row-pinning/">Pinned Bottom Rows</a> in the grid.</td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Selection</td>
        </tr>
        <tr>
            <th>rowSelection</th>
            <td>Type of <a href="../javascript-grid-selection/">Row Selection</a>, set to either 'single' or 'multiple'.</td>
        </tr>
        <tr>
            <th>rowDeselection</th>
            <td>If true then rows will be deselected if you hold down ctrl + click the row.</td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Scrolling</td>
        </tr>
        <tr>
            <th>suppressHorizontalScroll</th>
            <td>
                Set to true to never show the horizontal scroll. This is useful if the grid is aligned with
                another grid and will scroll when the other grid scrolls. See example
                <a href="../javascript-grid-aligned-grids/#aligned-grid-as-footer">Aligned Grid as Footer</a>
            </td>
        </tr>
        <tr>
            <th>suppressColumnVirtualisation</th>
            <td>Set to true so that the grid doesn't virtualise the columns. So if you have 100 columns, but
                only 10 visible due to scrolling, all 100 will always be rendered.</td>
        </tr>
        <tr>
            <th style="text-decoration: line-through">suppressRowVirtualisation</th>
            <td>There is no property suppressRowVirtualisation - if you want to do this, then set the rowBuffer
            property to be very large, eg 9999. But be careful, lots of rendered ros will mean a very large amount
            of rendering in the DOM which will slow things down.</td>
        </tr>
        <tr>
            <th>suppressScrollLag</th>
            <td>By default, scrolling lag is enabled for Safari and Internet Explorer (to solve scrolling performance
                issues in these browsers). To override when to use scroll lag either a) set suppressScrollLag to
                true to turn off scroll lag feature or b) return true of false from the function
                isScrollLag. This is a function, as it's expected your code will check the environment to decide
                whether to use scroll lag or not.</td>
        </tr>
        <tr>
            <th>suppressScrollOnNewData</th>
            <td>When true, the grid will not scroll to the top when new row data is provided. Use this
            if you don't want the default behaviour of scrolling to the top every time you load new data.</td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Pagination</td>
        </tr>
        <?php include '../javascript-grid-pagination/paginationProperties.php'?>
        <?php printPropertiesRowsWithHelp($paginationProperties) ?>

        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Row Model: Infinite Scrolling</td>
        </tr>
        <tr>
            <th>maxConcurrentDatasourceRequests</th>
            <td>How many concurrent data requests are allowed.</td>
        </tr>
        <tr>
            <th>maxPagesInCache</th>
            <td>How many pages to hold in the cache.</td>
        </tr>
        <tr>
            <th>paginationOverflowSize</th>
            <td>How many rows to seek ahead when unknown data size.</td>
        </tr>
        <tr>
            <th>paginationInitialRowCount</th>
            <td>How many rows to initially allow scrolling to in the grid.</td>
        </tr>


        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Row Model: Viewport</td>
        </tr>
        <tr>
            <th>viewportRowModelPageSize</th>
            <td>When using viewport row model, sets the pages size for the viewport.</td>
        </tr>
        <tr>
            <th>viewportRowModelBufferSize</th>
            <td>When using viewport row model, sets the buffer size for the viewport.</td>
        </tr>
        <tr>
            <th>viewportDatasource</th>
            <td>To use the viewportRowModel you provide the grid with a viewportDatasource. See <a href="../javascript-grid-viewport/">Viewport</a> for more information.</td>
        </tr>

        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Full Width Renderers</td>
        </tr>
        <tr>
            <th>groupRowRenderer <br/>groupRowRendererFramework <br/>groupRowRendererParams</th>
            <td>
                Sets the <a href="../javascript-grid-cell-rendering-components">Cell Renderer</a> to use when
                <code>groupUseEntireRow=true</code>. See
                <a href="../javascript-grid-grouping/#groupingCallbacks">row grouping</a>.
            </td>
        </tr>
        <tr>
            <th>groupRowInnerRenderer<br/> groupRowInnerRendererFramework</th>
            <td>
                Sets the inner <a href="../javascript-grid-cell-rendering-components">Cell Renderer</a> to use when
                <code>groupUseEntireRow=true</code>. See
                <a href="../javascript-grid-grouping/#groupingCallbacks">row grouping</a>.
            </td>
        </tr>
        <tr>
            <th>fullWidthCellRenderer, fullWidthCellRendererFramework, fullWidthCellRendererParams</th>
            <td>Sets the <a href="../javascript-grid-cell-rendering-components">Cell Renderer</a> to use for
                <a href="../javascript-grid-full-width-rows/">Full Width Rows</a>.</td>
        </tr>

        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Rendering & Styling</td>
        </tr>
        <tr>
            <th>icons</th>
            <td>
                <a href="../javascript-grid-icons/">Icons</a> to use inside the grid instead of the grid's default icons.
            </td>
        </tr>
        <tr>
            <th>rowHeight</th>
            <td>Default <a href="../javascript-grid-row-height/">Row Height</a> in pixels. Default is 25 pixels.</td>
        </tr>
        <tr>
            <th>animateRows</th>
            <td>Set to true to enable <a href="../javascript-grid-animation/#row-animations">Row Animation</a>.</td>
        </tr>
        <tr>
            <th>rowClass</th>
            <td>The class to give a particular row. See <a href="../javascript-grid-cell-styling/#rowStyling">Row Styling</a>.</td>
        </tr>
        <tr>
            <th>rowStyle</th>
            <td>The style to give a particular row. See <a href="../javascript-grid-cell-styling/#rowStyling">Row Styling</a>.</td>
        </tr>
        <tr>
            <th>suppressRowHoverClass</th>
            <td>
                Normally the grid adds CSS class <i>ag-row-hover</i> when mouse is hovering over a row. This requires
                the grid to add hover listeners to each row which is expensive (only to be considered expensive if you
                are having performance issues, such as running on old machine with IE). Set this property to true to
                drop this feature in favour of a slight performance gain.
            </td>
        </tr>
        <tr>
            <th>excelStyles</th>
            <td>The list of Excel styles to be used when <a href="../javascript-grid-excel/">exporting to Excel</a></td>
        </tr>
        <tr>
            <th>scrollbarWidth</th>
            <td>
                To tell grid how wide the scrollbar is which gets used in calculations on grid width calculations. Set
                only if using non-standard browser provided scrollbars, so the grid can use the non-standard size in
                its calculations.
            </td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Localisation</td>
        </tr>

        <tr>
            <th>localeText, localeTextFunc</th>
            <td>You can change the text in the paging panels and the default filters by providing a <i>localeText</i> or
                a <i>localeTextFunc</i> (see below). See <a href="../javascript-grid-internationalisation/">Internationalisation</a> for more information. </td>
        </tr>
        <tr class="title-row">
            <!-- TITLE ROW -->
            <td colspan="2">Miscellaneous</td>
        </tr>

        <?php include '../javascript-grid-value-cache/valueCacheProperties.php' ?>
        <?php printPropertiesRows($valueCacheProperties) ?>
        <tr>
            <th>defaultExportParams</th>
            <td>A default configuration object used to export to <a href="../javascript-grid-export/">csv</a> or
                <a href="../javascript-grid-excel/">excel</a></td>
        </tr>
        <tr>
            <th>suppressMiddleClickScrolls</th>
            <td>If true, then middle clicks will result in 'click' events for cell and row. Otherwise the browser
                will use middle click to scroll the grid.</td>
        </tr>
        <tr>
            <th>suppressPreventDefaultOnMouseWheel</th>
            <td>If true, mouse wheel events will be passed to the browser - useful if your grid has no vertical scrolls 
                and you want the mouse to scroll the browser page.</td>
        </tr>
        <tr>
            <th>enableCellExpressions</th>
            <td>Set to true to allow cells to contain expressions.</td>
        </tr>
        <tr>
            <th>domLayout</th>
            <td>Set to 'forPrint' for 'autoHeight'. By default, grid will fit width and height of the provided
                div. If more rows or columns, grid will provide scrolls. If you to 'autoHeight', then the grid
                will autosize it's height to fit the rows but still provide horizontal scrolls. If set to
                'forPrint', then the grid will have no scrolls (or pinned areas or tool panel) and every
                cell will be rendered - use this if you want a printable version of the grid.
            </td>
        </tr>

        <tr>
            <th>ensureDomOrder</th>
            <td>When true, this property ensures the order of rows and columns, including the headers.</td>
        </tr>

        <tr>
            <th>rowBuffer</th>
            <td>The number of rows rendered outside the scrollable viewable area the grid renders. Defaults to 20.
                Having a buffer means the grid will have rows ready to show as the user slowly scrolls vertically.</td>
        </tr>
        <tr>
            <th>suppressMovingInCss</th>
            <td>Does not apply 'ag-column-moving' class into grid when dragging columns. For the provided themes,
                this stops the animation while moving columns via dragging their headers.</td>
        </tr>
        <tr>
            <th>suppressLoadingOverlay</th>
            <td>Disables the 'loading' overlay.</td>
        </tr>
        <tr>
            <th>suppressNoRowsOverlay</th>
            <td>Disables the 'no rows' overlay.</td>
        </tr>
        <tr>
            <th>slaveGrids</th>
            <td>A list of grids to treat as slaves. If a grid is a slave, its columns and horizontal scrolling
                will try to mirror the columns of the master.</td>
        </tr>
        <tr>
            <th>overlayLoadingTemplate</th>
            <td>Provide a template for 'loading' overlay if not happy with the provided.</td>
        </tr>
        <tr>
            <th>overlayNoRowsTemplate</th>
            <td>Provide a template for 'no rows' overlay if not happy with the provided.</td>
        </tr>
        <tr>
            <th>suppressParentsInRowNodes</th>
            <td>If true, rowNodes don't get their parents set. The grid doesn't use the parent reference,
                it's included to help the client code navigate the node tree if it wants by providing bi-direction
                navigation up and down the tree. If this is a problem (eg if you need to convert the tree to JSON,
                which requires no cyclic dependencies) then set this to true.</td>
        </tr>
        <tr>
            <th>suppressDragLeaveHidesColumns</th>
            <td>If true, when you drag a column out of the grid (eg to the group zone) the column is not
                hidden.</td>
        </tr>
        <tr>
            <th>suppressCopyRowsToClipboard</th>
            <td>Set to true to only have range selection, and not row selection, copied to clipboard.</td>
        </tr>
        <tr>
            <th>clipboardDeliminator</th>
            <td>To specify deliminator to use while copying to clipboard.</td>
        </tr>
        <tr>
            <th>suppressFocusAfterRefresh</th>
            <td>Set to true to not set focus back on the grid after a refresh. This can avoid issues where you
                want to keep the focus on another part of the browser.</td>
        </tr>

        <tr>
            <th>layoutInterval</th>
            <td>The grid will check its size 500ms and lay itself out again if the size changes - such as your browser
                changes size, or your application changes the size of the div the grid live inside. If you want something
                other than 500ms, set this to a number of milliseconds. To stop the periodic layout, set it to -1.</td>
        </tr>
        <tr>
            <th>suppressTabbing</th>
            <td>Set to true to remove the grid tabbing functionality. Use this if you want to manage tabbing
                differently to what the grid provides..</td>
        </tr>
        <tr>
            <th>enableRtl</th>
            <td>Set to true to operate grid in RTL (Right to Left) mode.</td>
        </tr>
        <tr>
            <th>debug</th>
            <td>Set this to true to enable debug information from ag-grid and related components. Will result in
                additional logging being output, but very useful when investigating problems.</td>
        </tr>

        <tr>
            <th>context</th>
            <td>Provides a context which can be used when rendering, setting row height, filtering and so on.</td>
        </tr>
        <tr>
            <th>suppressContextMenu</th>
            <td>Set to true to not show context menu. Use if you don't want to use the default 'right click' context menu.</td>
        </tr>
        <tr>
            <th>allowContextMenuWithControlKey</th>
            <td>Allows context menu to show, even when ctrl key is held down.</td>
        </tr>
        <tr>
            <th>suppressEnterprise</th>
            <td>Turn off enterprise features. This is used by ag-Grid testers, mentioned
                here in case someone is looking at the code and wondering.</td>
        </tr>
        <tr>
            <th>enableStatusBar</th>
            <td>When true, the status bar appear at the bottom of the grid when cells are selected.</td>
        </tr>
        <tr>
            <th>alwaysShowStatusBar</th>
            <td>When true, the status bar will always be displayed at the bottom of the grid, when 'enableStatusBar' is also enabled</td>
        </tr>
        <tr>
            <th>suppressTouch</th>
            <td>Disables touch support (but does not remove the browsers efforts to simulate mouse events on touch).</td>
        </tr>
        <tr>
            <th>suppressAsyncEvents</th>
            <td>Disables the async nature of the events introduced in v10, and makes them syncrhonous. This property
            is only introduced for the purpose of supporting legacy code which has a dependency to sync events. It is
            strongly recommended that you don't change this property unless you have legacy issues</td>
        </tr>
    </table>
</div>

<?php include '../documentation-main/documentation_footer.php';?>

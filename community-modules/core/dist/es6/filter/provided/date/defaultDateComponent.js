/**
 * @ag-grid-community/core - Advanced Data Grid / Data Table supporting Javascript / React / AngularJS / Web Components
 * @version v23.0.0
 * @link http://www.ag-grid.com/
 * @license MIT
 */
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
import { Autowired } from "../../../context/context";
import { Component } from "../../../widgets/component";
import { RefSelector } from "../../../widgets/componentAnnotations";
import { _ } from "../../../utils";
var DefaultDateComponent = /** @class */ (function (_super) {
    __extends(DefaultDateComponent, _super);
    function DefaultDateComponent() {
        return _super.call(this, "<div class=\"ag-filter-filter\"><ag-input-text-field class=\"ag-date-filter\" ref=\"eDateInput\"></ag-input-text-field></div>") || this;
    }
    DefaultDateComponent.prototype.init = function (params) {
        var _this = this;
        var translate = this.gridOptionsWrapper.getLocaleTextFunc();
        this.eDateInput.setInputPlaceholder(translate('dateFormatOoo', 'yyyy-mm-dd'));
        if (_.isBrowserChrome() || (params.filterParams && params.filterParams.browserDatePicker)) {
            if (_.isBrowserIE()) {
                console.warn('ag-grid: browserDatePicker is specified to true, but it is not supported in IE 11, reverting to plain text date picker');
            }
            else {
                this.eDateInput.getInputElement().type = 'date';
            }
        }
        this.listener = params.onDateChanged;
        this.addDestroyableEventListener(this.eDateInput.getInputElement(), 'input', function (e) {
            if (e.target !== document.activeElement) {
                return;
            }
            _this.listener();
        });
    };
    DefaultDateComponent.prototype.getDate = function () {
        return _.getDateFromString(this.eDateInput.getValue());
    };
    DefaultDateComponent.prototype.setDate = function (date) {
        this.eDateInput.setValue(_.serializeDateToYyyyMmDd(date, "-"));
    };
    DefaultDateComponent.prototype.setInputPlaceholder = function (placeholder) {
        this.eDateInput.setInputPlaceholder(placeholder);
    };
    __decorate([
        Autowired('gridOptionsWrapper')
    ], DefaultDateComponent.prototype, "gridOptionsWrapper", void 0);
    __decorate([
        RefSelector('eDateInput')
    ], DefaultDateComponent.prototype, "eDateInput", void 0);
    return DefaultDateComponent;
}(Component));
export { DefaultDateComponent };

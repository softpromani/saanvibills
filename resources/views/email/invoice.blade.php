
<head>
<style>
    /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
.actions-btn-tooltip.tooltip {
  opacity: 1;
  top: -11px !important;
}
.actions-btn-tooltip .arrow:before {
  border-top-color: #3b3f5c;
}
.actions-btn-tooltip .tooltip-inner {
  background: #3b3f5c;
  color: #fff;
  font-weight: 700;
  border-radius: 30px;
  box-shadow: 0px 5px 15px 1px rgba(113, 106, 202, 0.2);
  padding: 4px 16px;
}

.invoice-container {
  width: 100%;
}

.invoice-inbox {
  padding: 0;
  background-color: #fff;
  border: 1px solid #e0e6ed;
  border-radius: 8px;
}
.invoice-inbox .inv-number {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 0;
  color: #888ea8;
}
.invoice-inbox .invoice-action svg {
  cursor: pointer;
  font-weight: 600;
  color: #888ea8;
  margin-right: 6px;
  vertical-align: middle;
  fill: rgba(0, 23, 55, 0.08);
}
.invoice-inbox .invoice-action svg:not(:last-child) {
  margin-right: 15px;
}
.invoice-inbox .invoice-action svg:hover {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.2392156863);
}

/*
===================

     Invoice

===================
*/
/*    Inv head section   */
.invoice .content-section .inv--head-section {
  padding: 36px 35px;
  margin-bottom: 40px;
  padding-bottom: 25px;
  border-bottom: 1px solid #e0e6ed;
}

.inv--customer-detail-section {
  padding: 36px 35px;
  padding-top: 0;
}

.invoice .content-section .inv--head-section h3.in-heading {
  font-size: 18px;
  font-weight: 600;
  color: #0e1726;
  margin: 0;
  margin-left: 12px;
}
.invoice .content-section .inv--head-section .company-logo {
  width: 70px;
  height: 70px;
}
.invoice .content-section .inv--head-section div.company-info {
  display: flex;
  justify-content: flex-end;
}
.invoice .content-section .inv--head-section div.company-info svg {
  width: 42px;
  height: 42px;
  margin-right: 10px;
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.2392156863);
}
.invoice .content-section .inv--head-section .inv-brand-name {
  font-size: 23px;
  font-weight: 600;
  margin-bottom: 0;
  align-self: center;
}
.invoice .content-section .inv--detail-section .inv-to {
  font-weight: 700;
  font-size: 15px;
  margin-bottom: 15px;
}
.invoice .content-section .inv--detail-section .inv-customer-name {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 15px;
  color: #4361ee;
}
.invoice .content-section .inv--detail-section .inv-detail-title {
  font-weight: 700;
  margin-bottom: 0;
  font-size: 15px;
  margin-bottom: 15px;
}
.invoice .content-section .inv--detail-section .inv-details {
  font-weight: 700;
  margin-bottom: 15px;
}
.invoice .content-section .inv--detail-section .inv-street-addr {
  /* font-weight: 600; */
  margin-bottom: 2px;
  font-size: 15px;
  color: #3b3f5c;
}
.invoice .content-section .inv--detail-section .inv-email-address {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 15px;
  color: #515365;
}
.invoice .content-section .inv--detail-section .inv-list-number {
  margin-bottom: 2px;
}
.invoice .content-section .inv--detail-section .inv-list-number .inv-title {
  font-weight: 400;
  font-size: 20px;
}
.invoice .content-section .inv--detail-section .inv-list-number .inv-number {
  font-weight: 400;
  font-size: 18px;
  color: #4361ee;
}
.invoice .content-section .inv--detail-section .inv-created-date, .invoice .content-section .inv--detail-section .inv-due-date {
  margin-bottom: 2px;
  color: #888ea8;
}
.invoice .content-section .inv--detail-section .inv-created-date .inv-title, .invoice .content-section .inv--detail-section .inv-due-date .inv-title {
  font-weight: 700;
  font-size: 15px;
}
.invoice .content-section .inv--detail-section .inv-created-date .inv-date, .invoice .content-section .inv--detail-section .inv-due-date .inv-date {
  font-size: 15px;
  font-weight: 600;
}
.invoice .content-section .inv--product-table-section {
  padding: 30px 0;
}
.invoice .content-section .inv--product-table-section table {
  margin-bottom: 0;
}
.invoice .content-section .inv--product-table-section thead tr {
  border: none;
}
.invoice .content-section .inv--product-table-section th {
  background: transparent;
  border-top: 1px solid #e0e6ed;
  border-bottom: 1px solid #e0e6ed;
}
.invoice .content-section .inv--product-table-section th:first-child {
  padding-left: 35px;
  border-radius: 0;
}
.invoice .content-section .inv--product-table-section th:last-child {
  padding-right: 35px;
  border-radius: 0;
}
.invoice .content-section .inv--product-table-section tr td:first-child {
  padding-left: 35px;
}
.invoice .content-section .inv--product-table-section tr td:last-child {
  padding-right: 35px;
}
.invoice .content-section .inv--product-table-section td {
  border: none;
  padding: 10px 25px;
  vertical-align: top !important;
  font-size: 15px;
}
.invoice .content-section .inv--product-table-section tbody tr {
  border-bottom: 1px solid #191e3a;
}
.invoice .content-section .inv--product-table-section tbody tr:nth-of-type(even) td {
  background-color: #f1f2f3 !important;
}
.invoice .content-section .inv--payment-info {
  font-size: 15px;
  font-weight: 600;
}
.invoice .content-section .inv--payment-info .inv-title {
  color: #4361ee;
  font-weight: 600;
  margin-bottom: 15px;
  width: 65%;
  margin-left: auto;
}
.invoice .content-section .inv--payment-info p {
  margin-bottom: 0;
  display: flex;
  width: 65%;
  margin-left: auto;
  justify-content: space-between;
}
.invoice .content-section .inv--payment-info span {
  font-weight: 500;
  display: inline-block;
  color: #888ea8;
  white-space: nowrap;
}
.invoice .content-section .inv--payment-info .inv-subtitle {
  font-weight: 600;
  font-size: 15px;
  display: inline-block;
  color: #888ea8;
  white-space: normal;
  margin-right: 4px;
}
.invoice .content-section .inv--total-amounts {
  padding: 0 35px;
  margin-bottom: 25px;
  padding-bottom: 25px;
  border-bottom: 1px solid #e0e6ed;
}
.invoice .content-section .inv--total-amounts .grand-total-title h4, .invoice .content-section .inv--total-amounts .grand-total-amount h4 {
  position: relative;
  font-weight: 600;
  font-size: 16px;
  margin-bottom: 0;
  padding: 0;
  color: #fff;
  display: inline-block;
  letter-spacing: 1px;
}

/*    Inv detail section    */
/*inv-list-number*/
/*inv-created-date*/
/*inv-due-date*/
/*    Inv product table section    */
/*inv--payment-info*/
/*inv--total-amounts*/
/*inv--note*/
.inv--note {
  padding: 0 25px;
  padding-bottom: 25px;
}
.inv--note p {
  margin-bottom: 0;
  font-weight: 600;
  color: #0e1726;
}

@media print {
  body * {
    visibility: hidden;
  }

  #ct {
    visibility: visible;
  }
  #ct * {
    visibility: visible;
  }

  .doc-container {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
  }
}
@page {
  size: auto;
  margin: 0mm;
}
/*
===============================
    Invoice Actions Button
===============================
*/
.invoice-actions-btn {
  padding: 25px;
  padding-top: 32px;
  padding-bottom: 32px;
  background-color: #fff;
  border-radius: 8px;
  border: 1px solid #e0e6ed;
}
.invoice-actions-btn label {
  font-size: 14px;
  font-weight: 600;
  color: #515365;
}
.invoice-actions-btn .invoice-action-btn a {
  -webkit-transform: none;
  transform: none;
}
.invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print, .invoice-actions-btn .invoice-action-btn a.btn-download {
  width: 100%;
  margin-bottom: 20px;
}
.invoice-actions-btn .invoice-action-btn a.btn-edit {
  width: 100%;
}

/* Invoice Actions -> action-btn */
@media (max-width: 1199px) {
  .invoice-actions-btn {
    margin-top: 25px;
  }
  .invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print, .invoice-actions-btn .invoice-action-btn a.btn-download {
    margin-bottom: 0;
  }
}
@media (max-width: 767px) {
  .invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print {
    margin-bottom: 20px;
  }
}
@media (max-width: 575px) {
  .invoice .content-section .inv--payment-info .inv-title {
    margin-top: 25px;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 6px;
    width: auto;
  }
  .invoice .content-section .inv--payment-info p {
    margin-left: 0;
    margin-right: auto;
    width: auto;
    justify-content: flex-start;
  }
  .invoice .content-section .inv--payment-info .inv-subtitle {
    min-width: 140px;
  }

  .invoice-actions-btn .invoice-action-btn a.btn-download {
    margin-bottom: 20px;
  }

  .invoice .content-section .inv--payment-info span {
    white-space: normal;
  }
}


/*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
body.dark .actions-btn-tooltip.tooltip {
  opacity: 1;
  top: -11px !important;
}
body.dark .actions-btn-tooltip .arrow:before {
  border-top-color: #3b3f5c;
}
body.dark .actions-btn-tooltip .tooltip-inner {
  background: #3b3f5c;
  color: #fff;
  font-weight: 700;
  border-radius: 30px;
  box-shadow: 0px 5px 15px 1px rgba(113, 106, 202, 0.2);
  padding: 4px 16px;
}
body.dark .invoice-container {
  width: 100%;
}
body.dark .invoice-inbox {
  padding: 0;
  background-color: #0e1726;
  box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06);
  border-radius: 8px;
  border: 1px solid #0e1726;
}
body.dark .invoice-inbox .inv-number {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 0;
  color: #888ea8;
}
body.dark .invoice-inbox .invoice-action svg {
  cursor: pointer;
  font-weight: 600;
  color: #888ea8;
  margin-right: 6px;
  vertical-align: middle;
  fill: rgba(0, 23, 55, 0.08);
}
body.dark .invoice-inbox .invoice-action svg:not(:last-child) {
  margin-right: 15px;
}
body.dark .invoice-inbox .invoice-action svg:hover {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.2392156863);
}

/*
===================

     Invoice

===================
*/
/*    Inv head section   */
body.dark .invoice .content-section .inv--head-section {
  padding: 36px 35px;
  margin-bottom: 40px;
  padding-bottom: 25px;
  border-bottom: 1px solid #191e3a;
}
body.dark .inv--customer-detail-section {
  padding: 36px 35px;
  padding-top: 0;
}
body.dark .invoice .content-section .inv--head-section h3.in-heading {
  font-size: 18px;
  font-weight: 600;
  color: #e0e6ed;
  margin: 0;
  margin-left: 12px;
}
body.dark .invoice .content-section .inv--head-section .company-logo {
  width: 70px;
  height: 70px;
}
body.dark .invoice .content-section .inv--head-section div.company-info {
  display: flex;
  justify-content: flex-end;
}
body.dark .invoice .content-section .inv--head-section div.company-info svg {
  width: 42px;
  height: 42px;
  margin-right: 10px;
  color: #61b6cd;
  fill: rgba(27, 85, 226, 0.2392156863);
}
body.dark .invoice .content-section .inv--head-section .inv-brand-name {
  font-size: 23px;
  font-weight: 600;
  margin-bottom: 0;
  align-self: center;
}
body.dark .invoice .content-section .inv--detail-section .inv-to {
  font-weight: 700;
  font-size: 15px;
  margin-bottom: 15px;
}
body.dark .invoice .content-section .inv--detail-section .inv-customer-name {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 15px;
  color: #61b6cd;
}
body.dark .invoice .content-section .inv--detail-section .inv-detail-title {
  font-weight: 700;
  margin-bottom: 0;
  font-size: 15px;
  margin-bottom: 15px;
}
body.dark .invoice .content-section .inv--detail-section .inv-details {
  font-weight: 700;
  margin-bottom: 15px;
}
body.dark .invoice .content-section .inv--detail-section .inv-street-addr {
  /* font-weight: 600; */
  margin-bottom: 2px;
  font-size: 15px;
  color: #888ea8;
}
body.dark .invoice .content-section .inv--detail-section .inv-email-address {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 15px;
  color: #888ea8;
}
body.dark .invoice .content-section .inv--detail-section .inv-list-number {
  margin-bottom: 2px;
}
body.dark .invoice .content-section .inv--detail-section .inv-list-number .inv-title {
  font-weight: 400;
  font-size: 20px;
}
body.dark .invoice .content-section .inv--detail-section .inv-list-number .inv-number {
  font-weight: 400;
  font-size: 18px;
  color: #61b6cd;
}
body.dark .invoice .content-section .inv--detail-section .inv-created-date, body.dark .invoice .content-section .inv--detail-section .inv-due-date {
  margin-bottom: 2px;
  color: #888ea8;
}
body.dark .invoice .content-section .inv--detail-section .inv-created-date .inv-title, body.dark .invoice .content-section .inv--detail-section .inv-due-date .inv-title {
  font-weight: 700;
  font-size: 15px;
}
body.dark .invoice .content-section .inv--detail-section .inv-created-date .inv-date, body.dark .invoice .content-section .inv--detail-section .inv-due-date .inv-date {
  font-size: 15px;
  font-weight: 600;
}
body.dark .invoice .content-section .inv--product-table-section {
  padding: 30px 0;
}
body.dark .invoice .content-section .inv--product-table-section table {
  margin-bottom: 0;
}
body.dark .invoice .content-section .inv--product-table-section thead tr {
  border: none;
}
body.dark .invoice .content-section .inv--product-table-section th {
  padding: 9px 22px;
  font-size: 13px !important;
  border: none;
  color: #bfc9d4 !important;
}
body.dark .invoice .content-section .inv--product-table-section th:first-child {
  padding-left: 35px;
  border-radius: 0;
}
body.dark .invoice .content-section .inv--product-table-section th:last-child {
  padding-right: 35px;
  border-radius: 0;
}
body.dark .invoice .content-section .inv--product-table-section tr td:first-child {
  padding-left: 35px;
}
body.dark .invoice .content-section .inv--product-table-section tr td:last-child {
  padding-right: 35px;
}
body.dark .invoice .content-section .inv--product-table-section td {
  color: #888ea8;
  border: none;
  padding: 10px 25px;
  vertical-align: top !important;
  font-size: 15px;
}
body.dark .invoice .content-section .inv--product-table-section tbody tr {
  border-bottom: 1px solid #191e3a;
}
body.dark .invoice .content-section .inv--product-table-section tbody tr:nth-of-type(even) td {
  background-color: rgba(3, 3, 5, 0.122) !important;
}
body.dark .invoice .content-section .inv--payment-info {
  font-size: 15px;
  font-weight: 600;
}
body.dark .invoice .content-section .inv--payment-info .inv-title {
  color: #61b6cd;
  font-weight: 600;
  margin-bottom: 15px;
  width: 65%;
  margin-left: auto;
}
body.dark .invoice .content-section .inv--payment-info p {
  margin-bottom: 0;
  display: flex;
  width: 65%;
  margin-left: auto;
  justify-content: space-between;
}
body.dark .invoice .content-section .inv--payment-info span {
  font-weight: 500;
  display: inline-block;
  color: #888ea8;
  white-space: nowrap;
}
body.dark .invoice .content-section .inv--payment-info .inv-subtitle {
  font-weight: 600;
  font-size: 15px;
  display: inline-block;
  color: #888ea8;
  white-space: normal;
  margin-right: 4px;
}
body.dark .invoice .content-section .inv--total-amounts {
  padding: 0 35px;
  margin-bottom: 25px;
  padding-bottom: 25px;
  border-bottom: 1px solid #191e3a;
}
body.dark .invoice .content-section .inv--total-amounts .grand-total-title h4, body.dark .invoice .content-section .inv--total-amounts .grand-total-amount h4 {
  position: relative;
  font-weight: 600;
  font-size: 16px;
  margin-bottom: 0;
  padding: 0;
  color: #fff;
  display: inline-block;
  letter-spacing: 1px;
}

/*    Inv detail section    */
/*inv-list-number*/
/*inv-created-date*/
/*inv-due-date*/
/*    Inv product table section    */
/*inv--payment-info*/
/*inv--total-amounts*/
/*inv--note*/
body.dark .inv--note {
  padding: 0 25px;
  padding-bottom: 25px;
}
body.dark .inv--note p {
  margin-bottom: 0;
  font-weight: 600;
  color: #888ea8;
}
@media print {
  body.dark body * {
    visibility: hidden;
  }
  body.dark #ct {
    visibility: visible;
  }
  body.dark #ct * {
    visibility: visible;
  }
  body.dark .doc-container {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
  }
}
@page {
  body.dark {
    size: auto;
    margin: 0mm;
  }
}

/*
===============================
    Invoice Actions Button
===============================
*/
body.dark .invoice-actions-btn {
  padding: 25px;
  padding-top: 32px;
  padding-bottom: 32px;
  background-color: #0e1726;
  border-radius: 8px;
  border: 1px solid #0e1726;
}
body.dark .invoice-actions-btn label {
  font-size: 14px;
  font-weight: 600;
  color: #515365;
}
body.dark .invoice-actions-btn .invoice-action-btn a {
  -webkit-transform: none;
  transform: none;
}
body.dark .invoice-actions-btn .invoice-action-btn a.btn-send, body.dark .invoice-actions-btn .invoice-action-btn a.btn-print, body.dark .invoice-actions-btn .invoice-action-btn a.btn-download {
  width: 100%;
  margin-bottom: 20px;
}
body.dark .invoice-actions-btn .invoice-action-btn a.btn-edit {
  width: 100%;
}

/* Invoice Actions -> action-btn */
@media (max-width: 1199px) {
  body.dark .invoice-actions-btn {
    margin-top: 25px;
  }
  body.dark .invoice-actions-btn .invoice-action-btn a.btn-send, body.dark .invoice-actions-btn .invoice-action-btn a.btn-print, body.dark .invoice-actions-btn .invoice-action-btn a.btn-download {
    margin-bottom: 0;
  }
}
@media (max-width: 767px) {
  body.dark .invoice-actions-btn .invoice-action-btn a.btn-send, body.dark .invoice-actions-btn .invoice-action-btn a.btn-print {
    margin-bottom: 20px;
  }
}
@media (max-width: 575px) {
  body.dark .invoice .content-section .inv--payment-info .inv-title {
    margin-top: 25px;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 6px;
    width: auto;
  }
  body.dark .invoice .content-section .inv--payment-info p {
    margin-left: 0;
    margin-right: auto;
    width: auto;
    justify-content: flex-start;
  }
  body.dark .invoice .content-section .inv--payment-info .inv-subtitle {
    min-width: 140px;
  }
  body.dark .invoice-actions-btn .invoice-action-btn a.btn-download {
    margin-bottom: 20px;
  }
  body.dark .invoice .content-section .inv--payment-info span {
    white-space: normal;
  }
}
/*# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi4uL2Jhc2UvX2Z1bmN0aW9ucy5zY3NzIiwiLi4vYmFzZS9fbWl4aW5zLnNjc3MiLCJhcHBzL2ludm9pY2UtcHJldmlldy5zY3NzIiwiLi4vYmFzZS9fY29sb3JfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQ0FBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUNJRTtFQUNFO0VBQ0E7O0FBR0Y7RUFDRSxrQkNLRzs7QURGTDtFQUNFLFlDQ0c7RURBSDtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUlKO0VBQ0U7O0FBR0Y7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUVBO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7O0FBRUE7RUFDRTs7QUFHRjtFQUNFLE9DN0NJO0VEOENKOzs7QUFPTjtBQUFBOztBQUFBOztBQUFBO0FBQUE7QUFRQTtBQUVBO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBOztBQUtFO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBOztBQUVBO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFJSjtFQUNFO0VBQ0E7RUFDQTtFQUNBOztBQUtGO0VBQ0U7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBR0Y7QUFDRTtFQUNBO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7O0FBRUE7RUFDRTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBOztBQUlKO0VBQ0U7RUFDQTs7QUFFQTtFQUNFO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBOztBQUtOO0VBQ0U7O0FBRUE7RUFDRTs7QUFHRjtFQUNFOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBRUE7RUFDRTtFQUNBOztBQUdGO0VBQ0U7RUFDQTs7QUFLRjtFQUNFOztBQUdGO0VBQ0U7O0FBSUo7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7O0FBRUE7RUFDRTs7QUFLTjtFQUNFO0VBQ0E7O0FBRUE7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUlKO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBRUE7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBOzs7QUFNTjtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBRUE7RUFDRTtFQUNBOztBQUVBO0VBQ0U7RUFDQTtFQUNBOztBQUlKO0VBQ0U7SUFDRTs7RUFHRjtJQUNFOztFQUVBO0lBQ0U7O0VBSUo7SUFDRTtJQUNBO0lBQ0E7SUFDQTs7O0FBSUo7RUFqQ0E7SUFrQ0U7SUFDQTs7OztBQUdGO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFNQTtFQUNFO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFFQTtFQUNFO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBRUE7RUFDRTtFQUNBOztBQUdGO0VBQ0U7OztBQUtOO0FBRUE7RUFDRTtJQUNFOztFQUdFO0lBQ0U7OztBQU1SO0VBRUk7SUFDRTs7O0FBS047RUFFSTtJQUNFO0lBQ0E7SUFDQTtJQUNBO0lBQ0E7O0VBR0Y7SUFDRTtJQUNBO0lBQ0E7SUFDQTs7RUFHRjtJQUNFOztFQUlKO0lBQ0U7O0VBR0Y7SUFDRSIsImZpbGUiOiJhcHBzL2ludm9pY2UtcHJldmlldy5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG5cdD09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuXHRcdFx0QEltcG9ydFx0RnVuY3Rpb25cclxuXHQ9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XHJcbiovXHJcblxyXG4iLCIvKlxyXG5cdD09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuXHRcdFx0QEltcG9ydFx0TWl4aW5zXHJcblx0PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG4qL1xyXG5cclxuLy8gQm9yZGVyXHJcbiRkaXJlY3Rpb246ICcnO1xyXG5AbWl4aW4gYm9yZGVyKCRkaXJlY3Rpb24sICR3aWR0aCwgJHN0eWxlLCAkY29sb3IpIHtcclxuXHJcbiAgIEBpZiAkZGlyZWN0aW9uID09ICcnIHtcclxuICAgICAgICBib3JkZXI6ICR3aWR0aCAkc3R5bGUgJGNvbG9yO1xyXG4gICB9IEBlbHNlIHtcclxuICAgICAgICBib3JkZXItI3skZGlyZWN0aW9ufTogJHdpZHRoICRzdHlsZSAkY29sb3I7XHJcbiAgIH1cclxufSIsIkBpbXBvcnQgJy4uLy4uL2Jhc2UvYmFzZSc7XHJcbmJvZHkuZGFyayB7XHJcblxyXG4uYWN0aW9ucy1idG4tdG9vbHRpcCB7XHJcbiAgJi50b29sdGlwIHtcclxuICAgIG9wYWNpdHk6IDE7XHJcbiAgICB0b3A6IC0xMXB4ICFpbXBvcnRhbnQ7XHJcbiAgfVxyXG5cclxuICAuYXJyb3c6YmVmb3JlIHtcclxuICAgIGJvcmRlci10b3AtY29sb3I6ICRkYXJrO1xyXG4gIH1cclxuXHJcbiAgLnRvb2x0aXAtaW5uZXIge1xyXG4gICAgYmFja2dyb3VuZDogJGRhcms7XHJcbiAgICBjb2xvcjogI2ZmZjtcclxuICAgIGZvbnQtd2VpZ2h0OiA3MDA7XHJcbiAgICBib3JkZXItcmFkaXVzOiAzMHB4O1xyXG4gICAgYm94LXNoYWRvdzogMHB4IDVweCAxNXB4IDFweCByZ2JhKDExMywgMTA2LCAyMDIsIDAuMik7XHJcbiAgICBwYWRkaW5nOiA0cHggMTZweDtcclxuICB9XHJcbn1cclxuXHJcbi5pbnZvaWNlLWNvbnRhaW5lciB7XHJcbiAgd2lkdGg6IDEwMCU7XHJcbn1cclxuXHJcbi5pbnZvaWNlLWluYm94IHtcclxuICBwYWRkaW5nOiAwO1xyXG4gIGJhY2tncm91bmQtY29sb3I6ICMwZTE3MjY7XHJcbiAgYm94LXNoYWRvdzogMCAwIDQwcHggMCByZ2IoOTQgOTIgMTU0IC8gNiUpO1xyXG4gIGJvcmRlci1yYWRpdXM6IDhweDtcclxuICBib3JkZXI6IDFweCBzb2xpZCAjMGUxNzI2O1xyXG5cclxuICAuaW52LW51bWJlciB7XHJcbiAgICBmb250LXNpemU6IDE4cHg7XHJcbiAgICBmb250LXdlaWdodDogNzAwO1xyXG4gICAgbWFyZ2luLWJvdHRvbTogMDtcclxuICAgIGNvbG9yOiAjODg4ZWE4O1xyXG4gIH1cclxuXHJcbiAgLmludm9pY2UtYWN0aW9uIHN2ZyB7XHJcbiAgICBjdXJzb3I6IHBvaW50ZXI7XHJcbiAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgY29sb3I6ICM4ODhlYTg7XHJcbiAgICBtYXJnaW4tcmlnaHQ6IDZweDtcclxuICAgIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XHJcbiAgICBmaWxsOiByZ2JhKDAsIDIzLCA1NSwgMC4wOCk7XHJcblxyXG4gICAgJjpub3QoOmxhc3QtY2hpbGQpIHtcclxuICAgICAgbWFyZ2luLXJpZ2h0OiAxNXB4O1xyXG4gICAgfVxyXG5cclxuICAgICY6aG92ZXIge1xyXG4gICAgICBjb2xvcjogJHByaW1hcnk7XHJcbiAgICAgIGZpbGw6IHJnYmEoMjcsIDg1LCAyMjYsIDAuMjM5MjE1Njg2Myk7XHJcbiAgICB9XHJcbiAgfVxyXG59XHJcblxyXG59XHJcblxyXG4vKlxyXG49PT09PT09PT09PT09PT09PT09XHJcblxyXG4gICAgIEludm9pY2VcclxuXHJcbj09PT09PT09PT09PT09PT09PT1cclxuKi9cclxuXHJcbi8qICAgIEludiBoZWFkIHNlY3Rpb24gICAqL1xyXG5ib2R5LmRhcmsge1xyXG4uaW52b2ljZSAuY29udGVudC1zZWN0aW9uIC5pbnYtLWhlYWQtc2VjdGlvbiB7XHJcbiAgcGFkZGluZzogMzZweCAzNXB4O1xyXG4gIG1hcmdpbi1ib3R0b206IDQwcHg7XHJcbiAgcGFkZGluZy1ib3R0b206IDI1cHg7XHJcbiAgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICMxOTFlM2E7XHJcbn1cclxuXHJcbi5pbnYtLWN1c3RvbWVyLWRldGFpbC1zZWN0aW9uIHtcclxuICBwYWRkaW5nOiAzNnB4IDM1cHg7XHJcbiAgcGFkZGluZy10b3A6IDA7XHJcbn1cclxuXHJcbi5pbnZvaWNlIC5jb250ZW50LXNlY3Rpb24ge1xyXG4gIC5pbnYtLWhlYWQtc2VjdGlvbiB7XHJcbiAgICBoMy5pbi1oZWFkaW5nIHtcclxuICAgICAgZm9udC1zaXplOiAxOHB4O1xyXG4gICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICBjb2xvcjogI2UwZTZlZDtcclxuICAgICAgbWFyZ2luOiAwO1xyXG4gICAgICBtYXJnaW4tbGVmdDogMTJweDtcclxuICAgIH1cclxuXHJcbiAgICAuY29tcGFueS1sb2dvIHtcclxuICAgICAgd2lkdGg6IDcwcHg7XHJcbiAgICAgIGhlaWdodDogNzBweDtcclxuICAgIH1cclxuXHJcbiAgICBkaXYuY29tcGFueS1pbmZvIHtcclxuICAgICAgZGlzcGxheTogZmxleDtcclxuICAgICAganVzdGlmeS1jb250ZW50OiBmbGV4LWVuZDtcclxuXHJcbiAgICAgIHN2ZyB7XHJcbiAgICAgICAgd2lkdGg6IDQycHg7XHJcbiAgICAgICAgaGVpZ2h0OiA0MnB4O1xyXG4gICAgICAgIG1hcmdpbi1yaWdodDogMTBweDtcclxuICAgICAgICBjb2xvcjogIzYxYjZjZDtcclxuICAgICAgICBmaWxsOiByZ2JhKDI3LCA4NSwgMjI2LCAwLjIzOTIxNTY4NjMpO1xyXG4gICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1icmFuZC1uYW1lIHtcclxuICAgICAgZm9udC1zaXplOiAyM3B4O1xyXG4gICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgICBhbGlnbi1zZWxmOiBjZW50ZXI7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuaW52LS1kZXRhaWwtc2VjdGlvbiB7XHJcbiAgICAuaW52LXRvIHtcclxuICAgICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAxNXB4O1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtY3VzdG9tZXItbmFtZSB7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDJweDtcclxuICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICBjb2xvcjogIzYxYjZjZDtcclxuICAgIH1cclxuXHJcbiAgICAuaW52LWRldGFpbC10aXRsZSB7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA3MDA7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMTVweDtcclxuICAgIH1cclxuXHJcbiAgICAuaW52LWRldGFpbHMge1xyXG4gICAgICBmb250LXdlaWdodDogNzAwO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAxNXB4O1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtc3RyZWV0LWFkZHIge1xyXG4gICAgICAvKiBmb250LXdlaWdodDogNjAwOyAqL1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycHg7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgICAgY29sb3I6ICM4ODhlYTg7XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1lbWFpbC1hZGRyZXNzIHtcclxuICAgICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMnB4O1xyXG4gICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIGNvbG9yOiAjODg4ZWE4O1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtbGlzdC1udW1iZXIge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycHg7XHJcblxyXG4gICAgICAuaW52LXRpdGxlIHtcclxuICAgICAgICBmb250LXdlaWdodDogNDAwO1xyXG4gICAgICAgIGZvbnQtc2l6ZTogMjBweDtcclxuICAgICAgfVxyXG5cclxuICAgICAgLmludi1udW1iZXIge1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiA0MDA7XHJcbiAgICAgICAgZm9udC1zaXplOiAxOHB4O1xyXG4gICAgICAgIGNvbG9yOiAjNjFiNmNkO1xyXG4gICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1jcmVhdGVkLWRhdGUsIC5pbnYtZHVlLWRhdGUge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycHg7XHJcbiAgICAgIGNvbG9yOiAjODg4ZWE4O1xyXG5cclxuICAgICAgLmludi10aXRsZSB7XHJcbiAgICAgICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIH1cclxuXHJcbiAgICAgIC5pbnYtZGF0ZSB7XHJcbiAgICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcblxyXG4gIC5pbnYtLXByb2R1Y3QtdGFibGUtc2VjdGlvbiB7XHJcbiAgICBwYWRkaW5nOiAzMHB4IDA7XHJcblxyXG4gICAgdGFibGUge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgfVxyXG5cclxuICAgIHRoZWFkIHRyIHtcclxuICAgICAgYm9yZGVyOiBub25lO1xyXG4gICAgfVxyXG5cclxuICAgIHRoIHtcclxuICAgICAgcGFkZGluZzogOXB4IDIycHg7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTNweCAhaW1wb3J0YW50O1xyXG4gICAgICBib3JkZXI6IG5vbmU7XHJcbiAgICAgIGNvbG9yOiAjYmZjOWQ0ICFpbXBvcnRhbnQ7XHJcblxyXG4gICAgICAmOmZpcnN0LWNoaWxkIHtcclxuICAgICAgICBwYWRkaW5nLWxlZnQ6IDM1cHg7XHJcbiAgICAgICAgYm9yZGVyLXJhZGl1czogMDtcclxuICAgICAgfVxyXG5cclxuICAgICAgJjpsYXN0LWNoaWxkIHtcclxuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAzNXB4O1xyXG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDA7XHJcbiAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICB0ciB0ZCB7XHJcbiAgICAgICY6Zmlyc3QtY2hpbGQge1xyXG4gICAgICAgIHBhZGRpbmctbGVmdDogMzVweDtcclxuICAgICAgfVxyXG5cclxuICAgICAgJjpsYXN0LWNoaWxkIHtcclxuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAzNXB4O1xyXG4gICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgdGQge1xyXG4gICAgICBjb2xvcjogIzg4OGVhODtcclxuICAgICAgYm9yZGVyOiBub25lO1xyXG4gICAgICBwYWRkaW5nOiAxMHB4IDI1cHg7XHJcbiAgICAgIHZlcnRpY2FsLWFsaWduOiB0b3AgIWltcG9ydGFudDtcclxuICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgfVxyXG5cclxuICAgIHRib2R5IHRyIHtcclxuICAgICAgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICMxOTFlM2E7XHJcblxyXG4gICAgICAmOm50aC1vZi10eXBlKGV2ZW4pIHRkIHtcclxuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2JhKDMsIDMsIDUsIDAuMTIyKSAhaW1wb3J0YW50O1xyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuaW52LS1wYXltZW50LWluZm8ge1xyXG4gICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuXHJcbiAgICAuaW52LXRpdGxlIHtcclxuICAgICAgY29sb3I6ICM2MWI2Y2Q7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDE1cHg7XHJcbiAgICAgIHdpZHRoOiA2NSU7XHJcbiAgICAgIG1hcmdpbi1sZWZ0OiBhdXRvO1xyXG4gICAgfVxyXG5cclxuICAgIHAge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICB3aWR0aDogNjUlO1xyXG4gICAgICBtYXJnaW4tbGVmdDogYXV0bztcclxuICAgICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xyXG4gICAgfVxyXG5cclxuICAgIHNwYW4ge1xyXG4gICAgICBmb250LXdlaWdodDogNTAwO1xyXG4gICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbiAgICAgIGNvbG9yOiAjODg4ZWE4O1xyXG4gICAgICB3aGl0ZS1zcGFjZTogbm93cmFwO1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtc3VidGl0bGUge1xyXG4gICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuICAgICAgY29sb3I6ICM4ODhlYTg7XHJcbiAgICAgIHdoaXRlLXNwYWNlOiBub3JtYWw7XHJcbiAgICAgIG1hcmdpbi1yaWdodDogNHB4O1xyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLmludi0tdG90YWwtYW1vdW50cyB7XHJcbiAgICBwYWRkaW5nOiAwIDM1cHg7XHJcbiAgICBtYXJnaW4tYm90dG9tOiAyNXB4O1xyXG4gICAgcGFkZGluZy1ib3R0b206IDI1cHg7XHJcbiAgICBib3JkZXItYm90dG9tOiAxcHggc29saWQgIzE5MWUzYTtcclxuXHJcbiAgICAuZ3JhbmQtdG90YWwtdGl0bGUgaDQsIC5ncmFuZC10b3RhbC1hbW91bnQgaDQge1xyXG4gICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTZweDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMDtcclxuICAgICAgcGFkZGluZzogMDtcclxuICAgICAgY29sb3I6ICNmZmY7XHJcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuICAgICAgbGV0dGVyLXNwYWNpbmc6IDFweDtcclxuICAgIH1cclxuICB9XHJcbn1cclxufVxyXG5cclxuLyogICAgSW52IGRldGFpbCBzZWN0aW9uICAgICovXHJcblxyXG4vKmludi1saXN0LW51bWJlciovXHJcblxyXG4vKmludi1jcmVhdGVkLWRhdGUqL1xyXG5cclxuLyppbnYtZHVlLWRhdGUqL1xyXG5cclxuLyogICAgSW52IHByb2R1Y3QgdGFibGUgc2VjdGlvbiAgICAqL1xyXG5cclxuLyppbnYtLXBheW1lbnQtaW5mbyovXHJcblxyXG4vKmludi0tdG90YWwtYW1vdW50cyovXHJcblxyXG4vKmludi0tbm90ZSovXHJcbmJvZHkuZGFyayB7XHJcbi5pbnYtLW5vdGUge1xyXG4gIHBhZGRpbmc6IDAgMjVweDtcclxuICBwYWRkaW5nLWJvdHRvbTogMjVweDtcclxuXHJcbiAgcCB7XHJcbiAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgIGNvbG9yOiAjODg4ZWE4O1xyXG4gIH1cclxufVxyXG5cclxuQG1lZGlhIHByaW50IHtcclxuICBib2R5ICoge1xyXG4gICAgdmlzaWJpbGl0eTogaGlkZGVuO1xyXG4gIH1cclxuXHJcbiAgI2N0IHtcclxuICAgIHZpc2liaWxpdHk6IHZpc2libGU7XHJcblxyXG4gICAgKiB7XHJcbiAgICAgIHZpc2liaWxpdHk6IHZpc2libGU7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuZG9jLWNvbnRhaW5lciB7XHJcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XHJcbiAgICBsZWZ0OiAwO1xyXG4gICAgcmlnaHQ6IDA7XHJcbiAgICB0b3A6IDA7XHJcbiAgfVxyXG59XHJcblxyXG5AcGFnZSB7XHJcbiAgc2l6ZTogYXV0bztcclxuICBtYXJnaW46IDBtbTtcclxufVxyXG59XHJcbi8qXHJcbj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuICAgIEludm9pY2UgQWN0aW9ucyBCdXR0b25cclxuPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG4qL1xyXG5ib2R5LmRhcmsge1xyXG4uaW52b2ljZS1hY3Rpb25zLWJ0biB7XHJcbiAgcGFkZGluZzogMjVweDtcclxuICBwYWRkaW5nLXRvcDogMzJweDtcclxuICBwYWRkaW5nLWJvdHRvbTogMzJweDtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiAjMGUxNzI2O1xyXG4gIGJvcmRlci1yYWRpdXM6IDhweDtcclxuICBib3JkZXI6IDFweCBzb2xpZCAjMGUxNzI2O1xyXG5cclxuICBsYWJlbCB7XHJcbiAgICBmb250LXNpemU6IDE0cHg7XHJcbiAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgY29sb3I6ICM1MTUzNjU7XHJcbiAgfVxyXG5cclxuICAuaW52b2ljZS1hY3Rpb24tYnRuIGEge1xyXG4gICAgLXdlYmtpdC10cmFuc2Zvcm06IG5vbmU7XHJcbiAgICB0cmFuc2Zvcm06IG5vbmU7XHJcblxyXG4gICAgJi5idG4tc2VuZCwgJi5idG4tcHJpbnQsICYuYnRuLWRvd25sb2FkIHtcclxuICAgICAgd2lkdGg6IDEwMCU7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDIwcHg7XHJcbiAgICB9XHJcblxyXG4gICAgJi5idG4tZWRpdCB7XHJcbiAgICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgfVxyXG4gIH1cclxufVxyXG59XHJcbi8qIEludm9pY2UgQWN0aW9ucyAtPiBhY3Rpb24tYnRuICovXHJcbmJvZHkuZGFyayB7XHJcbkBtZWRpYSAobWF4LXdpZHRoOiAxMTk5cHgpIHtcclxuICAuaW52b2ljZS1hY3Rpb25zLWJ0biB7XHJcbiAgICBtYXJnaW4tdG9wOiAyNXB4O1xyXG5cclxuICAgIC5pbnZvaWNlLWFjdGlvbi1idG4gYSB7XHJcbiAgICAgICYuYnRuLXNlbmQsICYuYnRuLXByaW50LCAmLmJ0bi1kb3dubG9hZCB7XHJcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogMDtcclxuICAgICAgfVxyXG4gICAgfVxyXG4gIH1cclxufVxyXG5cclxuQG1lZGlhIChtYXgtd2lkdGg6IDc2N3B4KSB7XHJcbiAgLmludm9pY2UtYWN0aW9ucy1idG4gLmludm9pY2UtYWN0aW9uLWJ0biBhIHtcclxuICAgICYuYnRuLXNlbmQsICYuYnRuLXByaW50IHtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMjBweDtcclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbkBtZWRpYSAobWF4LXdpZHRoOiA1NzVweCkge1xyXG4gIC5pbnZvaWNlIC5jb250ZW50LXNlY3Rpb24gLmludi0tcGF5bWVudC1pbmZvIHtcclxuICAgIC5pbnYtdGl0bGUge1xyXG4gICAgICBtYXJnaW4tdG9wOiAyNXB4O1xyXG4gICAgICBtYXJnaW4tbGVmdDogMDtcclxuICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiA2cHg7XHJcbiAgICAgIHdpZHRoOiBhdXRvO1xyXG4gICAgfVxyXG5cclxuICAgIHAge1xyXG4gICAgICBtYXJnaW4tbGVmdDogMDtcclxuICAgICAgbWFyZ2luLXJpZ2h0OiBhdXRvO1xyXG4gICAgICB3aWR0aDogYXV0bztcclxuICAgICAganVzdGlmeS1jb250ZW50OiBmbGV4LXN0YXJ0O1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtc3VidGl0bGUge1xyXG4gICAgICBtaW4td2lkdGg6IDE0MHB4O1xyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLmludm9pY2UtYWN0aW9ucy1idG4gLmludm9pY2UtYWN0aW9uLWJ0biBhLmJ0bi1kb3dubG9hZCB7XHJcbiAgICBtYXJnaW4tYm90dG9tOiAyMHB4O1xyXG4gIH1cclxuXHJcbiAgLmludm9pY2UgLmNvbnRlbnQtc2VjdGlvbiAuaW52LS1wYXltZW50LWluZm8gc3BhbiB7XHJcbiAgICB3aGl0ZS1zcGFjZTogbm9ybWFsO1xyXG4gIH1cclxufVxyXG5cclxufSIsIlxyXG4vL1x0PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG4vL1x0XHRcdEBJbXBvcnRcdENvbG9yc1xyXG4vL1x0PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG5cclxuXHJcbiR3aGl0ZTogI2ZmZjtcclxuJGJsYWNrOiAjMDAwO1xyXG5cclxuJHByaW1hcnk6ICM0MzYxZWU7XHJcbiRpbmZvOiAjMjE5NmYzO1xyXG4kc3VjY2VzczogIzAwYWI1NTtcclxuJHdhcm5pbmc6ICNlMmEwM2Y7XHJcbiRkYW5nZXI6ICNlNzUxNWE7XHJcbiRzZWNvbmRhcnk6ICM4MDVkY2E7XHJcbiRkYXJrOiAjM2IzZjVjO1xyXG5cclxuXHJcbiRsLXByaW1hcnk6ICMxNTIxNDM7XHJcbiRsLWluZm86ICMwYjJmNTI7XHJcbiRsLXN1Y2Nlc3M6ICMwYzI3MmI7XHJcbiRsLXdhcm5pbmc6ICMyODI2MjU7XHJcbiRsLWRhbmdlcjogIzJjMWMyYjtcclxuJGwtc2Vjb25kYXJ5OiAjMWQxYTNiO1xyXG4kbC1kYXJrOiAjMTgxZTJlO1xyXG5cclxuLy8gXHQ9PT09PT09PT09PT09PT09PVxyXG4vL1x0XHRNb3JlIENvbG9yc1xyXG4vL1x0PT09PT09PT09PT09PT09PT1cclxuXHJcbiRtLWNvbG9yXzA6ICNmYWZhZmE7XHJcbiRtLWNvbG9yXzE6ICNmMWYyZjM7XHJcbiRtLWNvbG9yXzI6ICNlYmVkZjI7XHJcblxyXG4kbS1jb2xvcl8zOiAjZTBlNmVkO1xyXG4kbS1jb2xvcl80OiAjYmZjOWQ0O1xyXG4kbS1jb2xvcl81OiAjZDNkM2QzO1xyXG5cclxuJG0tY29sb3JfNjogIzg4OGVhODtcclxuJG0tY29sb3JfNzogIzUwNjY5MDtcclxuXHJcbiRtLWNvbG9yXzg6ICM1NTU1NTU7XHJcbiRtLWNvbG9yXzk6ICM1MTUzNjU7XHJcbiRtLWNvbG9yXzExOiAjNjA3ZDhiO1xyXG5cclxuJG0tY29sb3JfMTI6ICMxYjJlNGI7XHJcbiRtLWNvbG9yXzE4OiAjMTkxZTNhO1xyXG4kbS1jb2xvcl8xMDogIzBlMTcyNjtcclxuXHJcbiRtLWNvbG9yXzE5OiAjMDYwODE4O1xyXG4kbS1jb2xvcl8xMzogIzIyYzdkNTtcclxuJG0tY29sb3JfMTQ6ICMwMDk2ODg7XHJcblxyXG4kbS1jb2xvcl8xNTogI2ZmYmI0NDtcclxuJG0tY29sb3JfMTY6ICNlOTVmMmI7XHJcbiRtLWNvbG9yXzE3OiAjZjg1MzhkO1xyXG5cclxuJG0tY29sb3JfMjA6ICM0NDVlZGU7XHJcbiRtLWNvbG9yXzIxOiAjMzA0YWNhO1xyXG5cclxuXHJcbiRtLWNvbG9yXzIyOiAjMDMwMzA1O1xyXG4kbS1jb2xvcl8yMzogIzE1MTUxNjtcclxuJG0tY29sb3JfMjQ6ICM2MWI2Y2Q7XHJcbiRtLWNvbG9yXzI1OiAjNGNkMjY1O1xyXG5cclxuJG0tY29sb3JfMjY6ICM3ZDMwY2I7XHJcbiRtLWNvbG9yXzI3OiAjMDA4ZWZmO1xyXG5cclxuXHJcbi8vXHQ9PT09PT09PT09PT09PT09PT09PT09PT1cclxuLy9cdFx0Q29sb3IgRGVmaW5hdGlvblxyXG4vL1x0PT09PT09PT09PT09PT09PT09PT09PT09XHJcblxyXG5cclxuJGJvZHktY29sb3I6ICRtLWNvbG9yXzE5OyJdfQ== */

/*# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi4uL2Jhc2UvX2Z1bmN0aW9ucy5zY3NzIiwiLi4vYmFzZS9fbWl4aW5zLnNjc3MiLCJhcHBzL2ludm9pY2UtcHJldmlldy5zY3NzIiwiLi4vYmFzZS9fY29sb3JfdmFyaWFibGVzLnNjc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQ0FBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUNFRTtFQUNFO0VBQ0E7O0FBR0Y7RUFDRSxrQkNPRzs7QURKTDtFQUNFLFlDR0c7RURGSDtFQUNBO0VBQ0E7RUFDQTtFQUNBOzs7QUFJSjtFQUNFOzs7QUFHRjtFQUNFO0VBQ0E7RUFDQTtFQUVBOztBQUVBO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7O0FBRUE7RUFDRTs7QUFHRjtFQUNFLE9DM0NJO0VENENKOzs7QUFLTjtBQUFBOztBQUFBOztBQUFBO0FBQUE7QUFRQTtBQUVBO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7OztBQUdGO0VBQ0U7RUFDQTs7O0FBS0U7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBRUE7RUFDRTtFQUNBO0VBQ0E7RUFDQSxPQzlGRTtFRCtGRjs7QUFJSjtFQUNFO0VBQ0E7RUFDQTtFQUNBOztBQUtGO0VBQ0U7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0EsT0N0SEk7O0FEeUhOO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBOztBQUdGO0FBQ0U7RUFDQTtFQUNBO0VBQ0EsT0NuSUM7O0FEc0lIO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTs7QUFFQTtFQUNFO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBO0VBQ0EsT0M5SkU7O0FEa0tOO0VBQ0U7RUFDQTs7QUFFQTtFQUNFO0VBQ0E7O0FBR0Y7RUFDRTtFQUNBOztBQUtOO0VBQ0U7O0FBRUE7RUFDRTs7QUFHRjtFQUNFOztBQUdGO0VBQ0U7RUFDQTtFQUNBOztBQUVBO0VBQ0U7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBS0Y7RUFDRTs7QUFHRjtFQUNFOztBQUlKO0VBRUU7RUFDQTtFQUNBO0VBQ0E7O0FBR0Y7RUFDRTs7QUFFQTtFQUNFOztBQUtOO0VBQ0U7RUFDQTs7QUFFQTtFQUNFLE9DN09JO0VEOE9KO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7RUFDQTtFQUNBOztBQUdGO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBOztBQUlKO0VBQ0U7RUFDQTtFQUNBO0VBQ0E7O0FBRUE7RUFDRTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBOzs7QUFLTjtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBRUE7RUFDRTtFQUNBOztBQUVBO0VBQ0U7RUFDQTtFQUNBOzs7QUFJSjtFQUNFO0lBQ0U7OztFQUdGO0lBQ0U7O0VBRUE7SUFDRTs7O0VBSUo7SUFDRTtJQUNBO0lBQ0E7SUFDQTs7O0FBSUo7RUFDRTtFQUNBOztBQUdGO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFNQTtFQUNFO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTs7QUFFQTtFQUNFO0VBQ0E7RUFDQTs7QUFHRjtFQUNFO0VBQ0E7O0FBRUE7RUFDRTtFQUNBOztBQUdGO0VBQ0U7OztBQUtOO0FBRUE7RUFDRTtJQUNFOztFQUdFO0lBQ0U7OztBQU1SO0VBRUk7SUFDRTs7O0FBS047RUFFSTtJQUNFO0lBQ0E7SUFDQTtJQUNBO0lBQ0E7O0VBR0Y7SUFDRTtJQUNBO0lBQ0E7SUFDQTs7RUFHRjtJQUNFOzs7RUFJSjtJQUNFOzs7RUFHRjtJQUNFIiwiZmlsZSI6ImFwcHMvaW52b2ljZS1wcmV2aWV3LmNzcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXHJcblx0PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG5cdFx0XHRASW1wb3J0XHRGdW5jdGlvblxyXG5cdD09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuKi9cclxuXHJcbiIsIi8qXHJcblx0PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG5cdFx0XHRASW1wb3J0XHRNaXhpbnNcclxuXHQ9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XHJcbiovXHJcblxyXG4vLyBCb3JkZXJcclxuJGRpcmVjdGlvbjogJyc7XHJcbkBtaXhpbiBib3JkZXIoJGRpcmVjdGlvbiwgJHdpZHRoLCAkc3R5bGUsICRjb2xvcikge1xyXG5cclxuICAgQGlmICRkaXJlY3Rpb24gPT0gJycge1xyXG4gICAgICAgIGJvcmRlcjogJHdpZHRoICRzdHlsZSAkY29sb3I7XHJcbiAgIH0gQGVsc2Uge1xyXG4gICAgICAgIGJvcmRlci0jeyRkaXJlY3Rpb259OiAkd2lkdGggJHN0eWxlICRjb2xvcjtcclxuICAgfVxyXG59IiwiQGltcG9ydCAnLi4vLi4vYmFzZS9iYXNlJztcclxuLmFjdGlvbnMtYnRuLXRvb2x0aXAge1xyXG4gICYudG9vbHRpcCB7XHJcbiAgICBvcGFjaXR5OiAxO1xyXG4gICAgdG9wOiAtMTFweCAhaW1wb3J0YW50O1xyXG4gIH1cclxuXHJcbiAgLmFycm93OmJlZm9yZSB7XHJcbiAgICBib3JkZXItdG9wLWNvbG9yOiAkZGFyaztcclxuICB9XHJcblxyXG4gIC50b29sdGlwLWlubmVyIHtcclxuICAgIGJhY2tncm91bmQ6ICRkYXJrO1xyXG4gICAgY29sb3I6ICNmZmY7XHJcbiAgICBmb250LXdlaWdodDogNzAwO1xyXG4gICAgYm9yZGVyLXJhZGl1czogMzBweDtcclxuICAgIGJveC1zaGFkb3c6IDBweCA1cHggMTVweCAxcHggcmdiYSgxMTMsIDEwNiwgMjAyLCAwLjIpO1xyXG4gICAgcGFkZGluZzogNHB4IDE2cHg7XHJcbiAgfVxyXG59XHJcblxyXG4uaW52b2ljZS1jb250YWluZXIge1xyXG4gIHdpZHRoOiAxMDAlO1xyXG59XHJcblxyXG4uaW52b2ljZS1pbmJveCB7XHJcbiAgcGFkZGluZzogMDtcclxuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xyXG4gIGJvcmRlcjogMXB4IHNvbGlkICNlMGU2ZWQ7XHJcbiAgLy8gYm94LXNoYWRvdzogMCAwIDQwcHggMCByZ2IoOTQgOTIgMTU0IC8gNiUpO1xyXG4gIGJvcmRlci1yYWRpdXM6IDhweDtcclxuXHJcbiAgLmludi1udW1iZXIge1xyXG4gICAgZm9udC1zaXplOiAxOHB4O1xyXG4gICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgIG1hcmdpbi1ib3R0b206IDA7XHJcbiAgICBjb2xvcjogIzg4OGVhODtcclxuICB9XHJcblxyXG4gIC5pbnZvaWNlLWFjdGlvbiBzdmcge1xyXG4gICAgY3Vyc29yOiBwb2ludGVyO1xyXG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgIGNvbG9yOiAjODg4ZWE4O1xyXG4gICAgbWFyZ2luLXJpZ2h0OiA2cHg7XHJcbiAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xyXG4gICAgZmlsbDogcmdiYSgwLCAyMywgNTUsIDAuMDgpO1xyXG5cclxuICAgICY6bm90KDpsYXN0LWNoaWxkKSB7XHJcbiAgICAgIG1hcmdpbi1yaWdodDogMTVweDtcclxuICAgIH1cclxuXHJcbiAgICAmOmhvdmVyIHtcclxuICAgICAgY29sb3I6ICRwcmltYXJ5O1xyXG4gICAgICBmaWxsOiByZ2JhKDI3LCA4NSwgMjI2LCAwLjIzOTIxNTY4NjMpO1xyXG4gICAgfVxyXG4gIH1cclxufVxyXG5cclxuLypcclxuPT09PT09PT09PT09PT09PT09PVxyXG5cclxuICAgICBJbnZvaWNlXHJcblxyXG49PT09PT09PT09PT09PT09PT09XHJcbiovXHJcblxyXG4vKiAgICBJbnYgaGVhZCBzZWN0aW9uICAgKi9cclxuXHJcbi5pbnZvaWNlIC5jb250ZW50LXNlY3Rpb24gLmludi0taGVhZC1zZWN0aW9uIHtcclxuICBwYWRkaW5nOiAzNnB4IDM1cHg7XHJcbiAgbWFyZ2luLWJvdHRvbTogNDBweDtcclxuICBwYWRkaW5nLWJvdHRvbTogMjVweDtcclxuICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2UwZTZlZDtcclxufVxyXG5cclxuLmludi0tY3VzdG9tZXItZGV0YWlsLXNlY3Rpb24ge1xyXG4gIHBhZGRpbmc6IDM2cHggMzVweDtcclxuICBwYWRkaW5nLXRvcDogMDtcclxufVxyXG5cclxuLmludm9pY2UgLmNvbnRlbnQtc2VjdGlvbiB7XHJcbiAgLmludi0taGVhZC1zZWN0aW9uIHtcclxuICAgIGgzLmluLWhlYWRpbmcge1xyXG4gICAgICBmb250LXNpemU6IDE4cHg7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIGNvbG9yOiAjMGUxNzI2O1xyXG4gICAgICBtYXJnaW46IDA7XHJcbiAgICAgIG1hcmdpbi1sZWZ0OiAxMnB4O1xyXG4gICAgfVxyXG5cclxuICAgIC5jb21wYW55LWxvZ28ge1xyXG4gICAgICB3aWR0aDogNzBweDtcclxuICAgICAgaGVpZ2h0OiA3MHB4O1xyXG4gICAgfVxyXG5cclxuICAgIGRpdi5jb21wYW55LWluZm8ge1xyXG4gICAgICBkaXNwbGF5OiBmbGV4O1xyXG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IGZsZXgtZW5kO1xyXG5cclxuICAgICAgc3ZnIHtcclxuICAgICAgICB3aWR0aDogNDJweDtcclxuICAgICAgICBoZWlnaHQ6IDQycHg7XHJcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xyXG4gICAgICAgIGNvbG9yOiAkcHJpbWFyeTtcclxuICAgICAgICBmaWxsOiByZ2JhKDI3LCA4NSwgMjI2LCAwLjIzOTIxNTY4NjMpO1xyXG4gICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1icmFuZC1uYW1lIHtcclxuICAgICAgZm9udC1zaXplOiAyM3B4O1xyXG4gICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgICBhbGlnbi1zZWxmOiBjZW50ZXI7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuaW52LS1kZXRhaWwtc2VjdGlvbiB7XHJcbiAgICAuaW52LXRvIHtcclxuICAgICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAxNXB4O1xyXG4gICAgfVxyXG5cclxuICAgIC5pbnYtY3VzdG9tZXItbmFtZSB7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDJweDtcclxuICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICBjb2xvcjogJHByaW1hcnk7XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1kZXRhaWwtdGl0bGUge1xyXG4gICAgICBmb250LXdlaWdodDogNzAwO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDE1cHg7XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1kZXRhaWxzIHtcclxuICAgICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMTVweDtcclxuICAgIH1cclxuXHJcbiAgICAuaW52LXN0cmVldC1hZGRyIHtcclxuICAgICAgLyogZm9udC13ZWlnaHQ6IDYwMDsgKi9cclxuICAgICAgbWFyZ2luLWJvdHRvbTogMnB4O1xyXG4gICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIGNvbG9yOiAkZGFyaztcclxuICAgIH1cclxuXHJcbiAgICAuaW52LWVtYWlsLWFkZHJlc3Mge1xyXG4gICAgICBmb250LXdlaWdodDogNjAwO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycHg7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgICAgY29sb3I6ICM1MTUzNjU7XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1saXN0LW51bWJlciB7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDJweDtcclxuXHJcbiAgICAgIC5pbnYtdGl0bGUge1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiA0MDA7XHJcbiAgICAgICAgZm9udC1zaXplOiAyMHB4O1xyXG4gICAgICB9XHJcblxyXG4gICAgICAuaW52LW51bWJlciB7XHJcbiAgICAgICAgZm9udC13ZWlnaHQ6IDQwMDtcclxuICAgICAgICBmb250LXNpemU6IDE4cHg7XHJcbiAgICAgICAgY29sb3I6ICRwcmltYXJ5O1xyXG4gICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1jcmVhdGVkLWRhdGUsIC5pbnYtZHVlLWRhdGUge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAycHg7XHJcbiAgICAgIGNvbG9yOiAjODg4ZWE4O1xyXG5cclxuICAgICAgLmludi10aXRsZSB7XHJcbiAgICAgICAgZm9udC13ZWlnaHQ6IDcwMDtcclxuICAgICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICAgIH1cclxuXHJcbiAgICAgIC5pbnYtZGF0ZSB7XHJcbiAgICAgICAgZm9udC1zaXplOiAxNXB4O1xyXG4gICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcblxyXG4gIC5pbnYtLXByb2R1Y3QtdGFibGUtc2VjdGlvbiB7XHJcbiAgICBwYWRkaW5nOiAzMHB4IDA7XHJcblxyXG4gICAgdGFibGUge1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgfVxyXG5cclxuICAgIHRoZWFkIHRyIHtcclxuICAgICAgYm9yZGVyOiBub25lO1xyXG4gICAgfVxyXG5cclxuICAgIHRoIHtcclxuICAgICAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7XHJcbiAgICAgIGJvcmRlci10b3A6IDFweCBzb2xpZCAjZTBlNmVkO1xyXG4gICAgICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2UwZTZlZDtcclxuXHJcbiAgICAgICY6Zmlyc3QtY2hpbGQge1xyXG4gICAgICAgIHBhZGRpbmctbGVmdDogMzVweDtcclxuICAgICAgICBib3JkZXItcmFkaXVzOiAwO1xyXG4gICAgICB9XHJcblxyXG4gICAgICAmOmxhc3QtY2hpbGQge1xyXG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDM1cHg7XHJcbiAgICAgICAgYm9yZGVyLXJhZGl1czogMDtcclxuICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIHRyIHRkIHtcclxuICAgICAgJjpmaXJzdC1jaGlsZCB7XHJcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAzNXB4O1xyXG4gICAgICB9XHJcblxyXG4gICAgICAmOmxhc3QtY2hpbGQge1xyXG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDM1cHg7XHJcbiAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICB0ZCB7XHJcbiAgICAgIC8vIGNvbG9yOiAjODg4ZWE4O1xyXG4gICAgICBib3JkZXI6IG5vbmU7XHJcbiAgICAgIHBhZGRpbmc6IDEwcHggMjVweDtcclxuICAgICAgdmVydGljYWwtYWxpZ246IHRvcCAhaW1wb3J0YW50O1xyXG4gICAgICBmb250LXNpemU6IDE1cHg7XHJcbiAgICB9XHJcblxyXG4gICAgdGJvZHkgdHIge1xyXG4gICAgICBib3JkZXItYm90dG9tOiAxcHggc29saWQgIzE5MWUzYTtcclxuXHJcbiAgICAgICY6bnRoLW9mLXR5cGUoZXZlbikgdGQge1xyXG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmMWYyZjMgIWltcG9ydGFudDtcclxuICAgICAgfVxyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLmludi0tcGF5bWVudC1pbmZvIHtcclxuICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcblxyXG4gICAgLmludi10aXRsZSB7XHJcbiAgICAgIGNvbG9yOiAkcHJpbWFyeTtcclxuICAgICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgICAgbWFyZ2luLWJvdHRvbTogMTVweDtcclxuICAgICAgd2lkdGg6IDY1JTtcclxuICAgICAgbWFyZ2luLWxlZnQ6IGF1dG87XHJcbiAgICB9XHJcblxyXG4gICAgcCB7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDA7XHJcbiAgICAgIGRpc3BsYXk6IGZsZXg7XHJcbiAgICAgIHdpZHRoOiA2NSU7XHJcbiAgICAgIG1hcmdpbi1sZWZ0OiBhdXRvO1xyXG4gICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XHJcbiAgICB9XHJcblxyXG4gICAgc3BhbiB7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA1MDA7XHJcbiAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuICAgICAgY29sb3I6ICM4ODhlYTg7XHJcbiAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XHJcbiAgICB9XHJcblxyXG4gICAgLmludi1zdWJ0aXRsZSB7XHJcbiAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICAgIGZvbnQtc2l6ZTogMTVweDtcclxuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xyXG4gICAgICBjb2xvcjogIzg4OGVhODtcclxuICAgICAgd2hpdGUtc3BhY2U6IG5vcm1hbDtcclxuICAgICAgbWFyZ2luLXJpZ2h0OiA0cHg7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICAuaW52LS10b3RhbC1hbW91bnRzIHtcclxuICAgIHBhZGRpbmc6IDAgMzVweDtcclxuICAgIG1hcmdpbi1ib3R0b206IDI1cHg7XHJcbiAgICBwYWRkaW5nLWJvdHRvbTogMjVweDtcclxuICAgIGJvcmRlci1ib3R0b206IDFweCBzb2xpZCAjZTBlNmVkO1xyXG5cclxuICAgIC5ncmFuZC10b3RhbC10aXRsZSBoNCwgLmdyYW5kLXRvdGFsLWFtb3VudCBoNCB7XHJcbiAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcclxuICAgICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgICAgZm9udC1zaXplOiAxNnB4O1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAwO1xyXG4gICAgICBwYWRkaW5nOiAwO1xyXG4gICAgICBjb2xvcjogI2ZmZjtcclxuICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xyXG4gICAgICBsZXR0ZXItc3BhY2luZzogMXB4O1xyXG4gICAgfVxyXG4gIH1cclxufVxyXG5cclxuLyogICAgSW52IGRldGFpbCBzZWN0aW9uICAgICovXHJcblxyXG4vKmludi1saXN0LW51bWJlciovXHJcblxyXG4vKmludi1jcmVhdGVkLWRhdGUqL1xyXG5cclxuLyppbnYtZHVlLWRhdGUqL1xyXG5cclxuLyogICAgSW52IHByb2R1Y3QgdGFibGUgc2VjdGlvbiAgICAqL1xyXG5cclxuLyppbnYtLXBheW1lbnQtaW5mbyovXHJcblxyXG4vKmludi0tdG90YWwtYW1vdW50cyovXHJcblxyXG4vKmludi0tbm90ZSovXHJcblxyXG4uaW52LS1ub3RlIHtcclxuICBwYWRkaW5nOiAwIDI1cHg7XHJcbiAgcGFkZGluZy1ib3R0b206IDI1cHg7XHJcblxyXG4gIHAge1xyXG4gICAgbWFyZ2luLWJvdHRvbTogMDtcclxuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XHJcbiAgICBjb2xvcjogIzBlMTcyNjtcclxuICB9XHJcbn1cclxuXHJcbkBtZWRpYSBwcmludCB7XHJcbiAgYm9keSAqIHtcclxuICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcclxuICB9XHJcblxyXG4gICNjdCB7XHJcbiAgICB2aXNpYmlsaXR5OiB2aXNpYmxlO1xyXG5cclxuICAgICoge1xyXG4gICAgICB2aXNpYmlsaXR5OiB2aXNpYmxlO1xyXG4gICAgfVxyXG4gIH1cclxuXHJcbiAgLmRvYy1jb250YWluZXIge1xyXG4gICAgcG9zaXRpb246IGFic29sdXRlO1xyXG4gICAgbGVmdDogMDtcclxuICAgIHJpZ2h0OiAwO1xyXG4gICAgdG9wOiAwO1xyXG4gIH1cclxufVxyXG5cclxuQHBhZ2Uge1xyXG4gIHNpemU6IGF1dG87XHJcbiAgbWFyZ2luOiAwbW07XHJcbn1cclxuXHJcbi8qXHJcbj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuICAgIEludm9pY2UgQWN0aW9ucyBCdXR0b25cclxuPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxyXG4qL1xyXG5cclxuLmludm9pY2UtYWN0aW9ucy1idG4ge1xyXG4gIHBhZGRpbmc6IDI1cHg7XHJcbiAgcGFkZGluZy10b3A6IDMycHg7XHJcbiAgcGFkZGluZy1ib3R0b206IDMycHg7XHJcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcclxuICBib3JkZXItcmFkaXVzOiA4cHg7XHJcbiAgYm9yZGVyOiAxcHggc29saWQgI2UwZTZlZDtcclxuXHJcbiAgbGFiZWwge1xyXG4gICAgZm9udC1zaXplOiAxNHB4O1xyXG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcclxuICAgIGNvbG9yOiAjNTE1MzY1O1xyXG4gIH1cclxuXHJcbiAgLmludm9pY2UtYWN0aW9uLWJ0biBhIHtcclxuICAgIC13ZWJraXQtdHJhbnNmb3JtOiBub25lO1xyXG4gICAgdHJhbnNmb3JtOiBub25lO1xyXG5cclxuICAgICYuYnRuLXNlbmQsICYuYnRuLXByaW50LCAmLmJ0bi1kb3dubG9hZCB7XHJcbiAgICAgIHdpZHRoOiAxMDAlO1xyXG4gICAgICBtYXJnaW4tYm90dG9tOiAyMHB4O1xyXG4gICAgfVxyXG5cclxuICAgICYuYnRuLWVkaXQge1xyXG4gICAgICB3aWR0aDogMTAwJTtcclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbi8qIEludm9pY2UgQWN0aW9ucyAtPiBhY3Rpb24tYnRuICovXHJcblxyXG5AbWVkaWEgKG1heC13aWR0aDogMTE5OXB4KSB7XHJcbiAgLmludm9pY2UtYWN0aW9ucy1idG4ge1xyXG4gICAgbWFyZ2luLXRvcDogMjVweDtcclxuXHJcbiAgICAuaW52b2ljZS1hY3Rpb24tYnRuIGEge1xyXG4gICAgICAmLmJ0bi1zZW5kLCAmLmJ0bi1wcmludCwgJi5idG4tZG93bmxvYWQge1xyXG4gICAgICAgIG1hcmdpbi1ib3R0b206IDA7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9XHJcbn1cclxuXHJcbkBtZWRpYSAobWF4LXdpZHRoOiA3NjdweCkge1xyXG4gIC5pbnZvaWNlLWFjdGlvbnMtYnRuIC5pbnZvaWNlLWFjdGlvbi1idG4gYSB7XHJcbiAgICAmLmJ0bi1zZW5kLCAmLmJ0bi1wcmludCB7XHJcbiAgICAgIG1hcmdpbi1ib3R0b206IDIwcHg7XHJcbiAgICB9XHJcbiAgfVxyXG59XHJcblxyXG5AbWVkaWEgKG1heC13aWR0aDogNTc1cHgpIHtcclxuICAuaW52b2ljZSAuY29udGVudC1zZWN0aW9uIC5pbnYtLXBheW1lbnQtaW5mbyB7XHJcbiAgICAuaW52LXRpdGxlIHtcclxuICAgICAgbWFyZ2luLXRvcDogMjVweDtcclxuICAgICAgbWFyZ2luLWxlZnQ6IDA7XHJcbiAgICAgIG1hcmdpbi1yaWdodDogYXV0bztcclxuICAgICAgbWFyZ2luLWJvdHRvbTogNnB4O1xyXG4gICAgICB3aWR0aDogYXV0bztcclxuICAgIH1cclxuXHJcbiAgICBwIHtcclxuICAgICAgbWFyZ2luLWxlZnQ6IDA7XHJcbiAgICAgIG1hcmdpbi1yaWdodDogYXV0bztcclxuICAgICAgd2lkdGg6IGF1dG87XHJcbiAgICAgIGp1c3RpZnktY29udGVudDogZmxleC1zdGFydDtcclxuICAgIH1cclxuXHJcbiAgICAuaW52LXN1YnRpdGxlIHtcclxuICAgICAgbWluLXdpZHRoOiAxNDBweDtcclxuICAgIH1cclxuICB9XHJcblxyXG4gIC5pbnZvaWNlLWFjdGlvbnMtYnRuIC5pbnZvaWNlLWFjdGlvbi1idG4gYS5idG4tZG93bmxvYWQge1xyXG4gICAgbWFyZ2luLWJvdHRvbTogMjBweDtcclxuICB9XHJcblxyXG4gIC5pbnZvaWNlIC5jb250ZW50LXNlY3Rpb24gLmludi0tcGF5bWVudC1pbmZvIHNwYW4ge1xyXG4gICAgd2hpdGUtc3BhY2U6IG5vcm1hbDtcclxuICB9XHJcbn0iLCJcclxuLy9cdD09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuLy9cdFx0XHRASW1wb3J0XHRDb2xvcnNcclxuLy9cdD09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cclxuXHJcblxyXG4kd2hpdGU6ICNmZmY7XHJcbiRibGFjazogIzAwMDtcclxuXHJcbiRwcmltYXJ5OiAjNDM2MWVlO1xyXG4kaW5mbzogIzIxOTZmMztcclxuJHN1Y2Nlc3M6ICMwMGFiNTU7XHJcbiR3YXJuaW5nOiAjZTJhMDNmO1xyXG4kZGFuZ2VyOiAjZTc1MTVhO1xyXG4kc2Vjb25kYXJ5OiAjODA1ZGNhO1xyXG4kZGFyazogIzNiM2Y1YztcclxuXHJcblxyXG4kbC1wcmltYXJ5OiAjZWNlZmZlO1xyXG4kbC1pbmZvOiAjZTZmNGZmO1xyXG4kbC1zdWNjZXNzOiAjZGRmNWYwO1xyXG4kbC13YXJuaW5nOiAjZmNmNWU5O1xyXG4kbC1kYW5nZXI6ICNmYmVjZWQ7XHJcbiRsLXNlY29uZGFyeTogI2YyZWFmYTtcclxuJGwtZGFyazogI2VhZWFlYztcclxuXHJcbi8vIFx0PT09PT09PT09PT09PT09PT1cclxuLy9cdFx0TW9yZSBDb2xvcnNcclxuLy9cdD09PT09PT09PT09PT09PT09XHJcblxyXG4kbS1jb2xvcl8wOiAjZmFmYWZhO1xyXG4kbS1jb2xvcl8xOiAjZjFmMmYzO1xyXG4kbS1jb2xvcl8yOiAjZWJlZGYyO1xyXG5cclxuJG0tY29sb3JfMzogI2UwZTZlZDtcclxuJG0tY29sb3JfNDogI2JmYzlkNDtcclxuJG0tY29sb3JfNTogI2QzZDNkMztcclxuXHJcbiRtLWNvbG9yXzY6ICM4ODhlYTg7XHJcbiRtLWNvbG9yXzc6ICM1MDY2OTA7XHJcblxyXG4kbS1jb2xvcl84OiAjNTU1NTU1O1xyXG4kbS1jb2xvcl85OiAjNTE1MzY1O1xyXG4kbS1jb2xvcl8xMTogIzYwN2Q4YjtcclxuXHJcbiRtLWNvbG9yXzEyOiAjMWIyZTRiO1xyXG4kbS1jb2xvcl8xODogIzE5MWUzYTtcclxuJG0tY29sb3JfMTA6ICMwZTE3MjY7XHJcblxyXG4kbS1jb2xvcl8xOTogIzA2MDgxODtcclxuJG0tY29sb3JfMTM6ICMyMmM3ZDU7XHJcbiRtLWNvbG9yXzE0OiAjMDA5Njg4O1xyXG5cclxuJG0tY29sb3JfMTU6ICNmZmJiNDQ7XHJcbiRtLWNvbG9yXzE2OiAjZTk1ZjJiO1xyXG4kbS1jb2xvcl8xNzogI2Y4NTM4ZDtcclxuXHJcbiRtLWNvbG9yXzIwOiAjNDQ1ZWRlO1xyXG4kbS1jb2xvcl8yMTogIzMwNGFjYTtcclxuXHJcblxyXG4kbS1jb2xvcl8yMjogIzAzMDMwNTtcclxuJG0tY29sb3JfMjM6ICMxNTE1MTY7XHJcbiRtLWNvbG9yXzI0OiAjNjFiNmNkO1xyXG4kbS1jb2xvcl8yNTogIzRjZDI2NTtcclxuXHJcbiRtLWNvbG9yXzI2OiAjN2QzMGNiO1xyXG4kbS1jb2xvcl8yNzogIzAwOGVmZjtcclxuXHJcblxyXG5cclxuXHJcbi8vXHQ9PT09PT09PT09PT09PT09PT09PT09PT1cclxuLy9cdFx0Q29sb3IgRGVmaW5hdGlvblxyXG4vL1x0PT09PT09PT09PT09PT09PT09PT09PT09XHJcblxyXG5cclxuJGJvZHktY29sb3I6ICRtLWNvbG9yXzE5OyJdfQ== */

</style>

</head>
<body>
  
<div class="layout-px-spacing">
    <div class="middle-content container-xxl p-0">

        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="doc-container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="invoice-container">
                                <div class="invoice-inbox">
                                    <div id="ct" class="">
                                        <div class="invoice-00001">
                                            <div class="content-section">
                                                <div class="ps-2 pt-3 pe-2 border-bottom">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="d-flex">
                                                                <img class="company-logo"
                                                                    src="{{ asset('storage/' . $bills->vendore->vendor_detail->satamp_logo ?? '') }}"
                                                                    alt="company" width="100px">
                                                            </div>
                                                            <p class="inv-street-addr mt-3">{!! $bills->company->first()->full_address !!}</p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->company->first()->pin ?? '' }}</p>
                                                        </div>
                                                        <div class="col-sm-6 text-sm-end">
                                                            <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span
                                                                    class="inv-title">Invoice : </span> <span
                                                                    class="inv-number">{{ $bills->invoice_no ?? '' }}</span>
                                                            </p>
                                                            <p class="inv-created-date mt-sm-5 mt-3">
                                                                <span class="inv-title">Invoice Date : </span>
                                                                <span
                                                                    class="inv-date">{{ $bills->invoice_date ?? '' }}</span>
                                                                <br>
                                                                <span class="inv-title">IEC :</span>
                                                                <span
                                                                    class="inv-date">{{ $bills->company->first()->iec ?? '' }}</span>
                                                                <br>
                                                                <span class="inv-title">GSTIN : </span>
                                                                <span
                                                                    class="inv-date">{{ $bills->company->first()->gstin_tan_pan ?? '' }}</span>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="text-center">Supply of export
                                                    without payment of IGST under LUT</p>
                                                <div class="inv--detail-section">
                                                    <div class="row ps-2 pe-2">
                                                        <div
                                                            class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">Invoice To</p>
                                                        </div>
                                                        <div
                                                            class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                            <h6 class=" inv-title">Invoice From</h6>
                                                        </div>

                                                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                            <p class="inv-customer-name">
                                                                {{ $bills->customer_name ?? '' }}</p>
                                                            <p class="inv-street-addr">
                                                                {{ $bills->customer->address ?? '' }}</p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->customer->email ?? '' }}</p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->customer->pincode ?? '' }}</p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->customer_mobile ?? '' }}</p>
                                                        </div>

                                                        <div
                                                            class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                            <p class="inv-customer-name">
                                                                {{ $bills->company->first()->company_name ?? '' }}</p>
                                                            <p class="inv-street-addr">{!! $bills->company->first()->full_address !!}
                                                            </p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->vendore->email ?? '' }}</p>
                                                            <p class="inv-email-address">
                                                                {{ $bills->company->first()->pin ?? '' }}</p>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="">
                                                    <div id="res" class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="">
                                                                <tr>
                                                                    <th scope="col">S.No</th>
                                                                    <th scope="col">PRODUCT</th>
                                                                    <th class="text-end" scope="col">HSN</th>
                                                                    <th class="text-end" scope="col">Price</th>
                                                                    <th class="text-end" scope="col">QTY</th>
                                                                    <th class="text-end" scope="col">UNIT</th>
                                                                    <th class="text-end" scope="col">WEIGHT</th>
                                                                    <th class="text-end" scope="col">RATE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="">
                                                                @foreach ($bills->billdatas as $data)
                                                                    <tr>
                                                                        <td>{{ $loop->index + 1 ?? '' }}</td>
                                                                        <td>{{ $data->product ?? '' }}</td>
                                                                        <td class="text-end">{{ $data->hsn ?? '' }}
                                                                        </td>
                                                                        <td class="text-end">
                                                                            {{ number_format($data->qty * $data->rate, 2) ?? '' }}
                                                                        </td>
                                                                        <td class="text-end">{{ $data->qty ?? '' }}
                                                                        </td>
                                                                        <td class="text-end">{{ $data->unit ?? '' }}
                                                                        </td>
                                                                        <td class="text-end">{{ $data->weight ?? '' }}
                                                                        </td>
                                                                        <td class="text-end">{{ $data->rate ?? '' }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="border-top border-bottom">
                                                    <div class="col-12 ps-3 pe-3">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class="">Weight: &nbsp;
                                                                    {{ $bills->total_weight ?? '' }} (kg)</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p style="float: right;">Sub
                                                                    Total : &nbsp;
                                                                    {{ $bills->currency->symbol ?? '' }}
                                                                    {{ $bills->total_price ?? '' }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row border-top">
                                                            <div class="col-6 d-flex">
                                                                <p class="p-0">Amount in words</p>
                                                            </div>
                                                            <div class="col-6 d-flex">
                                                                <p class="p-0">forty three thousands two hundred Rupees
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ps-2 pe-2">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-6">
                                                            <b class="text-dark">OUR BANK DETAILS</b>
                                                            <p>Bank of Name - {{ $bills->bank->bank_name ?? '' }}</p>
                                                            <p>Branch - {{ $bills->bank->bank_branch ?? '' }}</p>
                                                            <p>IFSC - {{ $bills->bank->bank_ifsc ?? '' }}</p>
                                                            <p>Account No - {{ $bills->bank->account_no ?? '' }}</p>
                                                            <p>A D Code - {{ $bills->bank->ad_code ?? '' }}</p>
                                                        </div>
                                                        <div class="col-sm-6 col-6 border-left">
                                                            <b class="text-dark">For {{$bills->company->first()->company_name??''}} -</b>
                                                            <br>
                                                            <img class="company-logo" width="200px"
                                                                src="{{ asset('storage/' . $bills->vendore->vendor_detail->signature ?? '') }}"
                                                                alt="company">
                                                            <br>
                                                            <br>
                                                            <p>Authorised Signatory</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inv--note border-top">
                                                        <div class="row mt-3">
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/compu.jpg') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/duroflex.jpg') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/epson.jpg') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/gobbler.jpg') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/kangro.jpg') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                            <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                <img src="{{ asset('assets/splashjet.png') }}"
                                                                    width="100px" alt="">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
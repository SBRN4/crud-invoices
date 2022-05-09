<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/34eefb7373.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="content">
        <div class="content-full-form undefined" style="min-width: 1100px;">
            <div class="header-full-form">
                <div style="text-align: center;"><label class="h-34 title-form pt--2 undefined">New
                        Invoice</label>
                    <div class="float-left"></div>
                    <div class="float-right pr--12"></div>
                </div>
            </div>
            <div class="content-full-form content---form">
                <div class="header-full-form text-left title--desc-form">
                    <div class="float-left">Invoice Details</div>
                    <div class="float-right pr--20"></div>
                    <div class="clear"></div>
                </div>
                <div class="content--form--input undefined">
                    <table class="table table-borderless invc-add-row-1">
                        <tbody>
                            <form>
                                <div class="row">
                                    <div class="col-2">
                                        <label for="inputCustomer">Customer<span class="required">
                                                *</span></label>
                                        <input type="text" class="form-control" placeholder="Select Customer">
                                    </div>
                                    <div class="col-2">
                                        <label for="inputDate">Tanggal Invoice<span class="required">
                                                *</span></label>
                                        <input type="date" class="form-control" placeholder="21 April 2022">
                                    </div>
                                    <div class="col-2">
                                        <label for="inputDate">Tanggal Jatuh Tempo<span class="required">
                                                *</span></label>
                                        <input type="date" class="form-control" placeholder="21 Mei 2022">
                                    </div>
                                    <div class="col-2">
                                        <label for="inputDate">Id Invoice<span class="required"> *</span></label>
                                        <input type="text" class="form-control" placeholder="A1">
                                    </div>
                                </div>
                            </form>
                        </tbody>
                    </table>
                    <div class="detil-tbl">
                        <div class="">
                            <table class="table content--table table-hover ">
                                <thead class="dynamic-header-table ">
                                    <tr row-index="undefined" style="cursor: inherit;">
                                        <th class="font-weight-normal font-bold wd---160 pl--15 "><label
                                                class="font-size--12">ITEM</label></th>

                                        <th class="font-weight-normal font-bold text-right wd--50"><label
                                                class="font-size--12">
                                                QTY
                                                <span class="required"> *</span>
                                            </label></th>
                                        <th class="font-weight-normal text-right wd--115 wd----200 font-bold">
                                            <label class="font-size--12">
                                                UNIT PRICE
                                                <span class="required"> *</span>
                                            </label>
                                        </th>
                                        <th class="font-weight-normal wd--75 font-bold text-right "><label
                                                class="font-size--12">DISC %</label></th>
                                        <th class="font-weight-normal wd-----250 font-bold wd----250"><label
                                                class="font-size--12">
                                                TAX
                                            </label></th>
                                        <th class="font-weight-normal min-width-150 text-right font-bold  pr--0 pl--2">
                                            <label class="">AMOUNT</label>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="content--table-body" row-index="0" style="cursor: inherit;">
                                        <td class="table--title-header wd--50 pr--0 pl--2 font-size--12"
                                            own-click="undefined">
                                            <div class="col-input-type"><input type="text" value=""
                                                    placeholder="Input your item"
                                                    class="input-type-number font-number wd--50 font-size--12"
                                                    maxlength="15"></div>
                                        </td>
                                        <td class="table--title-header wd--50 pr--0 pl--2 font-size--12"
                                            own-click="undefined">
                                            <div class="col-input-type"><input type="text" value="" placeholder="0"
                                                    class="input-type-number font-number wd--50 font-size--12"
                                                    maxlength="15"></div>
                                        </td>
                                        <td class="table--title-header wd--110 pr--0 pl--2 font-size--12"
                                            own-click="undefined">
                                            <div class="col-input-type"><input type="text" value="" placeholder="0.00"
                                                    class="input-type-number  font-size--12 text-right font-number"
                                                    maxlength="15"></div>
                                        </td>
                                        <td class="pl--2 table--title-header wd--63 pr--0" own-click="undefined">
                                            <div class="col-input-type"><input type="text" value="" placeholder="0.00"
                                                    class="input-type-number font-size--12 font-number" maxlength="15">
                                            </div>
                                        </td>
                                        <td class="pl--2 table--title-header wd--63 pr--0" own-click="undefined">
                                            <div class="col-input-type"><input type="text" value="" placeholder="0.00"
                                                    class="input-type-number font-size--12 font-number" maxlength="15">
                                            </div>
                                        </td>
                                        <td class="font-size--12 table--title-header text-right font-number min-width-150 pr--0"
                                            own-click="undefined"><label class="mw-180 break-word">0.00</label></td>
                                        <td class=" wd--50 wd--50 table--title-header pr--15" own-click="undefined"> <i
                                                class="fa-solid fa-trash-can"> </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="add-row">
                            <div class="ant-btn-group ant-dropdown-button btn-add-row"><button type="button"
                                    class="ant-btn ant-btn-default"><span>Add New
                                        Rows</span><span>&nbsp;</span></button><button type="button"
                                    class="ant-btn ant-dropdown-trigger ant-btn-default"><i
                                        class="fa-solid fa-caret-down"></i></button></div>
                        </div>
                    </div>
                    <div style="height: 50px; width: 100%;"></div>
                    <table class="table table-borderless table-valign-top table-padding-0">
                        <tbody>
                            <tr>
                                <td rowspan="2">
                                    <div>
                                        <div>
                                            <div class="font font- font-bold">Deskripsi</div>
                                            <div class="pt--15">
                                                <textarea class="textArea wd--300" maxlength="1000" placeholder="Add some notes for internal use"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer-full-form">
                <div class="float-left"></div>
                <div class="float-right">
                    <div><a href="http://127.0.0.1:8000/"><button class="button-cancel wd--100 button-cancel">Cancel</button></a>
                        <div class="ant-btn-group ant-dropdown-button btn-add-dropdown mr--3"><button type="submit"
                                class="ant-btn ant-btn-default"><span>Create</span><span>&nbsp;</span></button><button
                                type="submit" class="ant-btn ant-dropdown-trigger ant-btn-default"><i
                                    class="fa-solid fa-caret-down"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'information/index' + location.search,
                    add_url: 'information/add',
                    edit_url: 'information/edit',
                    del_url: 'information/del',
                    multi_url: 'information/multi',
                    table: 'information',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'admin_id', title: __('Admin_id')},
                        {field: 'big_image', title: __('Big_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'position', title: __('Position')},
                        {field: 'small_image', title: __('Small_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'title', title: __('Title')},
                        {field: 'Age', title: __('Age')},
                        {field: 'Location', title: __('Location')},
                        {field: 'education', title: __('Education')},
                        {field: 'work_years', title: __('Work_years')},
                        {field: 'gender', title: __('Gender'), searchList: {"male":__('Gender male'),"female":__('Gender female')}, formatter: Table.api.formatter.normal},
                        {field: 'salary', title: __('Salary')},
                        {field: 'phone', title: __('Phone')},
                        {field: 'email', title: __('Email')},
                        {field: 'address', title: __('Address')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});
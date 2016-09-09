<h3 class="page-title"> Заказы
    <small></small>
</h3>
<div class="row">
    <div class="col-md-10">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-basket font-dark"></i>
                    <span class="caption-subject bold uppercase"> Список Заказов</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided">
<!--                        <button type="submit" class="btn green btn-outline">-->
<!--                            <i class="fa fa-save"></i> Save-->
<!--                        </button>-->
                    </div>
                </div>
            </div>
            <div class="portlet-body custom-datatable">
                <table class="table table-bordered" id="get_orders">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Продукт</th>
                        <th>Статус</th>
                        <th>Дата Создания</th>
                        <th>Дата Оплаты</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete_user_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Удалить Сотрудника</h4>
            </div>
            <div class="modal-body">
                <p>Вы уверены?</p>
            </div>
            <div class="modal-footer">
                <form action="" method="post">
                    <input name="delete_id" id="delete_input" type="hidden" value="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
                    <button type="submit" name="delete_btn" class="btn btn-primary">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function() {
        ajax_datatable('get_orders');
        $("body").on("click", ".delete_user", function()
        {
            var id = $(this).attr('data-id');
            $("#delete_input").val(id);
        });
    });
</script>
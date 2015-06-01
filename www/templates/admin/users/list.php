<h1>Пользователи</h1>
<hr>
<div class="row">
    <div class="col-md-10 custom-datatable">
        <table class="table table-bordered" id="get_users_table">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Группа</th>
                <th>Email</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
<!--            --><?php //foreach($users as $user): ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $user['id']; ?><!--</td>-->
<!--                    <td>--><?php //echo $user['user_name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $user['user_surname']; ?><!--</td>-->
<!--                    <td>--><?php //echo $user['group_name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $user['login']; ?><!--</td>-->
<!--                    <td>--><?php //echo $user['create_date']; ?><!--</td>-->
<!--                    <th>-->
<!---->
<!--                    </th>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="delete_user_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure?</p>
            </div>
            <div class="modal-footer">
                <form action="" method="post">
                    <input name="delete_id" id="delete_input" type="hidden" value="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="delete_btn" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function() {
        ajax_datatable('get_users_table');
        $("body").on("click", ".delete_user", function()
        {
            var id = $(this).attr('data-id');
            $("#delete_input").val(id);
        });
    });
</script>
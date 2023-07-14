<?php

use App\Models\Order;

$order = new Order();

$list = $order->order_list();

?>



<?php require_once('../views/backend/header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class="text-danger">DANH MỤC SẢN PHẨM</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=order&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=order&cat=deltrash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Thùng rác
                        </a>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20px">#</th>
                            <th>Code</th>
                            <th class="text-center">Ngày khởi tạo</th>
                            <th class="text-center">Ngày xuất</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Tên</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Chức năng</th>
                            <th class="text-center">ID</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox">
                                </td>
                                <td><?php echo $row['code']; ?></td>
                                <td class="text-center"><?php echo $row['createdate']; ?></td>
                                <td class="text-center"><?php echo $row['exportdate']; ?></td>
                                <td class="text-center"><?php echo $row['deliveryaddress']; ?></td>
                                <td class="text-center"><?php echo $row['deliveryname']; ?></td>
                                <td class="text-center"><?php echo $row['deliveryphone']; ?></td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 1) : ?>
                                        <a href="index.php?option=order&cat=status" class="btn btn-sm btn-success">
                                            <i class="fas fa-toggle-on"></i>
                                        </a>
                                    <?php else : ?>
                                        <a href="index.php?option=order&cat=status" class="btn btn-sm btn-danger">
                                            <i class="fas fa-toggle-off"></i>
                                        </a>
                                    <?php endif; ?>
                                    <a href="index.php?option=order&cat=update" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=order&cat=deltrash" class="btn btn-sm btn-warning">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td class="text-center"><?php echo $row['id']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once('../views/backend/footer.php'); ?>
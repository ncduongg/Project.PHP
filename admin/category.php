<?php include 'header.php' ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
   
          <div class="row">
            <div class="col-md-3">
              <form method="POST" action="" name="cF">
                <div class="form-group">
                  <label for="">Tên danh mục</label>
                  <input name="name" ng-model="cat.name" class="form-control" placeholder="Tên banner">
                </div>
               
                <div class="form-group">
                  <label for="">Trạng thái</label>
                 <div class="radio">
                   <label for="show">
                     <input ng-model="cat.status"  type="radio" name="status" value="1"> Hiện
                   </label>
                    <label for="hide">
                     <input type="radio"  ng-model="cat.status" name="status" value="0"> Ẩn
                   </label>
                 </div>
                </div>
                
                 <div class="form-group">
                  <button ng-show="!cat.id" type="button" ng-click="add_cat()" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
                  <button ng-show="cat.id" type="button" ng-click="update_cat()" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                </div>
              </form>
            </div>
            <div class="col-md-9">
              <?php include 'category-table.php'; ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>
<!-- start page content -->
<div class="page-content-wrapper">
  <div class="page-content">

    <div class="col-md-12 col-sm-12">
      <div class="borderBox light bordered">
        <div class="borderBox-title tabbable-line">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#borderBox_tab1" data-toggle="tab" class="active"> حسابي </a>
            </li>
          </ul>
        </div>
        <div class="borderBox-body">
          <div class="tab-content">
              <div class="tab-pane active" id="borderBox_tab1">

                <form action="#" id="form_sample_1" class="form-horizontal" novalidate="novalidate">
                <div class="caption text-right col-md-2">
                  <span class="caption-subject font-dark bold uppercase">معلومات شخصية</span>
                </div>

                <div class="">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label col-md-2">الأسم
                    </label>
                    <div class="col-md-8">
                    <input type="text" name="firstname" data-required="1" placeholder="" class="form-control input-height"> </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2">البريد الالكتروني
                    </label>
                    <div class="col-md-8">
                    <div class="input-group">
                    <input type="text" class="form-control input-height" name="email" placeholder=""> </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2">رقم الهاتف
                    </label>
                    <div class="col-md-8">
                    <input name="number" type="text" placeholder="" class="form-control input-height"> </div>
                  </div>
                </div>
                <div class="checks text-right">
                  <div class="checkbox rtl checkbox-yellow">
                    <input id="checkboxbg2" type="checkbox" checked="checked">
                    <label for="checkboxbg2">
                    إرسال إشعارات بأخر التحديثات على البريد الالكتروني
                    </label>
                  </div>
                </div>
                <div class="caption text-right col-md-2">
                  <span class="caption-subject font-dark bold uppercase">كلمة المرور</span>
                </div>

                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label col-md-2">كلمة المرور
                    </label>
                    <div class="col-md-8">
                      <input type="password" name="pass" data-required="1" placeholder="" class="form-control input-height">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2">كلمة المرور الجديدة
                    </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <input type="password" class="form-control input-height" name="confirm_pass" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2">إعادة كلمة المرور الجديدة
                    </label>
                    <div class="col-md-8">
                      <input name="confirm_pass2" type="password" placeholder="" class="form-control input-height">
                    </div>
                  </div>

                  <div class="form-actions">
                    <div class="col-lg-12 p-t-20 text-center">
                      <button type="submit" class="btn btn-info m-r-20">حفظ</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
      </div>
    </div>
    
  </div>
</div>
<!-- end page content -->

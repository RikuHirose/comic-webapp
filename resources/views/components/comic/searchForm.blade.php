<div id="search-form" class="panel-primary panel" style="border: 0.5px solid rgb(51, 122, 183);">
  <div class="panel-heading" style="color: #fff; background-color: #337ab7;border-color: #337ab7; padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;">
    <h3 class="panel-title" style="margin-top: 0;margin-bottom: 0;font-size: 16px;color: inherit;">検索項目</h3>
  </div>
  <div class="panel-body mt-3" style="padding: 0 15px;">
    <div class="row"><div class="col-xs-12"><div class="fl hidden"><p></p></div></div></div>
    <form action="/q" accept-charset="UTF-8" method="get">
      <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
          <input placeholder="授業名" name="lesson_title" type="text" value="" class="form-control"></div>
          <div class="form-group col-sm-6 col-xs-12">
            <input placeholder="教授名" name="lesson_professor" type="text" value="" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-3 col-xs-6">
            <select name="year" class="form-control">
              <option value="" selected="selected">年度</option><option value="2018">2018年度</option>
            </select>
          </div>
          <div class="form-group col-sm-3 col-xs-6">
            <select name="lesson_term" class="form-control">
              <option value="" selected="selected">学期</option><option value="前期">前期のみ</option><option value="後期">後期のみ</option><option value="通年">通年</option>
            </select>
          </div>
        </div>
        <div class="pull-right"><div class="form-group"><input type="submit" value="検索" data-disable-with="送信中..." class="btn btn-success btn-go"></div></div>
        <div class="clearfix"></div>
    </form>
  </div>
</div>